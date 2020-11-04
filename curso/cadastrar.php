<?php

include "conexao.php";
	if(isset($_POST['insert']))
	{
			$titulo =$_POST['title'];
			$duracao=$_POST['duration'];
			$preco=$_POST['price'];		
		    $q=mysqli_query($con,"INSERT INTO curso (titulo,duracao,preco)VALUES('$titulo','$duracao','$preco')");
 if($q)
  echo 'success';
else
  echo 'error';
   }
?>
