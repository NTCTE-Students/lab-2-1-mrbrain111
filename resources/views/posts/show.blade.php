<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
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
    <a href="{{ route('posts.index') }}">Назад</a>
    <h1>Просмотр поста</h1>
    <h2>{{ $post -> title}}</h2>
    <p>{{ $post -> content}}</p>
    <form action="{{ route('posts.delete', ['id' => $post->id]) }}" method="POST">
        @csrf  <!-- Для защиты от CSRF атак -->
        @method('DELETE')
        <button type="submit" class='btn'>Удалить</button>
    </form>
    <br>
    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn">Редактировать</a>
</body>
</html>
