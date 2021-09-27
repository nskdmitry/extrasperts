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
            <div>
                <form action="{{url('/user/wish')}}" method="post">
                    {{ csrf_field() }}
                    <label for="login">Ваше имя: </label>
                    <input class="flex-center" type="text" name="login" placeholder="Представьтесь, пожалуйста"/><br/>
                    <label for="email">Ваша почта<sub>*</sub></label>
                    <input class="flex-center" type="email" name="email" placeholder="Ваш e-mail (обязательно)" required /><br/>
                    <button class="flex-center" type="submit">Загадали?<br/>Жмите!</button>
                </form>
            </div>
        </div>
    </body>
</html>
