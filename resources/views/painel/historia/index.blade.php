@extends('layouts.index')
@section('content')
    <br>
    <div class="container text-center my-4">
        <div class="row">
            <h1>Sobre Nós</h1>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/adir.jpeg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 my-4">
                Demos inicio em 2016 , nossa equipe contava com 4 pessoas, começamos
                fazendo
                risoto para vender. Foi onde a primeira vez ja tivemos um sucesso enorme. Seu Adir o dono do
                Restaurante
                sempre esteve envolvido com carnes, temperos então mandava muito bem no preparo. A partir desse
                momento
                começamos abrir um domingo por mês , sempre no primeiro domingo do mês. Começamos assando 2 costelas
                e 1 porco fogo de chão, tivemos uma ótima venda somente para retirada. E ai fomos caminhando ,
                aumentando o restaurante, aumentando
                nossa equipe. Hoje estamos com 23 pessoas em nossa equipe. Ampliamos nossa estrutura e assim
                atendemos
                com retirada e almoço no local.
                Se você não conhece , venha tirar um tempo e se deliciar com a varidade do nosso cardápio.
            </div>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row">
            <h1>A melhor da Região</h1>
            <div class="col-6 my-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae consectetur quibusdam similique
                accusamus incidunt reiciendis, alias unde vitae iusto qui tempore, dicta sed modi amet vero ad, nihil nisi
                omnis!
            </div>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/costela.jpeg" class="figure-img img-fluid rounded float-md-end" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row row-cols-1">
            <h1>Costela Fogo de Chão</h1>
            <div class="col text-center">
                <div class="embed-responsive embed-responsive-16by9" style="max-width: 800px; margin: 0 auto;">
                    <video id="myVideo" class="embed-responsive-item" preload="auto">
                        <source src="video/costela.mp4" type="video/mp4">
                    </video>
                </div>
                <br>
                <button id="playButton" class="btn btn-primary">Reproduzir Video</button>
            </div>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row">
            <h1>Nossa Equipe</h1>
            <div class="col-6 my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ea ipsa, debitis vitae unde provident
                rerum error nisi consequuntur nihil, facilis eaque, nemo atque eligendi odit maxime! Enim, animi
                obcaecati!lorem

            </div>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/fora.jpeg" class="figure-img img-fluid rounded float-md-end" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row">
            <h1>Nosso Espaço</h1>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/salao.jpeg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                    <img src="img/fora.jpeg" class="overlay-image" alt="...">
                </figure>
            </div>

            <div class="col-6 my-4">
                Contamos com espaço com capacidade para 180 pessoas
            </div>
        </div>
    </div>
    <div class="container text-center my-4">
        <div class="row">
            <h1>Espaço para descansar</h1>
            <div class="col-6 my-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ea ipsa, debitis vitae unde provident
                rerum error nisi consequuntur nihil, facilis eaque, nemo atque eligendi odit maxime! Enim, animi
                obcaecati!lorem

            </div>
            <div class="col-md-6 my-4">
                <figure class="figure">
                    <img src="img/fora.jpeg" class="figure-img img-fluid rounded float-md-end" alt="...">
                    <figcaption class="figure-caption">
                        <!-- Conteúdo da legenda -->
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection

@push('postscript')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById("myVideo");
            var playButton = document.getElementById("playButton");

            playButton.addEventListener("click", function() {
                video.play();
                playButton.style.display = "none";
            });
        });
    </script>
@endpush
