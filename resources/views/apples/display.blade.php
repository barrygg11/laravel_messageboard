<html>
<form>
@foreach($apples as $apple)
姓名：{{ $apple->name }}
內容：{{ $apple->content }}
@endforeach
</form>
</html>

