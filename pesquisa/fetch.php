<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=bananasql", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM receita 
 WHERE nomereceita REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM receita ORDER BY idreceita
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>