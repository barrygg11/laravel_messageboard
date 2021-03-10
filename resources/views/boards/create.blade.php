@extends('layouts.board')

@section('main')
    <h1 class="font-thin text-4xl">留言板 > 新增留言</h1>

    @if($errors->any())
        <div class="errors p-3 bg-red-500 text-red-100 font-thin rounded">
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
        </div>
    @endif

    <form action="{{ route('boards.store') }}" method="post">
        @csrf
        <div class="field my-2">
            <label for="">姓名</label>
            <input type="text" value="{{ old('name') }}" name="name" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">標題</label>
            <input type="text" value="{{ old('title') }}" name="title" class="border border-gray-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">內容</label>
            <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2">{{ old('content') }}</textarea>
            <marquee direction="right" height="30" scrollamount="5" behavior="alternate">內容請輸入超過10個字</marquee>
        </div>

        <div class="actions">
            <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-300">新增留言</button>
        </div>
    </form>
@endsection