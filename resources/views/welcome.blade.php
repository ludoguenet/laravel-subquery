<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($authors as $author)
  <u>{{ $author->name }} ({{ $author->best_sale }})</u>

{{--    @foreach($author->books as $book)--}}
{{--        <div>--}}
{{--            <div>--}}
{{--                Nom: {{ $book->name }} ({{ $book->selling_count }})--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
    <br />
    <br />
@endforeach
</body>
</html>
