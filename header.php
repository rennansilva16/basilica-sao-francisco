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
  <div class="container container-header d-flex align-items-center justify-content-center">
    <!-- Lado esquerdo -->
    <div class="header-left text-start">
      <h2 style="margin: 0; font-size: 1.5rem; font-weight: bold;">Basílica Santuário<br>São Francisco de Assis</h2>
      <p style="margin: 0.2rem 0; font-weight: bold;">BRASÍLIA/DF</p>
    </div>

    <!-- Centro com imagem -->
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt="Brasão da Basílica Santuário São Francisco de Assis">
    </div>

    <!-- Lado direito -->
    <div class=" text-end header-right">
      <h2 style="margin: 0; font-size: 1.5rem; font-weight: bold;">IGREJA INDULGENCIARIA</h2>
      <p style="margin: 0.2rem 0; font-weight: bold;">JUBILEU 2025</p>
    </div>
  </div>

  <!-- Menu de navegação -->
  <nav class=" mt-4">
    
    <ul class=" list-unstyled d-flex justify-content-center flex-wrap text-black gap-3">
      <li><a class="nav-ul-header" href="#">A BASÍLICA</a></li>
      <span>|</span>
      <li><a class="nav-ul-header" href="#">HORÁRIOS</a></li>
      <span >|</span>
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
</header>
