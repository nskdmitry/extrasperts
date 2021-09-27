<div>
    <form action="{{url('/user/wise')}}" method="post">
        @csrf
        <label for="login">Ваше имя: </label>
            <input class="flex-center" type="text" name="login" placeholder="Представьтесь, пожалуйста"/><br/>
        <label for="email">Ваша почта<sub>*</sub></label>
            <input class="flex-center" type="email" name="email" placeholder="Ваш e-mail (обязательно)" required /><br/>
        <button class="flex-center" type="submit">Загадали?<br/>Жмите!</button>
    </form>
</div>
