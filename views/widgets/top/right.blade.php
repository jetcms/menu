@if (Auth::check())
    <li @if (Request::url() == url('lk')) class="active" @endif><a href="/lk">Личный кабинет</a></li>
    <li><a href="/auth/logout">Выход</a></li>
@else
    <li @if (Request::url() == url('auth/register')) class="active" @endif><a
                href="/auth/register">Регистрация</a></li>
    <li @if (Request::url() == url('auth/login')) class="active" @endif><a href="/auth/login">Вход</a></li>
@endif