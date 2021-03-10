@extends('layouts.board')

@section('main')
    <h1 class="font-thin text-4xl">留言板</h1>

    <div class="field my-2">
    <a href="{{ route('boards.create') }}">新增留言</a>
    </div>


    @foreach($boards as $board)
    <div class="border-t border-gray-300 my-1 p-2">
    <h2 class="font-bold text-lg">姓名：{{ $board->name }}</h2>
    <h2 class="font-bold text-lg">標題：{{ $board->title }}</h2>
    <h2 class="font-bold text-lg">內容：{{ $board->content }}</h2>
    
    <p>
    {{ $board->created_at }} 由 {{ $board->user->name }} 使用者所留言的
    </p>
    <div class="flex">
                <a class="mr-2" href="{{ route('boards.edit', $board) }}">編輯</a>
                <form action="{{ route('boards.destroy', $board) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="px-2 rounded bg-red-500 text-red-100">刪除</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $boards->links() }}
@endsection