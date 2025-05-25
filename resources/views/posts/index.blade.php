<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #1b1609;
        }
        body {
            background-color: #faf6e0;
        }
        h1 {
            font-size: 35px
        }
        h2 {
            font-size: 25px
        }
        p {
            font-size: 20px
        }
        .btn {
            padding: 10px;
            background: #f8ab46;
            border-radius: 5px;
            text-decoration: none;
            border: none;
        }
        .btn:hover {
            background-color: #ec8f16
        }
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Посты</h1>
    <a href="{{ route('posts.create') }}" class="btn">Создать новый пост</a>
    <ul>
        @foreach ($posts as $post)

            <a href="{{ route('posts.show',  $post->id)}}"><li>{{ $post->title }}</li></a>
        @endforeach
    </ul>
</body>
</html>
