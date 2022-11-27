@extends('game')
@section('content')
    <div class="levels">
        <div class="box-levels">
            <div class="box-planets">
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/mercurio.png') }}" alt="Mercúrio">
                        <span>Mercúrio</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/venus.png') }}" alt="">
                        <span>Vênus</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/terra.png') }}" alt="">
                        <span>Terra</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/marte.png') }}" alt="">
                        <span>Marte</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/jupter.png') }}" alt="">
                        <span>Júpter</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/saturno.png') }}" alt="">
                        <span>Saturno</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/urano.png') }}" alt="">
                        <span>Urano</span>
                    </a>
                </div>
                <div class="planet">
                    <a href="#" class="elements-planet">
                        <img src="{{ asset('img/planets/netuno.png') }}" alt="">
                        <span>Netuno</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection