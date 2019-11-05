<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/estilo.css">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
     <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    
  </head>
  <body>

<!-- Logotipo brand -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
<div class="container">

<div>
    <a class="navbar-brand" href="#"><img src="logo.png"></a>
</div>


<!-- Ferramenta de pesquisa no navbrand -->
<div>
<div class="input-group d-none d-md-flex">
  <input type="text" class="form-control" placeholder="Busca rápida" aria-label="Text input with segmented dropdown button">
  <div class="input-group-append">
    <button type="button" class="btn btn-outline-primary"><i class="fas fa-search"></i> Buscar</button>
    <button type="button" class="btn btn-outline-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-filter"></i>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
      <h6 class="p-2"> Filtrar por: </h6>
      <a class="dropdown-item mr-0 p-2" href="#">Por nome de receitas</a>
      <a class="dropdown-item mr-0 p-2" href="#">Por nome de ingredientes</a>
    </div>
  </div>
</div>
</a>
</div>



<!-- Foto de perfil do usuário no navbrand -->


<div class="perfil">      
    <a href="#">
        <div class="inset" style="data-text="Mudar"">
             <img src="logoteste.jpg">
        </div>
    </a>             
</div>


<!-- Ícone para logar ou cadastrar -->

<!--
<div class="entrar">
    <a href="#">
       <div class="icone">
        <i class="fas fa-sign-in-alt fa-2x mx-auto"></i>
       </div>
       <div class="texto">
        <span class="span1">Entrar</span>
      </div>
    </a>
</div>
-->



</div>
</nav>



<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler mb-2 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Menu dropdown -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-search fa-2x d-lg-none"></i><span>Buscar receitas</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-otter fa-2x d-lg-none"></i><span>Carnes</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Carnes</a>
        <div class="dropdown-menu row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>      
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>



     
        <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-candy-cane fa-2x d-lg-none"></i> <span>Doces</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Doces</a>
      <div class="dropdown-menu row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div>    
     </div>
      </li>




        <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-drumstick-bite fa-2x d-lg-none"></i> <span>Frangos</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Frangos</a>
      <div class="dropdown-menu row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>



      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-birthday-cake fa-2x d-lg-none"></i> <span>Bolos</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Bolos</a>
       <div class="dropdown-menu row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a> 
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>
      



      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-mortar-pestle fa-2x d-lg-none"></i> <span>Sopas</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Sopas</a>
      <div class="dropdown-menu row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>





      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-angle-double-right fa-2x d-lg-none"></i> <span>Todas as categorias</span></a>
        <a class="nav-link1 d-none d-lg-block pt-2 mx-2" href="#">Todas as categorias</a>
      </li>

  <li class="nav-item active">
  <a class="nav-link d-lg-none" href="#"><i class="fas fa-leaf fa-2x fa-2x d-lg-none"></i> <span>Saudáveis</span></a>
      <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Saudáveis</a>
       <div class="dropdown-menu dropdown-menu-right row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
    </li>





      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-sun fa-2x d-lg-none"></i> <span>Almoço</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Almoço</a>
       <div class="dropdown-menu dropdown-menu-right row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>





      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-moon fa-2x d-lg-none"></i> <span>Jantar</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Jantar</a>
       <div class="dropdown-menu dropdown-menu-right row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>




      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-hamburger fa-2x d-lg-none"></i> <span>Lanches</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Lanches</a>
       <div class="dropdown-menu dropdown-menu-right row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>




     <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> <span>Bebidas</span></a>
        <div class="dropdown show d-none d-lg-block">
        <a class="btn btn-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> Bebidas</a>
       <div class="dropdown-menu dropdown-menu-right row" aria-labelledby="dropdownMenuLink">
        <div class="col-sm-4 d-sm-table-cell float-left">
          <h5>Receitas do dia</h5>
        <a class="dropdown-item p-0 m-0" href="#">Peixe assado de frango</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
       
      </div>
      <div class="col-sm-4 d-sm-table-cell float-left">
        <h5>Receitas da semana</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
      <div class="col-sm-4 d-sm-table-cell float-right">
        <h5>Receitas do mês</h5>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
        <a class="dropdown-item p-0 m-0" href="#">Teste</a>
      </div>
     </div> 
     </div>
      </li>
    </ul>
</div>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
  </div>

</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>