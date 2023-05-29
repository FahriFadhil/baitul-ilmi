@extends('layouts.app')

@section('content')
<div class="container-login">

    <div class="form-box">
        <h1>Log In Admin SMAIT Baitul 'Ilmi</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <div class="flex">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Ingatkan Saya</label>
            </div>
            <button type="submit" id="signupBtn">Log In</button>
        </form>
    </div>

</div>
@endsection



@section('css')
<style>
    .container-login {
        width: 100%;
        height: 90vh;
        background: linear-gradient(rgba(0, 0, 50, 0.8), rgba(46, 46, 46, 0.8)), url(/image/Baitul_Ilmi.jpeg);
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .form-box {
        background-color: white;
        padding: 3rem 4rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 32rem;
        border-radius: .5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form-box h1 {
        font-size: 1.5rem;
        text-align: center;
        color: #89B93B;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 75%;
        margin-top: 2rem;
    }

    form label {
        font-size: .9rem;
    }
    form input#email, form input#password {
        border: none;
        background-color: rgba(0, 0, 0, .1);
        width: 100%;
        padding: .5rem 1rem;
        margin-bottom: 1rem;
        margin-top: .25rem;
        outline: none;
    }
    .flex {
        display: flex;
        gap: .5rem;
        margin-bottom: 2rem;
    }
    button {
        background-color: #89B93B;
        border: none;
        border-radius: 2rem;
        padding: .5rem;
        color: white;
        transition: .3s;
    }

    button:hover {
        background-color: rgba(137, 185, 59, .5);

    }
</style>
@endsection