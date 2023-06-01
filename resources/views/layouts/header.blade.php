<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('painel') }}">
            <img src="/img/logo.png" alt="..." height="100" class="image-effect">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('painel') }}"
                        class="image-effect">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('historia') }}"
                        class="image-effect">História</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cardapio') }}" class="image-effect">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('eventos') }}" class="image-effect">Eventos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" class="image-effect">
                        Informações
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#footer">Contato</a></li>
                        <li><a class="dropdown-item" href="#localizacao">Localização</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <a href="https://api.whatsapp.com/send?phone=41998630453" class="me-4 link-secondary">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/cantinhodacostela2022/" class="me-4 link-secondary">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</nav>
