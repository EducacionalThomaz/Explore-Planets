@extends('game')
@section('content')        
    <div class="container d-flex justify-content-center align-items-center flex-column mt-4">
        <img class="mb-3" src="{{ asset('img/logo.png') }}" alt="">
        <div class="d-grid gap-2 col-4 mx-auto mt-4">
            <a class="btn btn-primary btn-md" href="/game/quiz" role="button">Jogar</a>
            <a class="btn btn-primary btn-md" href="{{ route('game.level') }}" role="button">Níveis</a>
        </div>
    </div>
    <footer class="text-center mt-5 p-2 equipe">
        <div>&copy;EduSpace</div>
    </footer>
@endsection