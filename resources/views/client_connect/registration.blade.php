@extends('app')
@section('content')
<main class="container">
    <h2>Cadastro</h2>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="" class="form-label">Úsuario</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div>
            <label for="" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div>
            <label for="" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <a href="{{ route('user.index') }}">Já tem uma conta? Clique aqui</a>
        <input class="button" type="submit">
    </form>
</main>
@endsection
