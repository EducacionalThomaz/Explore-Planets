@extends('game')
@section('content')
    <div class="p-4 m-2 mt-5 modes">
        <div class="d-flex justify-content-center align-items-center gap-4 col-4 mx-auto">
           <a class="btn btn-success btn-lg" href="/game/quiz" role="button">Fácil</a>
           <a class="btn btn-warning btn-lg" href="/game/quiz" role="button">Médio</a>
           <a class="btn btn-danger btn-lg" href="/game/quiz" role="button">Hard</a>
        </div>
    </div>
@endsection