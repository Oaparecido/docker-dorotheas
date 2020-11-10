@extends('layouts.main')

@section('content')
    <div class="content-home d-flex justify-content-center ">
        <div>
            <div class="content-part-1 d-flex align-items-center">
                <img src="{!! asset('assets/icon_project.svg') !!}" alt="">
                <div>
                    <p>Centro comunitário</p>
                    <h3>Madre Anunciata Cocchetti</h3>
                </div>
            </div>

            <div class="content-part-2">
                <h1>dorotheas</h1>
                <p>Moldando futuros</p>
            </div>

            <div class="content-part-3 d-flex justify-content-between">
                <div class="d-flex flex-column justify-content-center">
                    <h2>Mais de</h2>
                    <div class="d-flex align-items-center">
                        <img src="{!! asset('assets/icon_book.svg') !!}" alt="">
                        <p>100 cursos</p>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center">
                    <h2>Mais de</h2>
                    <div class="d-flex align-items-center">
                        <img src="{!! asset('assets/icon_students.svg') !!}" alt="">
                        <p>130 alunos</p>
                    </div>
                </div>
            </div>

            <div class="content-button-register d-flex align-items-center">
                <a href="" class="d-flex justify-content-around" id="button-register" data-toggle="modal"
                   data-target="#modal_register">
                    <h3>Cadastre-se</h3>
                    <img src="{!! asset('assets/icon_arrow.svg') !!}" alt="">
                </a>
            </div>
        </div>

        <div class="content-part-heart d-flex justify-content-center">
            <img src="{!! asset('assets/heart_home.svg') !!}" alt="">
        </div>
    </div>
    @include('components.menu')
    @include('components.modals.register')
    @include('components.modals.login')

    @if(request()->has('error') && request()->get('error') === 'already-exists')
        <script src="{{ asset('js/register.js') }}" defer></script>
    @endif
@endsection
