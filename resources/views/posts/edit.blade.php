<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

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
    <h1>Изменить пост</h1>
    <form {{ route('posts.store') }} method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required value="{{ $post -> title }}">
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" >{{ $post -> content }}</textarea>
        <br>
        <button type="submit" class="btn">Обновить</button>
    </form>
</body>
</html>
