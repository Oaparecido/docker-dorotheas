<div class="modal fade" id="modal_register-course" tabindex="-1" aria-labelledby="modal_register-courseLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <img src="{!! asset('assets/icon_freiras.svg') !!}" alt="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="register-course" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="register-course" action="{{ route('course.store') }}" method="POST">
                    @csrf
                    <label for="" class="d-flex flex-column">
                        Nome
                        <input required name="name" value="{{ old('name') }}" type="text" placeholder="Digite aqui">
                    </label>
                    <label for="" class="d-flex flex-column">
                        Dias do curso
                        <div class="dropdown-course d-flex align-items-center">
                            <a href="#" data-toggle="dropdown">Selecione aqui</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Segunda
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Terça
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Quarta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Quinta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Sexta
                                    </label>
                                </li>
                                <li>
                                    <label class="btn btn-secondary">
                                        <input type="checkbox" name="options" id="option3"> Sábado
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </label>

                    <div class="d-flex justify-content-between mt-5">
                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" type="radio" name="options" id="option3">
                                <img src="{!! asset("assets/icon_morning.svg") !!}" alt="">
                            </div>
                            <p>Manhã</p>
                        </label>

                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" type="radio" name="options" id="option3">
                                <img src="{!! asset("assets/icon_afternoon.svg") !!}" alt="">
                            </div>
                            <p>Tarde</p>
                        </label>

                        <label class="d-flex flex-column align-items-center">
                            <div class="d-flex align-items-center">
                                <input class="radio" type="radio" name="options" id="option3">
                                <img src="{!! asset("assets/icon_night.svg") !!}" alt="">
                            </div>
                            <p>Noite</p>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mt-4">
                        <button class="confirm" type="submit">
                            Confirmar
                        </button>
                    </div>
                </form>
                @include('components/messages')
            </div>
        </div>
    </div>
</div>
