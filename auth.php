<html>
<head>
	<title>Formulario</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #820AD1">					
<!--Conteudo de condição...-->
 <div>
	 <div style="width: 600px; height: 200px; background-color:#f0f0f0; color: #AB4BEA; ; margin: auto; border-radius:3px; font-family:Comic Sans MS;">

	
	<?php 
		$login = $_POST['usuario'];
		$senha = $_POST['password'];

		if ($login == 'admin'){
			if ($senha == 'formulario'){
				header("location: formulario.php");
			}else{
					header("location: index.php");
					exit();}
			}else{
				header("location: index.php");
				exit();}
	?>
	</div>
<!--fim do codigo por enquanto...-->
</div> 
</body>
</html>
