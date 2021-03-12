<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\apple;

class apple extends Model
{
    use HasFactory;


    //public function __construct(){
      //  $this->view('apple');
    // }


    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function index(){
        $apples =apple::paginate(3);
        return view('apples.index');
}
    public function create(){
        return view('apples.display');
}
    
    public function store(Request $request) {
        $content = $request->validate([
            'name' => 'required',
            'content' => 'required'
            ]);
            return redirect()->route('root');
    }

    protected $fillable = ['name', 'content'];
}


