<div class="modal fade" id="modal_login" tabindex="-1" aria-labelledby="modal_loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <img src="{!! asset('assets/icon_freiras.svg') !!}" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="login" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login">
                <form class="login" action="{{ route('login.store') }}" method="post">
                    @csrf
                    <label for="" class="d-flex flex-column">
                        Apelido
                        <input type="text" name="username" placeholder="Digite aqui">
                    </label>

                    <label for="" class="d-flex flex-column">
                        Senha
                        <input type="password" name="password" placeholder="Digite aqui">
                    </label>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button type="submit">
                            Entrar
                        </button>
                    </div>
                </form>
                @include('components/messages')
            </div>
        </div>
    </div>
</div>
