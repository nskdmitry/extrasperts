<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include("handler", ['title' => 'Гадатели'])
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Битва экстрасексов
                </div>

                <div class="text">Добро пожаловать, дорогой посетитель. Вы не верите в дремлющие в человеке сверхспособности! Тогда вы по адресу!
                    <br />Наши мощные сверхчувственные, собранные со всех концов нашей необъятной родины, вернут вам забутую в детстве веру в чудеса!
                    <br />Не верите? А давайте проверим!
                </div>
            </div>
            @include('wish.form')
        </div>
    </body>
</html>
