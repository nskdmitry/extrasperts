<li><div>
        {{$case->userCase->created}}. Пользователь {{$case->userCase->user->name}} загадал число {{$case->userCase->number}}.
        И это было предсказано {{$case->sayer->name}} {{$case->created}}: {{$case->telling}}!
        @if(!$case->trueth)
            <sub class="hidden_error">Промашка вышла. Забудьте. Забудьте, вам сказано!</sub>
        @endif
    </div></li>
