<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include("handler", ['title' => "Гадатель {$person->name}"])
</head>
<body>
    <div>
        @isset($person)
            <div class="title m-b-md">{{$person->name}}</div>
            <div class="content">Уровень доверия: {{$person->calcRating}}</div>
        @endisset
        <div class="content"><h4>Почему вы можете верить этому человеку?</h4></div>
        <ul>@each('extra.story', $history, 'case', 'extra.new')</ul>
    </div>
</body>
</html>
