@extends('layouts.index')
@section('content')
    <div class="carousel-container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/fora.jpeg" alt="Chicago">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/salao.jpeg" alt="Los Angeles">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/costela.jpeg" alt="Los Angeles">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="container text-center">
        <h1 class="underline-animation">Venha conhecer nosso Espaço</h1>
        <p>Estamos na area rural de Colombo, pertencemos ao circuito Italiano de Colombo.<br> Aguardamos sua visita</p>
        <div class="row">
            <div class="col-4">
                <img src="img/fora.jpeg" alt="Los Angeles" class="image-effect">
                <h5 >Contamos com uma área para descanso</h5>
            </div>
            <div class="col-4">
                <img src="img/salao.jpeg" alt="Los Angeles" class="image-effect">
                <h5>Nosso espaço acomoda aproximadamente 180 pessoas</h5>
            </div>
            <div class="col-4">
                <img src="img/costela.jpeg" alt="Los Angeles" class="image-effect">
                <h5>Nossa tradição é a Costela e o Porco feito em fogo de chão.</h5>
            </div>

        </div>
    </div>
    <br>
    <div class="container text-center">
        <h1 class="underline-animation">Atendimento no PRIMEIRO E TERCEIRO <br> Domingo do Mês</h1>

        <div class="row">
            <div class="col-6">
                <img src="img/costela.jpeg" alt="Los Angeles" class="image-effect">
            </div>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row">
            <h1 class="underline-animation">Ultima sexta feira do MÊS</h1>
            <div class="col-6 my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ea ipsa, debitis vitae unde provident
                rerum error nisi consequuntur nihil, facilis eaque, nemo atque eligendi odit maxime! Enim, animi
                obcaecati!lorem
            </div>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/sextafeira.png" class="figure-img img-fluid rounded float-md-end" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <br>

    <section id="localizacao">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2099.6389191056983!2d-49.18215490638241!3d-25.254437319185172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcc3cf9136d4e3%3A0x9f2cf2bd793ea1d2!2sCantinho%20da%20costela!5e0!3m2!1spt-BR!2sbr!4v1685645307840!5m2!1spt-BR!2sbr"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('postscript')
    <script>
        const images = document.querySelectorAll('.image-effect');

        images.forEach(image => {
            image.addEventListener('mouseenter', () => {
                image.classList.add('image-effect-hover');
            });

            image.addEventListener('mouseleave', () => {
                image.classList.remove('image-effect-hover');
            });
        });
    </script>
@endpush
