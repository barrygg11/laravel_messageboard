<html>
<a href="{{ route('apples.index') }}">顯示所有留言</a>
<form action="{{ route('apples.store') }}" method="post">
    @csrf
        名稱:<input type="text" value="{{ old('name') }}" name="name"><p>
        內容:<textarea name="content">{{ old('content') }}</textarea><p>
        <button type="submit">新增留言</button>
        </div>
</form>
</html>
