<?php
	$host="localhost";
	$user="sonic";
	$pass="";
	$banco="clientes_gdmglass";
	$conexao=mysqli_connect ($host, $user, $pass) or die (mysqli_error());
	mysqli_select_db ($conexao,$banco) or die (mysqli_error());
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>cadastro formulario</title>
</head>
<body>
<?php
	$tNome = $_POST['tNome'];
	$tSenha = $_POST['tSenha'];
	$tMail = $_POST['tMail'];
	$tSexo = $_POST['tSexo'];
	$tNasc = $_POST['tNasc'];
	$tRua = $_POST['tRua'];
	$tNum = $_POST['tNum'];
	$tEst = $_POST['tEst'];
	$tCid = $_POST['tCid'];
	$tUrg = $_POST['tUrg'];
	$tMsg = $_POST['tMsg'];
	$tPed = $_POST['tPed'];
	$tCor = $_POST['tCor'];
	$tQtd = $_POST['tQtd'];
	$tTot = $_POST['tTot'];
	$sql = "INSERT INTO dados_clientes (tNome,tSenha,tMail,tSexo,tNasc,tRua,tNum,tEst,tCid,tUrg,tMsg,tPed,tCor,tQtd,tTot) VALUES ('$tNome','$tSenha','$tMail','$tSexo','$tNasc','$tRua','$tNum','$tEst','$tCid','$tUrg','$tMsg','$tPed','$tCor','$tQtd','$tTot')";
	mysqli_query($conexao, $sql) or print(mysqli_error());

echo "<script>window.location='fale-com-os-muleke.html';alert('Parabéns $tNome, seu cadastro foi efetuado com sucesso! Em breve entraremos em contato através do email $tMail. Obrigado!');</script>";

?>



</body>
</html>