<?php

//index.php
include('../pesquisa/database_connection.php');
include "../home/links.php";

?>

<html>
 <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Live Data Search using Multiple Tag in PHP with Ajax</title>  
  <link rel="stylesheet" type="text/css" href="../bootstrap-taginput/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap-taginput/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap-taginput/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../node_modules/jquery/jquery-ui.css"/> 
    <link rel="stylesheet" type="text/css" href="../node_modules/jquery/style.css"/>
  
  
  <style>
  .bootstrap-tagsinput {
   width: 100%;
  }
  </style>
 </head>

<body>

<nav class="navbar navbar-expand-lg bg-primary">

  <button class="navbar-toggler mb-2 navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Menu dropdown -->

       <div class="row">
       <div class="d-lg-none">
       <a href="#"><img src="../imagens/logo.png"></a>
       </div>
       
       <div class="d-lg-none">
       <a class="nav-link d-lg-none" href="#"><i class="fas fa-user d-lg-none text-white"></i></a>
      </div>

       <div class="d-lg-none">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-sign-in-alt d-lg-none text-white"></i></a>
       </div>
       </div>


  <!-- Menu categorias mobile -->

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">


      <ul class="navbar-nav ml-auto">

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-search fa-2x d-lg-none"></i><span>Buscar receitas</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-otter fa-2x d-lg-none"></i><span> Carnes</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-candy-cane fa-2x d-lg-none"></i> <span>Doces</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-drumstick-bite fa-2x d-lg-none"></i> <span>Frangos</span></a>
      </li>
       
      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-birthday-cake fa-2x d-lg-none"></i> <span>Bolos</span></a>
      </li>

      <li class="nav-item active">
         <a class="nav-link d-lg-none" href="#"><i class="fas fa-mortar-pestle fa-2x d-lg-none"></i> <span>Sopas</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link d-lg-none" href="#"><i class="fas fa-leaf fa-2x fa-2x d-lg-none"></i> <span>Saudáveis</span></a>
      </li>

        <li class="nav-item active">
          <a class="nav-link d-lg-none" href="#"><i class="fas fa-moon fa-2x d-lg-none"></i> <span>Jantar</span></a>
      </li>

        <li class="nav-item active">
          <a class="nav-link d-lg-none" href="#"><i class="fas fa-hamburger fa-2x d-lg-none"></i> <span>Lanches</span></a>
      </li>
  
        <li class="nav-item active">
          <a class="nav-link d-lg-none" href="#"><i class="fas fa-mug-hot fa-2x d-lg-none"></i> <span>Bebidas</span></a>
        </li>
        </ul>


       



        <div class="container">
        <div class="row ml-5">
        
        <div class="col-6 mx-5 pt-2 pb-2">
        <div class="d-none d-lg-block">
        <a href="#"><img src="../imagens/logo.png"></a>
        </div>
        </div>
        <div class="list-inline mr-1 pt-3 pl-2">

        <li>
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Pesquisar">
        <a class="nav-link" href="#"><i class="fas fa-search text-white"></i></a>
        </div>
        </li>

        <li>
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Categorias">
        <a class="nav-link" href="#"><i class="fas fa-scroll text-white"></i></a>
        </div> 
        </li>

        <li>
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Página de usuário">
        <a class="nav-link" href="#"><i class="fas fa-user text-white"></i></a>
        </div>
        </li>
         
        <li>
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Favoritos">
        <a class="nav-link" href="#"><i class="fas fa-heart text-white"></i></a>
        </div>
        </li>
         
        <li>
        <div class="d-none d-lg-block" data-toggle="tooltip" title="Entrar">
        <a class="nav-link" href="#"><i class="fas fa-sign-in-alt text-white"></i></a>
        </div>
        </li>
        </div>

        </div>
        </div>

</nav>
  </style>
  </head>
 <body>










    <!-- Page Content -->
    <div class="container">
        <div class="row">
         <br />
         <h2 align="center"></h2>
         <br />











<div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">Pesquisa por ingrediente</h2><br />
   <div class="form-group">
   	     <?php

                    $query = "SELECT (ingredientes) FROM receita WHERE receita_status = '1' ORDER BY idreceita DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
         ?>

    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
     </div>
    </div>
       <?php
                   }

        ?>            
 </div>

   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>Receitas encontradas: <span id="total_records"></span></b></p>
    </div>
 
  













    <div class="col-md-3">                    
    <div class="list-group">
     <h3>Tempo de preparo</h3>
     <h4> (horas)</h4>
     <input type="hidden" id="hidden_minimum_tempo" value="0" />
                    <input type="hidden" id="hidden_maximum_tempo" value="10" />
                    <p id="tempo_show">1 - 10</p>
                    <div id="tempo_range"></div>
                </div>    
                <div class="list-group">
     <h3>Categoria</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
     <?php

                    $query = "SELECT DISTINCT(categoria) FROM receita WHERE receita_status = '1' ORDER BY idreceita DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector categoria" value="<?php echo $row['categoria']; ?>"  > <?php echo $row['categoria']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

    <div class="list-group">
     <h3>Ingrediente</h3>
                        <div style="height: 380px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "SELECT DISTINCT(ingrediente) FROM receita WHERE receita_status = '1' ORDER BY ingrediente DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ingrediente" value="<?php echo $row['ingrediente']; ?>" > <?php echo $row['ingrediente']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
                </div>
    
            </div>

            <div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
 </div>
  </div>
  <div style="clear:both"></div>
  <br />
  
  <br />
  <br />
  <br />

<style>
#loading
{
 text-align:center; 
 background: url('loader.gif') no-repeat center; 
 height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_tempo = $('#hidden_minimum_tempo').val();
        var maximum_tempo = $('#hidden_maximum_tempo').val();
        var categoria = get_filter('categoria');
        var ingrediente = get_filter('ingrediente');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_tempo:minimum_tempo, maximum_tempo:maximum_tempo, categoria:categoria, ingrediente:ingrediente},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#tempo_range').slider({
        range:true,
        min:1,
        max:10,
        values:[1, 10],
        step:1,
        stop:function(event, ui)
        {
            $('#tempo_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_tempo').val(ui.values[0]);
            $('#hidden_maximum_tempo').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

























 </body>
</html>


<script>
$(document).ready(function(){
 
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].nomereceita+'</td>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data Found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
</script>










<?php

include "../home/footer.php";

?>

  <script src="../bootstrap-taginput/bootstrap-tagsinput.min.js"></script>
  <script src="../bootstrap-taginput/bootstrap.min.js"></script>
  <script src="../node_modules/jquery/jquery-ui.js"></script>
  <script src="../bootstrap-taginput/typeahead.bundle.js"></script>
  <script src="../js/jquery-1.10.2.min.js"></script>

  </body>
  </html>