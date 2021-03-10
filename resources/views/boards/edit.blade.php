@extends('layouts.board')

@section('main')
    <h1 class="font-thin text-4xl">留言版 > 編輯留言</h1>

    @if($errors->any())
        <div class="errors p-3 bg-red-500 text-red-100 font-thin rounded">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('boards.update', $board) }}" method="post">
        @csrf
        @method('patch')
        <div class="field my-2">
            <label for="">姓名</label>
            <input type="text" value="{{ $board->name }}" name="name" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">標題</label>
            <input type="text" value="{{ $board->title }}" name="title" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">內容</label>
            <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2">{{ $board->content }}</textarea>
        </div>

        <div class="actions">
            <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">更新留言</button>
        </div>
    </form>
@endsection