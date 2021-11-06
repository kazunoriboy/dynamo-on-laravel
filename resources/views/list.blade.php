<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
    <form action="{{ route('store') }}">
        <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
</body>
</html>
