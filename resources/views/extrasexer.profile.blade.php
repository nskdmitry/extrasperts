<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .hidden_error {
            font-size: small;
            color: grey;
        }
    </style>
</head>
<body>
    <div>
        @isset($person)
            <div class="content">{{$person->name}}</div>
            <div class="content">Уровень доверия: {{$person->calcRating}}</div>
        @endisset
        <div class="content"><h4>Почему вы можете верить этому человеку?</h4></div>
        <ul>
        @if(!!$history && count($history) > 0)
            @foreach($history as $case)
                <li><div>
                    {{$case->userCase->created}}. Пользователь {{$case->userCase->user->name}} загадал число {{$case->userCase->number}}.
                    И это было предсказано {{$case->created}}: {{$case->telling}}!
                    @if(!$case->trueth)
                        <sub class="hidden_error">Промашка вышла. Забудьте. Забудьте, вам сказано!</sub>
                    @endif
                </div></li>
            @endforeach
        @endif
        </ul>
    </div>
</body>
</html>
