<div class="menu d-flex flex-column align-self-start justify-content-between align-items-center">
    <a href="" class="menu-icon-menu d-flex justify-content-center mt-3">
        <img src="{{ asset('/assets/icon_menu.svg') }}" alt="">
    </a>

    <div class="menu-icons-bottom d-flex flex-column align-items-center justify-content-center">
        <div>
            @include('components.dropdown')
            <a href="" class="d-flex justify-content-center" onmouseenter="showDropdown()" onmouseleave="hideDropdown()">
                <img src="{{ asset('/assets/icon_information.svg') }}" alt="">
            </a>
        </div>

        <a id="button-login" href="" class="d-flex justify-content-center mt-5 mb-3" data-toggle="modal" data-target="#modal_login">
            <img src="{{ asset('/assets/icon_profile.svg') }}" alt="">
        </a>
    </div>
</div>

@if(request()->has('error') && request()->get('error') === 'user-not-found' || request()->get('error') === 'password-does-not-match')
    <script src="{{ asset('js/user.js') }}" defer></script>
    <script src="{{ asset('js/password.js') }}" defer></script>
@endif
