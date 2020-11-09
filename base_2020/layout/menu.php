<?php

?>
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand"><?=$data['processo']?></a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="resources/images/blurred-image.jpg">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
            <p>Candidato</p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item"  target="_blank" href="<?=$data['inscricao']?>">
              Inscrição
            </a>
            <a class="dropdown-item" target="_blank" href="<?=$data['portal']?>">
              Portal do Candidato
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#cronograma">
              Cronograma
            </a>
            <a class="dropdown-item" href="#publicacoes">
              Editais e Documentos
            </a>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#noticias">Notícias</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#faleconosco">Fale conosco</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Acesse o site da UENP" data-placement="bottom" href="https://www.uenp.edu.br" target="_blank">
            <i class="fa fa-globe"></i>
            <p class="d-lg-none d-xl-none">UENP</p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Siga-nos no Twitter" data-placement="bottom" href="https://twitter.com/UENPOficial" target="_blank">
            <i class="fa fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Siga-nos no Instagram" data-placement="bottom" href="https://instagram.com/UENPOficial" target="_blank">
            <i class="fa fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Curta-nos no Facebook" data-placement="bottom" href="https://www.facebook.com/UENPOficial" target="_blank">
            <i class="fa fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
