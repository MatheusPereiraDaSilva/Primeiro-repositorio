<?php

//fetch_data.php

include('../pesquisa/database_connection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM receita WHERE receita_status = '1'
 ";
 if(isset($_POST["minimum_tempo"], $_POST["maximum_tempo"]) && !empty($_POST["minimum_tempo"]) && !empty($_POST["maximum_tempo"]))
 {
  $query .= "
   AND tempo BETWEEN '".$_POST["minimum_tempo"]."' AND '".$_POST["maximum_tempo"]."'
  ";
 }
 if(isset($_POST["categoria"]))
 {
  $categoria_filter = implode("','", $_POST["categoria"]);
  $query .= "
   AND categoria IN('".$categoria_filter."')
  ";
 }
 if(isset($_POST["ingrediente"]))
 {
  $ingrediente_filter = implode("','", $_POST["ingrediente"]);
  $query .= "
   AND ingrediente IN('".$ingrediente_filter."')
  ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="'. $row['imagem'] .'" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">'. $row['nomereceita'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >'. $row['tempo'] .'</h4>
     <p>Ingredientes : '. $row['ingrediente'].'<br/>
     Tempo : '. $row['tempo'] .' <br/>
     Categoria : '. $row['categoria'] .'<br/>
     </div>

   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>
