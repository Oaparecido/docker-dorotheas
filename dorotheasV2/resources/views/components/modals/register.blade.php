<div class="modal fade" id="modal_register" tabindex="-1" aria-labelledby="modal_registerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <img src="{!! asset('assets/icon_freiras.svg') !!}" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="register" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="register" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <label for="" class="d-flex flex-column">
                        Nome
                        <input required name="name" value="{{ old('name') }}" type="text" placeholder="Digite aqui">
                    </label>

                    <label for="" class="d-flex flex-column">
                        Apelido
                        <input required name="username" value="{{ old('username') }}" type="text" placeholder="Digite aqui">
                    </label>

                    <label for="" class="d-flex flex-column">
                        Senha
                        <input required name="password" type="password" placeholder="Digite aqui">
                    </label>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button type="submit">
                            Confirmar
                        </button>
                    </div>
                </form>
                @include('components/messages')
            </div>
        </div>
    </div>
</div>
