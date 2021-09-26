<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('handler', ["title" => "Дайте ответ!"])
</head>
<body>
    <div class="flex-center position-ref">
        <p>Наши медиумы изрыли весь астрал в поисках ответа.
            <ul>@each('extra/story', $tries, 'case')</ul>
        </p>
        <p>Не мучайте нас, скажите, кто уга... кто увидел ответ!</p>
        <form action="{{route("/user/wish/answer")}}" method="post">
            <input type="hidden" name="id" value="{{$id}}">
            <input type="number" name="number" min="10" max="99"><br/>
            <button type="submit">Дать ответ</button>
        </form>
        <p>Ваш прежний опыт можно посмотреть <a href="{{ route("/user/{$user->id}/profile") }}">здесь.</a> </p>
    </div>
</body>
</html>
