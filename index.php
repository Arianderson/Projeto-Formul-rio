<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .back{
            background-color: #f08f19;
        }
    </style>
</head>

</head>
<body class="back">
<!--Div Geral-->
    <div style="width: 448px; height: 576px; background-color:#ffffff; border-radius:8px; margin: auto; margin-top:4%;">
<!--Div 1 da Div Geral-->
        <div style="background-color:#ffffff; width: 448px; height: 150px; font-family: Arial, Helvetica, sans-serif; text-align: center; border-radius:8px;">
           <p style="padding-top: 70px; font-size: 16pt;">Fa&ccedil;a seu login</p>
        </div>
        
<!--Abrindo Formulario tag="Foms"-->
        <form method="POST" action="auth.php">
<!--Abrindo Div 2 da Div Geral-->
            <div style="float: left; background-color: #ffffff; width: 60px; height: 160px;"></div>
            <div style="width: 388px; height:200px; background-color:#ffffff; text-align: left; float: right">
                <label for="usuario" style="font-size: 18px; color:#d17b0a;"></i>Usu&aacute;rio</label> 
                <br />
                <input style="width: 328px; height:35px; border-bottom-style: dotted;border-top: transparent; border-left: transparent;border-right: transparent; border-color:#d1ad0a;" type="text" name="usuario" id="usuario" value="" required />
                <br />
                <br />
                <br />
                <label for="password" style="font-size: 18px;color:#d17b0a;">Senha</label>                
              <br />
		        <input style="width: 328px; height:35px ;border-bottom-style: dotted;border-top: transparent; border-left: transparent;border-right: transparent; border-color:#d1ad0a;" type="password" name="password" id="password" value="" required maxlength="11" autocomplete="current-password" />
            </div>
<!--Usando Div de both-->
            
    <br />
<!--Div que contem o Botão-->
            <div style="width: 448px; height: 226px; background-color:#ffffff; text-align: center; float: left;border-radius:8px; font-family: Arial, Helvetica, sans-serif; font-size:15px;">
                <input type="submit" name="entrar" id="entrar" value="CONTINUAR" style="width: 328px; height:60px;background-color:#ffffff; color:#000000; border-color:#000000; border-radius: 4px;border-width:1px;">
            </div>
        </form>
<!--Fechando Div Geral-->
    </div>
</body>
</html>