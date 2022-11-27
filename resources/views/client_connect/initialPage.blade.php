@extends('app')
@section('content')
<div><img src="{{ asset('img/logo.png') }}" alt="logo"></div>
<div class="container">
    <div class="options">
        <div>
            <a href="{{ route('user.create') }}"><input type="submit" value="Cadastrar" class="btn btn-primary m-4"></a>
        </div>
        <div>
            <a href="{{ route('user.index') }}"><input type="submit" value="Conectar" class="btn btn-primary m-4"></a>
        </div>
    </div>
</div>  
@endsection