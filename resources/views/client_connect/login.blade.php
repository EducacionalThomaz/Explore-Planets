@extends('app')
@section('content')
<main class="container">
    <h2>Login</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.auth') }}" method="POST">
        @csrf
        <div>
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
        </div>
        <div>
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
        </div>
        <a href="{{ route('user.create') }}">Ainda não tem uma conta?</a>
        <input class="button" type="submit">
    </form>
</main>
@endsection