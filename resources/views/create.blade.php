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
<form action="/posts" method="post">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" name="postTitle" id="title"><br>
    <label for="content">Content:</label><br>
    <textarea name="postContent" id="content"></textarea><br>
    <button type="submit">Create</button>
</form>
</body>
</html>
