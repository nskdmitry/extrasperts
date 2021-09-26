<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('handler', ["title" => "Дайте ответ!"])
</head>
<body>
    <div class="flex-center position-ref">
        <h4>История загадок от пользователя {{$user->name}}</h4>
        @each('wish.item', $wishes, 'wish')
    </div>
</body>
</html>
