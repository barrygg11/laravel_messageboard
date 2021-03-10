<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\board;

class boardsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function index(){
        $boards =board::paginate(3);
        return view('boards.index',['boards' => $boards]);
}
    public function create(){
        return view('boards.create');
}
    
    public function store(Request $request) {
        $content = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required|min:10'
            ]);

        auth()->user()->boards()->create($content);
        return redirect()->route('root')->with('notice', '留言新增成功！！');
    }

    public function edit($id) {
        $board = auth()->user()->boards->find($id);
        return view('boards.edit', ['board' => $board]);
    }

    public function update(Request $request, $id) {
        $board = auth()->user()->boards->find($id);

        $content = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        $board->update($content);
        return redirect()->route('root')->with('notice', '留言更新成功！');
    }

    public function destroy($id) {
        $board = auth()->user()->boards->find($id);
        $board->delete();
        return redirect()->route('root')->with('notice', '留言已刪除！');
    }
}