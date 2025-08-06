<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Baspilica Santuário São Francisco de Assis</title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- header.php -->
  <header>
    <div class="container text-center ">
      <div class="row d-flex align-items-center justify-content-center">
        <!-- Lado esquerdo -->
        <div class="col">
          <h2 style="font-size: 1.5rem; font-weight: bold;">Basílica Santuário<br>São Francisco de Assis</h2>
          <p style="margin: 0.2rem 0; font-weight: bold;">BRASÍLIA/DF</p>
        </div>

        <!-- Centro com imagem -->
        <div class="col">
          <img style="max-width: 12rem;" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt="Brasão da Basílica Santuário São Francisco de Assis">
        </div>

        <!-- Lado direito -->
        <div class="col">
          <h2 style="font-size: 1.5rem; font-weight: bold;">IGREJA INDULGENCIARIA</h2>
          <p style="margin: 0.2rem 0; font-weight: bold;">JUBILEU 2025</p>
        </div>
      </div>
      <div class="row">
        <nav class=" col mt-4">
          <!-- Menu de navegação -->
          <ul class=" list-unstyled d-flex justify-content-center flex-wrap text-black gap-3">
            <li><a class="nav-ul-header" href="#">A BASÍLICA</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">HORÁRIOS</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">PASTORAIS E MOVIMENTOS</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">FRADES</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">SACRAMENTOS</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">NOTÍCIAS</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">MÍDIA</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">PEDIDOS DE ORAÇÃO</a></li>
            <span>|</span>
            <li><a class="nav-ul-header" href="#">CONTATO</a></li>
          </ul>
        </nav>
      </div>


    </div>
  </header>