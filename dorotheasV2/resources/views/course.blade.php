@extends('layouts.pages')

@section('content')
    <div>
        <div class="pages-course-header d-flex justify-content-center align-items-center align-self-end">
            <img src="{!! asset('assets/icon_project_black.svg') !!}" alt="">
            <h1>orotheas</h1>
        </div>

        <div class="pages-course-main d-flex flex-wrap">
            @for($i = 0; $i < 9; $i++)
                @include('components.card-pages-courses')
            @endfor
        </div>
    </div>
    @include('components.menu-pages')
    @include('components.modals.register-course')
@endsection
