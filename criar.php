<?php  
	# code...



$nome=$_POST['nome'];
$sexo=$_POST['sexo'];
$nas=$_POST['nas'];
$int=$_POST['int'];
$email=$_POST['email'];



	//limit 2,1


	$conect = mysqli_connect('localhost','root','','banco');

	$a = 'CREATE TABLE `ALUNOS`( ';
	$a = $a . ' ID INTEGER PRIMARY KEY)';

	
	if(!$conect)
	{
		die("erro conexão:".mysqli_connect_error());
	}

	if(mysqli_query($conect, $a))
		echo "cadastro concluido com sucesso ";
	else
		echo 'erro ao cadastrar: '.'<br>Comando:'.$a.'<br><br><br>'.mysqli_error($conect);


$a = 'INSERT INTO `create` VALUES(';
$a = $a . "'".$nome."','".	$sexo."','".$nas."','".$int."','".$email."')";

	if(mysqli_query($conect, $a))
		echo "cadastro concluido com sucesso ";
	else
		echo 'erro ao cadastrar: '.'<br>Comando:'.$a.'<br><br><br>'.mysqli_error($conect);


 











?>