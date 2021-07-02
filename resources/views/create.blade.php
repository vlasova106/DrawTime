<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с изображениями в Laravel</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        table, th, td{
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="comment">Введите комментарий</label>
            <input class="form-control" id="comment" placeholder="Комментарий" name="comment">
        </div>
        <div class="form-group">
            <label for="user_id">Id пользовтеля</label>
            <input class="form-control" id="user_id" placeholder="Id" name="user_id">
        </div>
        <div class="form-group">
            <label for="ref_id">Id референса </label>
            <input class="form-control" id="ref_id" placeholder="Id" name="ref_id">
        </div>
        <div class="form-group">
            <label for="img">Выберите файл</label>
            <input id="img" type="file" multiple name="file[]">
        </div>
        <button type="submit" class="btn btn-default">Добавить</button>
    </form>
</div>
</body>
</html>