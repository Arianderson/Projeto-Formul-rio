<?php
//Dados do aluno:

$aluno_serie = $_POST['aluno_serie'];
if($aluno_serie == 1){
    $aluno_serie = '1ª Série EM';
}elseif($aluno_serie == 2){
    $aluno_serie = '2ª Série EM';
}elseif($aluno_serie == 3){
    $aluno_serie = '3ª Série EM';
}else{
    $aluno_serie = 'Não definido';
}

$aluno_turno = $_POST['aluno_turno'];
if($aluno_turno == 1){
    $aluno_turno = 'Matutino';
}elseif($aluno_turno == 2){
    $aluno_turno = 'Vespertino';
}else{
    $aluno_turno = 'Não definido';
}
 

$aluno_nome = $_POST['aluno_nome'];
$aluno_rg = $_POST['aluno_rg'];
$aluno_cpf = $_POST['aluno_cpf'];
$aluno_naturalidade = $_POST['aluno_naturalidade'];
$aluno_nascimento = $_POST['aluno_nascimento'];
$aluno_telefone = $_POST['aluno_telefone'];


$aluno_zap = $_POST['aluno_zap'];
if($aluno_zap == 1){
    $aluno_zap = 'Sim';
}else{
    $aluno_zap = 'Não é zap';
}


$aluno_bairro = $_POST['aluno_bairro'];
$aluno_cidade = $_POST['aluno_cidade'];
$contrato_responsavel = $_POST['contrato_responsavel'];

$responsavel_residencia = $_POST['responsavel'];
switch($responsavel_residencia){
    case 1:
        $responsavel_residencia = $_POST['pai_nome'];
    break;
    case 2:
        $responsavel_residencia = $_POST['mae_nome'];
    break;
    case 3:
        $responsavel_residencia = $_POST['pai_nome'];
    break;
    case 4:
        $responsavel_residencia = $_POST['responsavel'];
    break;
}
//Dados da Mae:
$mae_nome = $_POST['mae_nome'];
$mae_rg = $_POST['mae_rg'];
$mae_cpf = $_POST['mae_cpf'];
$mae_naturalidade = $_POST['mae_naturalidade'];
$mae_nascimento = $_POST['mae_nascimento'];
$mae_telefone1 = $_POST['mae_telefone1'];
$mae_telefone2 = $_POST['mae_telefone2'];

$mae_zap1 = $_POST['mae_zap1'];
if($mae_zap1 == 1){
    $mae_zap1 = 'Sim';
}else{
    $mae_zap1 = 'Nao tem zap nesse numero';
}

$mae_zap2 = $_POST['mae_zap2'];
if($mae_zap2 == 1){
    $mae_zap2 = 'Sim';
}else{
    $mae_zap2 = 'Nao tem zap nesse numero';
}
$mae_email = $_POST['mae_email'];
$mae_trabalho = $_POST['mae_trabalho'];
$mae_endereco = $_POST['mae_endereco'];

//Dados do Pai:
$pai_nome =$_POST['pai_nome'];
$pai_rg = $_POST['pai_rg'];
$pai_cpf = $_POST['pai_cpf'];
$pai_naturalidade = $_POST['pai_naturalidade'];
$pai_nascimento = $_POST['pai_nascimento'];
$pai_telefone1 = $_POST['pai_telefone1'];
$pai_telefone2 = $_POST['pai_telefone2'];

$pai_zap1 = $_POST['pai_zap1'];
if($pai_zap1 == 1){
    $pai_zap1 = 'Sim';
}else{
    $pai_zap1 = 'Nao tem zap nesse numero';
}

$pai_zap2 = $_POST['pai_zap2'];
if($pai_zap2 == 1){
    $pai_zap2 = 'Sim';
}else{
    $pai_zap2 = 'Nao tem zap nesse numero';
}
$pai_email = $_POST['pai_email'];
$pai_trabalho = $_POST['pai_trabalho'];
$pai_endereco = $_POST['pai_endereco'];

switch ($contrato_responsavel){
    case 1:
        $contrato_responsavel_nome = $_POST['pai_nome'];
        $contrato_responsavel_cpf = $_POST['pai_cpf'];
        $contrato_responsavel_rg = $_POST['pai_rg'];
        $contrato_responsavel_nascimento = $_POST['pai_nascimento'];
        $contrato_responsavel_endereco = $_POST['pai_endereco'];
        $contrato_responsavel_telefone1 = $_POST['pai_telefone1'];
        $contrato_responsavel_telefone2 = $_POST['pai_telefone2'];
    break;
    case 2:
        $contrato_responsavel_nome = $_POST['mae_nome'];
        $contrato_responsavel_cpf = $_POST['mae_cpf'];
        $contrato_responsavel_rg = $_POST['mae_rg'];
        $contrato_responsavel_nascimento = $_POST['mae_nascimento'];
        $contrato_responsavel_endereco = $_POST['mae_endereco'];
        $contrato_responsavel_telefone1 = $_POST['mae_telefone1'];
        $contrato_responsavel_telefone2 = $_POST['mae_telefone2'];   
    break;
    case 3:
        $contrato_responsavel_nome = $_POST['pai_nome'];
        $contrato_responsavel_cpf = $_POST['pai_cpf'];
        $contrato_responsavel_rg = $_POST['pai_rg'];
        $contrato_responsavel_nascimento =  $_POST['pai_nascimento'];
        $contrato_responsavel_endereco = $_POST['pai_endereco'];
        $contrato_responsavel_telefone1 = $_POST['pai_telefone1'];
        $contrato_responsavel_telefone2 = $_POST['pai_telefone2'];
    break;
    case 4:
        $contrato_responsavel_nome = $_POST['outro_nome'];
        $contrato_responsavel_cpf = $_POST['outro_cpf'];
        $contrato_responsavel_rg = $_POST['outro_rg'];
        $contrato_responsavel_nascimento = $_POST['outro_nascimento'];
        $contrato_responsavel_endereco = $_POST['outro_endereco'];
        $contrato_responsavel_telefone1 = $_POST['outro_telefone1'];
        $contrato_responsavel_telefone2 = $_POST['outro_telefone2'];         
    break;}
//Dados de Documentações Recebidas:
$mae_rgcpf = $_POST['mae_rgcpf'];
if($mae_rgcpf == 1){
    $mae_rgcpf = "Documetação recebida";
}else{
    $mae_rgcpf= "Documetação nao recebida";
}

$pai_rgcpf = $_POST['pai_rgcpf'];
if($pai_rgcpf == 2){
    $pai_rgcpf = "Documetação recebida";
}else{
    $pai_rgcpf = "Documetação nao recebida";
}

$responsavelfinanceiro_rgcpf = $_POST['responsavelfinaceiro_rgcpf'];
if($responsavelfinanceiro_rgcpf == 3){
    $responsavelfinanceiro_rgcpf = "Documetação recebida";
}else{
    $responsavelfinanceiro_rgcpf = "Documetação nao recebida";
}

$responsavelfinanceiro_endereco = $_POST['responsavelfinanceiro_edereco'];
if($responsavelfinanceiro_endereco == 4){
    $responsavelfinanceiro_endereco = "Documetação recebida";  
}else{
    $responsavelfinanceiro_endereco = "Documetação nao recebida";
}

$contrato_assinado = $_POST['contrato_assinado'];
if($contrato_assinado == 5){
    $contrato_assinado = "Documetação recebida";  
}else{
    $contrato_assinado = "Documetação nao recebida";
}

//Dados de Documentações Recebida do aluno:

$aluno_certidaonasc = $_POST['aluno_certidaonasc'];
if ($aluno_certidaonasc == 1){
    $aluno_certidaonasc = "Documetação recebida";   
}else{
    $aluno_certidaonasc = "Documetação nao recebida";
}

$aluno_rg_doc = $_POST['aluno_rg_doc'];
if($aluno_rg_doc == 2){
    $aluno_rg_doc = "Documetação recebida";   
}else{
    $aluno_rg_doc  = "Documetação nao recebida";
}

$aluno_cpf_doc = $_POST['aluno_cpf_doc'];
if($aluno_cpf_doc == 3){
    $aluno_cpf_doc = "Documetação recebida";
}else{
    $aluno_cpf_doc = "Documetação nao recebida";
}

$aluno_fotos = $_POST['fotos'];
if($aluno_fotos == 4){
    $aluno_fotos = "Documetação recebida";
}else{
    $aluno_fotos = "Documetação nao recebida";
}

$atestescolaridade = $_POST['atestescolaridade'];
if($atestescolaridade == 5){
    $atestescolaridade = "Documetação recebida";
}else{
    $atestescolaridade  = "Documetação nao recebida";
}

$histtransfer = $_POST['histtransfer'];
if($histtransfer == 6){
    $histtransfer = "Documetação recebida";
}else{
    $histtransfer = "Documetação nao recebida";
}
//Dia da mensalidade:
$mensalidade = $_POST['dia_mensalidade'];

//Observações:
$observacao = $_POST['obs'];
?>

<html>
    <head>
        
        <style>
            .center{
                text-align: center;
            }
            .fonte{
                font-family:'Arial, Helvetica, sans-serif';
                background-color: #fffff;
            }
        </style>
        
    </head>
    <body class="fonte">

    <div style="width: 1000px; height: 1920px; background-color: #ffffff; border-radius: 10px; margin: auto;">
            <!--Div cabeçalho engloba a logo e o nome ficha de matricula-->
            <div style="width: 1000px; height: 150px; background-color: transparent;">
            <!--Div logo-->
                <div style="width: 200px; height: 125px; background-color: transparent; padding-top: 25px; float: left;"> 
                    <div style="width: 190px; height: 95px; background-color: transparent; overflow: hidden; margin: auto;">
                    <img src="img/logo.PNG" alt="logo">
                    </div>
                </div>
                <!--Div do nome "Ficha de matricula"-->
                <div style="width: 800px; height: 80px; background-color: transparent; float: left; padding-top: 70px;">
                    <div style="width: 650px; height: 50px;background-color: transparent;">
                        <!--Div de espaçamento-->
                    <div style="width: 250px; height: 20px; background-color: transparent; margin: auto; text-align:center;"></div>
                    <div style="width: 250px; height: 30px; background-color: transparent; margin: auto; text-align:center;">
                    <span style="font-size:25px; font-family:'Times New Roman', Times, serif;">Ficha de Matricula 2022</span>
                    </div>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <!--Div Dados-->
        <div style="width: 1000px; height: 1920px; background-color: #ffffff;">
            <div style="width: 980px; height: 1920px; background-color: transparent; margin: auto;">
            <!--Iniciando Formulario:-->
            <form method="POST" action="contrato.php">
            <!--Dados do aluno-->
                <div style="width: 980px; background-color: transparent;"><span style="font-size:25px;">Dados do Aluno:</span></div>
                <!--Div de divisão!-->
                <div style="width: 980px; height: 2px; background-color: #ff8800;"></div>
                <!--Fim da Div de divisão!-->
                <br />
                <div style="width: 980px; height: 300px; background-color: transparent;">
                    <!--Dados do lado direito-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Série/Turma:</b></label>
                        <?php echo $aluno_serie;?>
                        <br /> <br />
                        <label ><b>Turno:</b></label>
                        <?php echo $aluno_turno;?>
                        <br /> <br />
                        <label for=""><b>Nome:</b></label>
                        <br />
                        <?php echo $aluno_nome;?>
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <?php echo $aluno_rg;?>
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <?php echo $aluno_cpf;?>
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <?php echo $aluno_naturalidade;?>
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <?php echo $aluno_nascimento;?>
                        <!--Div de espaçamento!-->
                        <div style="width: 490px; height: 32px; background-color: transparent"></div>
                        <!--Fim da div de espaçamento-->
                        <label for=""><b>Telefone:</b></label>
                        <br />
                        <?php echo $aluno_telefone;?>
                        <label for=""><b>Zap?:</b></label>
                        <?php echo $aluno_zap;?>
                        <br /><br />
                        <label for=""><b>Bairro:</b></label>
                        <br />
                        <?php echo $aluno_bairro;?>
                        <br /><br />
                        <label for=""><b>Ciddade:</b></label>
                        <br />
                        <?php echo $aluno_cidade;?>
                        <br /><br />
                        <label><b>O(A) aluno(a) reside com?</b></label>
                        <br />
                        <?php echo $responsavel_residencia;?>
                    </div>
                <div style="clear: both;"></div>
                </div>

                <!--Dados da Mãe-->
                <!--Div de espaçamento!-->
                <div style="width: 980px; height: 20px; background-color: #ffffff;"></div>
                <div style="width: 980px; height: 30px; background-color: transparent;"><span style="font-size:25px;">Dados da Mãe:</span></div>
                <!--Div de divisão!-->
                <div style="width: 980px; height: 2px; background-color: #ff8800;"></div>
                <!--Fim da Div de divisão!-->
                <br />
                <div style="width: 980px; height: 300px; background-color: transparent;">
                    <!--Dados do lado direito-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Nome:</b></label>
                        <br />
                        <?php echo $mae_nome;?>
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <?php echo $mae_rg;?>
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <?php echo $mae_cpf;?>
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <?php echo $mae_naturalidade;?>
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <?php echo $mae_nascimento;?>
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <?php echo $mae_telefone1;?>
                        <label for=""><b>Zap?:</b></label>
                        <?php echo $mae_zap1;?>
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <?php echo $mae_telefone2;?>
                        <label for=""><b>Zap?:</b></label>
                        <?php echo $mae_zap2;?>
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <?php echo $mae_email;?>
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></b></label>
                        <br />
                        <?php echo $mae_trabalho;?>
                        <br /><br />
                        <label for=""><b>End.Resid:</b></b></label>
                        <br />
                        <?php echo $mae_endereco;?>
                    </div>
                <div style="clear: both;"></div>
                </div>

                <!--Dados do Pai-->
                <!--Div de espaçamento!-->
                <div style="width: 980px; height: 20px; background-color: #ffffff;"></div>
                <div style="width: 980px; height: 30px; background-color: transparent;"><span style="font-size:25px;">Dados da Pai:</span></div>
                <!--Div de divisão!-->
                <div style="width: 980px; height: 2px; background-color: #ff8800;"></div>
                <!--Fim da Div de divisão!-->
                <br />
                <div style="width: 980px; height: 300px; background-color:transparent;">
                    <!--Dados do lado direito-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                    <label for=""><b>Nome:</b></label>
                        <br />
                        <?php echo $pai_nome;?>
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <?php echo $pai_rg;?>
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <?php echo $pai_cpf;?>
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <?php echo $pai_naturalidade;?>
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <?php echo $pai_nascimento;?>
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <?php echo $pai_telefone1;?>
                        <label for=""><b>Zap?:</b></label>
                        <?php echo $pai_zap1;?>
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <?php echo $pai_telefone2;?>
                        <label for=""><b>Zap?:</b></label>
                        <?php echo $pai_zap2;?>
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <?php echo $pai_email;?>
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></b></label>
                        <br />
                        <?php echo $pai_trabalho;?>
                        <br /><br />
                        <label for=""><b>End.Resid:</b></b></label>
                        <br />
                        <?php echo $pai_endereco;?>
                    </div>
                <div style="clear: both;"></div>
                </div>
                <!--Dados do Outro responsavel-->
                <!--Div de espaçamento!-->
                <div style="width: 980px; height: 20px; background-color: #ffffff;"></div>
                <div style="width: 980px; height: 30px; background-color: transparent;"><span style="font-size:25px;">Dados do Outro Responsável:</span></div>
                <!--Div de divisão!-->
                <div style="width: 980px; height: 2px; background-color: #ff8800;"></div>
                <!--Fim da Div de divisão!-->
                <br />
                <div style="width: 980px; height: 350px; background-color:transparent;">
                    <!--Dados do lado direito-->
                    <div style="width: 490px; height: 350px; background-color: transparent; float: left;">
                        <label for=""><b>Nome:</label>
                        <br />
                        <input type="text" name="outro_nome" id="outro_nome" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;">
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <input type="text" name="outro_rg" id="outro_rg" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;">
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <input type="text" name="outro_cpf" id="outro_cpf" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;">
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <input type="text" name="outro_naturalidade" id="outro_naturalidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;">
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <input type="date" name="outro_nascimento" id="outro_nascimento" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;">
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 350px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <input type="text" name="outro_telefone1" id="outro_telefone1" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" />
                        <label for="">Zap?:</label>
                        <input type="radio" name="outro_zap1" id="sim" value="1" />Sim
                        <input type="radio" name="outro_zap1" id="nao" value="2" />Nao
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <input type="text" name="outro_telefone2" id="outro_telefone2" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" />
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="outro_zap2" id="sim" value="1" />Sim
                        <input type="radio" name="outro_zap2" id="nao" value="2" />Nao
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <input type="email" name="outro_email" id="outro_email" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></b></label>
                        <br />
                        <input type="text" name="outro_trabalho" id="outro_trabalho" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>End.Resid:</b></b></label>
                        <br />
                        <input type="text" name="outro_endereco" id="outro_endereco" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label><b>Responsavel Pedagogico:</b></label>
                        <br />
                        <?php echo $contrato_responsavel_nome;?>
                    </div>
                <div style="clear: both;"></div>
                </div>
                <!--Dados Exclusivos da Escola-->
                <!--Div de espaçamento!-->
                <div style="width: 980px; height: 20px; background-color: #ffffff;"></div>
                <div style="width: 980px; height: 30px; background-color: transparent;"><span style="font-size:25px;">Dados Exclusivos da Escola:</span></div>
                <!--Div de divisão!-->
                <div style="width: 980px; height: 2px; background-color: #ff8800;"></div>
                <!--Fim da Div de divisão!-->
                <br />
                <div style="width: 980px; height: 160px; background-color: transparent;">
                    <!--Dados do lado direito-->
                    <div style="width: 490px; height: 160px; background-color: transparent; float: left;"> 
                        <label for=""><b>DOCUMENTAÇÃO RECEBIDA:</b></label>
                        <br />
                        <label for=""><b>Escolha o dia do pagamento da mensalidade:</b></label>
                        <?php echo 'Dia ' .$mensalidade;?>
                        <br />
                        <label for=""><b>RG/CPF/MÃE:</b></label>
                        <?php echo $mae_rgcpf;?>
                        <br />
                        <label for=""><b>RG/CPF/PAI:</b></label>   
                        <?php echo $pai_rgcpf;?>
                        <br />
                        <label for=""><b>RG/CPF/RESPONSÁVEL FINANCEIRO:</b></label>                        
                        <?php echo $responsavelfinanceiro_rgcpf;?>
                        <br />
                        <label for=""><b>COMPRO.END/RESPONS. FINANCEIRO:</b></label>                         
                        <?php echo $responsavelfinanceiro_endereco;?>
                        <br /> 
                        <label for=""><b>CONTRATO ASSINADO:</b></label>                      
                        <?php echo $contrato_assinado;?>                   
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 160px; background-color: transparent; float: left;">
                        <label for=""><b>DOCUMENTAÇÃO RECEBIDA DO ALUNO:</b></label>
                        <br />
                        <label for=""><b>Certidão de Nascimento:</b></label>
                        <?php echo $aluno_certidaonasc;?>
                        <br />
                        <label for=""><b>RG:</b></label>
                        <?php echo $aluno_rg_doc;?>
                        <br /> 
                        <label for=""><b>CPF:</b></label>
                        <?php echo $aluno_cpf_doc;?>
                        <br />
                        <label for=""><b>03 FOTOS 3X4:</b></label>    
                        <?php echo $aluno_fotos;?>          
                        <br />
                        <label for=""><b>Atestado de Escolaridade:</b></label>     
                        <?php echo $atestescolaridade;?>                  
                        <br />
                        <label for=""><b>Histórico/Transferencia:</b></label> 
                        <?php echo $histtransfer;?>                      
                    </div>
                <div style="clear: both;"></div>        
                </div>
                    <!--Div de espaçamento!-->
                <div style="width: 980px; height: 10px; background-color: #ffffff;"></div>
                <div style="width: 980;height: 200px;background-color: transparent; text-align: center;">
                    <label for=""><b>OBSERVAÇÕES:</b></label>
                        <br />
                        <?php echo $observacao;?>
                        <br /> <br />
                </div>
                </div>
                <!--Fim do Formulario-->
                </form>
            </div>
        <!--div 2 div do form-->
        </div>
<!--Div geral FINAL-->
    </div>

<!--Div de espaçamento!-->
<div style="width: 980px; height: 980px; background-color: #ffffff;"></div>    
        
<p class="center"><b>CONTRATO DE PRESTAÇÃO DE SERVIÇOS EDUCACIONAIS</b></p>

<p class="center"><b>IDENTIFICAÇÃO DAS PARTES CONTRATANTES</b></p>
<br /><br />
<b>CONTRATADA: COLÉGIO MULTIMÉDIO LTDA ME</b>, instituição de ensino privado, que ministra aula da 1º à 3º série do Ensino Médio, inscrita no CNPJ sob o nº 26.888.888/1111-79, situada na Av. Rochedo freits, Praça 12 de Setembro, nº 94, Centro, CEP. 45.755-055, Simões henrique/CA. Por seus representantes legais abaixo assinados, que daqui por diante, doravante denominados de <b>CONTRATADA</b>.
<span style="color: #147eb0; font-family:'Arial';"><b>CONTRATANTE: <?php echo $contrato_responsavel_nome; ?>,
CPF: <b><?php echo $contrato_responsavel_cpf?>, RG: <?php echo $contrato_responsavel_rg?>, Nasc: <?php echo $contrato_responsavel_nascimento?>,
Ender.Residencial: <?php echo $contrato_responsavel_endereco?>,
Tel-(1): <?php echo $contrato_responsavel_telefone1?>, <br /> Tel-(2): <?php echo $contrato_responsavel_telefone2?>,</b></b></span>
Doravante denominado simplesmente de <b>CONTRATANTE</b>, é o responsável legal pelo educando <span style="color: #147eb0;"><b><?php echo $aluno_nome; ?></b></span>, matriculado (a) na <?php echo $aluno_serie; ?>ª série do Ensino Médio, turno <?php echo $aluno_turno; ?>, que por mútuo acordo de vontades, resolvem celebrar o presente contrato de prestação de serviços educacionais, que se regerá pelas cláusulas seguintes e pelas condições descritas no presente.    

<p class="center"><b>DO FUNDAMENTO LEGAL</b></p>

<b>Cláusula 1ª</b>. O presente contrato é celebrado com fundamento no artigo 209 da Constituição Federal, artigos 46 a 52 da Lei nº 8.078/90, artigos 593 a 609 do Código Civil Brasileiro, Leis nº 9.870/99 e nº 9.394/96.
<br />

<p class="center"><b>DO OBJETO DO CONTRATO</b></p>

<b>Cláusula 2ª</b>. O presente contrato tem como objeto a prestação de serviços educacionais no ano letivo de <span style="color: #147eb0"><b>2022</b></span>, sendo os serviços ministrados em conformidade com o previsto na legislação de ensino em vigor, no regimento interno da Escola e em seu planejamento pedagógico.
<br /><br />
<b>Parágrafo Primeiro</b>. Caso o turno vespertino não atinja o mínimo de 15 alunos matriculados na turma, até 31/01/2022, a <b>CONTRATADA</b> se reserva ao direito de desfazer o contrato e devolver o valor recebido da matrícula de forma integral ao <b>CONTRATANTE</b>, sem juros, multa ou correção, uma vez que não terá condições de arcar com os custos de uma turma com quantidade inferior de alunos.
<br />

<p class="center"><b>DAS OBRIGAÇÕES DA CONTRATADA</b></p>

<b>Cláusula 3ª. A CONTRATADA</b> se obriga à prestação de serviços educacionais no ano letivo de <span style="color: #147eb0"><b>2022</b></span>, na <?php echo $aluno_serie; ?>ª série do Ensino Médio, no turno <?php echo $aluno_turno; ?>, de acordo com projeto pedagógico, através de aulas em salas, laboratórios ou em locais que a <b>CONTRATADA</b> indicar, considerada a natureza de conteúdo, característica, peculiaridade e demais atividades que o ensino exigir, buscando, inclusive, otimizar a relação número de alunos por classe.
<br /><br />
<b>Parágrafo Primeiro</b>. Obriga-se ainda, a oferecer total assistência ao aluno durante o período em que este se encontrar na instituição de ensino, fornecendo todo acompanhamento e orientação pedagógica necessária de modo a atingir o perfeito desenvolvimento físico, mental e intelectivo do aluno em todas as etapas.
<br /><br />
<b>Parágrafo Segundo</b>. A matrícula, ato indispensável que estabelece o vínculo de aluno com o Colégio, dar-se-á com o pagamento da primeira parcela da anuidade, com a assinatura deste Contrato e observância à Cláusula 4ª do presente instrumento.
<br />

<p class="center"><b>DO PRAZO</b></p>

<b>Cláusula 4ª.</b> O presente contrato terá prazo de 12(doze) meses, tendo seu termo inicial no dia <span style="color: #147eb0"><b>01/01/2022</b></span>, e seu termo final no dia <span style="color: #147eb0"><b>31/12/2022</b></span>, correspondendo ao ano letivo de 2022.
<br />

<p class="center"><b>DA MATRÍCULA E REQUISITOS</b></p>

Cláusula 5ª. O ato da matrícula terá sua confirmação formal, através do preenchimento deste contrato, o qual somente será considerado efetivado após o pagamento da matricula e a efetiva assinatura.
<br />

<p class="center"><b>DO PREÇO</b></p>

Cláusula 6ª. Pelos serviços educacionais previstos neste contrato, o <b>CONTRATANTE</b> pagará a <b>CONTRATADA</b> o importe de:
<br /><br />    
• Para 1ª série do Ensino Médio:
<span style="color: #147eb0"><b>R$ 8.588,52</b></span> (oito mil quinhentos e oitenta e oito reais e cinquenta e dois centavos), referente a anuidade, valor que poderá ser pago em prestações mensais e consecutivas de <span style="color: #147eb0"><b>R$ 715,71</b></span> (setecentos e quinze reais e setenta e um centavos), as quais deverão ser pagas na data prevista no parágrafo primeiro da cláusula 7ª deste contrato.
<br /><br />    
• Para 2ª série do Ensino Médio:
<span style="color: #147eb0"><b>R$ 8.605,68</b></span> (oito mil seiscentos e cinco reais e sessenta e oito centavos), referente a anuidade, valor que poderá ser pago em prestações mensais e consecutivas de <span style="color: #147eb0"><b>R$ 717,14</b></span> (setecentos e dezessete reais e quatorze centavos), as quais deverão ser pagas na data prevista no parágrafo primeiro da cláusula 7ª deste contrato.
<br /><br />    
• Para 3ª série do Ensino Médio:
<span style="color: #147eb0"><b>R$ 8.622,84</b></span> (oito mil seiscentos e vinte e dois reais e oitenta e quatro centavos), referente a anuidade, valor que poderá ser pago em prestações mensais e consecutivas de <span style="color: #147eb0"><b>R$ 718,57</b></span> (setecentos e dezoito reais e cinquenta e sete centavos), as quais deverão ser pagas na data prevista no parágrafo primeiro da cláusula 7ª deste contrato.
<br /><br />
Parágrafo Primeiro. Os preços estabelecidos poderão ser alterados no caso de determinações do Poder Público que acarretem alterações na receita ou despesa legais na proporção dos reflexos acarretados.
<br /><br />
Parágrafo Segundo. O valor referido nesta Cláusula corresponde à carga horária ou plano do curso. Dessa forma, em consonância com a Cláusula 15ª, os serviços especiais são divididos em obrigatórios e opcionais e seus preços serão fixados previamente na Secretaria da Escola.
<br />

<p class="center"><b>DO PAGAMENTO</b></p>

Cláusula 7ª. O valor constante na Cláusula anterior será pago de acordo com o plano de pagamento vigente na data de matrícula. 
<br /><br />
Parágrafo primeiro. A primeira parcela deverá ser paga no ato da matrícula e as demais terão o vencimento no dia <span style="color: #147eb0">(<?php echo '<b>'.$mensalidade.'</b>';?>)</span> de cada mês, em Instituições Bancárias ou na sede do Colégio. 
<br /><br />
Parágrafo Segundo. Se por algum motivo o <b>CONTRATANTE</b> estiver sem o carnê de pagamento das mensalidades, este deverá dirigir-se à Secretaria do Colégio, com a necessária antecedência, para que seja fornecido uma 2ª via a fim de que seja efetuado o referido pagamento junto a Secretaria da Escola.
<br /><br />
Cláusula 8ª. O não comparecimento do aluno às atividades de seu curso e a não utilização dos serviços colocados à sua disposição, não exime o <b>CONTRATANTE</b> dos pagamentos das mensalidades.
<br /><br />
Parágrafo Único. As mensalidades só serão aceitas como pagas, se o <b>CONTRATANTE</b> apresentar o carnê com autenticação/carimbo e assinatura do funcionário da escola.
<br />

<p class="center"><b>DAS PENALIDADES</b></p>

Cláusula 9ª. O atraso no pagamento das parcelas acarretará ao <b>CONTRATANTE</b>, o pagamento do valor principal, uma multa moratória no valor de 2%, acrescido de juros mensal de 1% na forma simples, e correção monetária, sobre o valor da parcela vencida. 
<br /><br />
Cláusula 10ª. Em caso de inadimplência, a partir de uma mensalidade, a <b>CONTRATADA</b> poderá a seu critério, realizar a referida cobrança por meio extrajudicial, bem como judicial.
<br /><br />
Cláusula 11ª. Todos os custos oriundos da cobrança ou do aforamento de ação judicial, estes deverão ser ressarcidos pelo <b>CONTRATANTE</b>, acrescidos 20% de honorários advocatícios contratuais, sem prejuízo dos honorários sucumbenciais, quando a cobrança estiver confiada a advogado.
<br />

<p class="center"><b>DAS AULAS</b></p>

Cláusula 12ª. As aulas serão ministradas nas salas de aula e/ou na modalidade remota (on-line) em locais designados pela <b>CONTRATADA</b>, que levará em conta a natureza do conteúdo e técnica pedagógica a ser aplicada.
<br /><br />
Parágrafo Primeiro. O <b>CONTRATANTE</b> está ciente que as aulas poderão ocorrer no sistema híbrido, desde que determinado pelas autoridades competentes, em razão da pandemia do COVID-19.
<br /><br />
Parágrafo Segundo. Para a realização da Aula presencial ou híbrida o <b>CONTRATANTE</b> está ciente que deverá assinar o termo de responsabilidade com todas as orientações que deverão ser tomadas em razão da pandemia oriunda do COVID-19.
<br /><br />
Parágrafo Terceiro. O Prédio em que está localizado o Colégio é alugado, contém cinco pavimentos e a <b>CONTRATADA</b> se reserva ao direito de discriminar os dois pavimentos em que serão as salas de aula, secretária, recepção, financeiro, coordenação, direção e espaço de lazer.
<br /><br />
Parágrafo Quarto. Uma vez que o imóvel é alugado, os acessos aos pavimentos podem ou não serem compartilhados com outras empresas públicas ou privadas que venham a ocupar outros pavimentos do prédio.
<br /><br />
Parágrafo Quinto. O <b>CONTRATANTE</b> declara ciência de que o CONTRATADO poderá alterar o local em que serão ministradas as aulas no curso do ano letivo, desde que o endereço permaneça no Centro desta Cidade.
<br /><br />
Parágrafo Sexto. Todas as salas obedecerão ao determinado pelas normas sanitárias em razão da pandemia do COVID-19.
<br /><br />
Cláusula 13ª. Ao aderir ao presente, o <b>CONTRATANTE</b> submete-se ao regulamento interno e às demais obrigações constantes na legislação aplicável à área, e ainda, às emanadas de outras fontes legais, desde que regulem, supletivamente, a matéria.
<br /><br />
Cláusula 14ª. É de exclusiva competência da <b>CONTRATADA</b> o planejamento, escolha de professores, orientação didática, pedagógica e educacional, fixação da carga horária e plano pedagógico, marcação de datas de provas e atividades de verificação de aproveitamento e demais providências de ensino.
<br /><br />
Parágrafo Primeiro. O <b>CONTRATANTE</b> está ciente que deverá dispor de smartphone/ tablet/ notebook ou computador para que o estudante assista às aulas e realize as atividades, dispor de acesso à internet e adquirir o material didático indicado pela <b>CONTRATADA</b> para garantir o bom desenvolvimento pedagógico do aluno.
<br /><br />
Parágrafo Segundo. É de inteira responsabilidade do <b>CONTRATANTE</b> manter os dispositivos necessários para acesso as aulas remotas e acompanhar o desenvolvimento do menor na sua residência, caso haja ensino remoto ou híbrido.
<br /><br /><br />

<p class="center"><b>DOS SERVIÇOS ESPECIAIS</b></p>

Cláusula 15ª. Não estão incluídos nos valores citados acima neste contrato, os valores que deverão ser pagos referentes aos serviços especiais, devendo estes serem adimplido a medida que houverem necessidade da prestação pela IE, são eles:
<br /><br />               
§1º. DAS TAXAS OBRIGATÓRIAS: Projeto(s) pedagógico(s) e/ou culturais, expedição e segunda via de documentos, uniforme.
<br /><br />
§2º. DAS TAXAS OPCIONAIS: Recuperação paralela, recuperação final, 2ª chamada (vide manual), aula(s) de reforço, dependência(s) de disciplina(s), adaptações, transporte escolar, alimentação, material didático de uso individual, excursões, visitas e os estudos do meio.
<br />

<p class="center"><b>DA TRANSFERÊNCIA E DO TRANCAMENTO</b></p>

Cláusula 16ª. A transferência e o trancamento serão requeridos por escrito, devendo ser realizado(s) o(s) pagamento(s) de taxa(s) e emolumentos, de acordo com os valores determinados pela <b>CONTRATADA</b>, o que será deferido, atendidos outros requisitos definidos na legislação de ensino, observando-se a apresentação de documento que comprove a quitação das parcelas escolares vencidas até a data do requerimento.
<br />

<p class="center"><b>DA RESCISÃO</b></p>

 Cláusula 17ª. O presente Contrato poderá ser rescindido:
<br /><br />
       a) Pelo <b>CONTRATANTE</b>, mediante desistência, cancelamento ou transferência, formulada por escrito em requerimento próprio fornecido pelo Colégio;
     <br /><br />
      b) Pela <b>CONTRATADA</b>, por rescisão ou desligamento do aluno que apresente conduta ou atitude inadequada, de acordo com o regimento escolar e, após á avaliação da coordenação pedagógica do Colégio.
<br /><br />
      c) Pela <b>CONTRATADA</b>, se até o início do ano letivo não houver no mínimo 14 alunos na turma cujo o educando foi matriculado, o mesmo se compromete a devolver o valor pago no ato da matrícula de forma integral ao <b>CONTRATANTE</b>.
<br /><br />
      Parágrafo Primeiro. Requerido a rescisão do presente contrato, o <b>CONTRATANTE</b> deverá estar em dias com as suas obrigações financeiras, sob pena da <b>CONTRATADA</b> tomar medidas judiciais, o que restará incidido ao que dispõe a cláusula 11ª do presente contrato.
<br /><br />
      Parágrafo Segundo. Ocorrendo a desistência do presente contrato, antes do inicio do ano letivo, fica estabelecido que a <b>CONTRATADA</b> reterá do valor da matrícula, como cláusula penal, o percentual de 20%, em razão dos encargos administrativos.
<br /><br />
      Parágrafo Terceiro. Ocorrendo a desistência do presente contrato, após o inicio do ano letivo, fica estabelecido como clausula penal, que a <b>CONTRATADA</b> não restituirá o valor da matrícula.
<br /><br />
      Parágrafo Quarto. O abandono do curso sem a solicitação de transferência, cancelamento ou desistência requeridos por escrito a direção da escola, não implica em rescisão contratual, tendo como consequência, a obrigação de pagar as parcelas mensais relativas a anuidade escolar, até o seu término.
<br />

<p class="center"><b>DAS DISPOSIÇÕES GERAIS</b></p>

Cláusula 18ª. O <b>CONTRATANTE</b> autoriza a <b>CONTRATADA</b> a utilizar-se, sem ônus, de sua imagem e do educando para fins de divulgação do curso e suas atividades, podendo veiculá-la pelos meios de comunicação disponíveis.
<br /><br />
Parágrafo único. O uso da imagem respeitará sempre a moral, os bons costumes e a ordem pública.
<br /><br />
Cláusula 19ª. O <b>CONTRATANTE</b> será responsável pelos prejuízos que venha a causar às instalações de propriedade da <b>CONTRATADA</b> ou a terceiros, em decorrência da utilização da estrutura física do Colégio.
<br /><br />
Cláusula 20ª. Para todas as intimações e comunicações são válidos os endereços e informações fornecidos pelo <b>CONTRATANTE</b>, constantes na ficha de matrícula, sendo considerados entregues todas as remessas para o referido endereço, salvo alterações devidamente comunicadas.
<br /><br />
Cláusula 21ª. O <b>CONTRATANTE</b> se compromete em comparecer ao estabelecimento de ensino da <b>CONTRATADA</b>, sempre que for convocado, para receber informações, participar de decisões em reunião com os demais <b>CONTRATANTE</b>S, bem como aceita coadjuvar no desenvolvimento das atividades educacionais em que a família é parte integrante, para o bom desenvolvimento educacional do aluno, objeto deste contrato.
<br /><br />
Cláusula 22ª. O <b>CONTRATANTE</b> fornecerá a <b>CONTRATADA</b>, no ato da matrícula, o responsável pela condução do aluno, que por medida de segurança, ficará acordado que somente os pais ou responsáveis, poderão retirar o aluno da escola e/ou preencher a ficha de autorização de saída da escola sozinho.
<br /><br />
Cláusula 23ª. O <b>CONTRATANTE</b> indicará a <b>CONTRATADA</b>, o médico, a clínica e hospital o qual deverá encaminhar o aluno (a) em caso de emergência, bem como as restrições quanto aos medicamentos em que o aluno não pode fazer uso, responsabilizando-se pelas despesas que houver com o transporte e atendimento.
<br /><br />
Parágrafo único. Omitindo-se o <b>CONTRATANTE</b> no que dispõe a clausula 23ª, importa considerar, que o aluno não tem nenhuma restrição quanto a medicamento, indicação de médico, clínica ou hospital.
<br /><br />
Cláusula 24ª. Fica estabelecido que o presente contrato após assinado pelo <b>CONTRATANTE</b>, <b>CONTRATADA</b> e por duas testemunhas, o mesmo terá força de título executivo extrajudicial, na moldura do art. 585, II do Código de Processo Civil.
<br /><br />
Cláusula 25ª. Havendo a propositura da execução do presente contrato por meio judicial, deverá o <b>CONTRATANTE</b> apresentar os recibos de pagamento das mensalidades já pagas, na sua omissão neste sentido, resta devido os recibos não apresentados pagos. 
<br /><br />
Cláusula 26ª. Fica pactuado, caso o <b>CONTRATANTE</b> não seja um dos pais do aluno, que os genitores do educando são responsáveis solidários quanto ao pagamento da anuidade escolar, concordando desde já, como legítimo para situar como sujeito passivo no processo de execução do presente contrato. 
<br />

<p class="center"><b>FORO</b></p>

Cláusula 27ª. Para dirimir quaisquer controvérsias oriundas do Contrato, as partes elegem o foro da comarca de Simões Filho.
Por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de igual teor, juntamente com 2 (duas) testemunhas.
<br /><br />

<p class="center">Samões Falha, __de _________de 202_.
<br /><br />

<div style="width:800px; height:300px; background-color:; margin:auto;">
<div style="width:400px; height:300px; background-color:;float:left;">
_________________________________________<br />
Colégio MaximosFF LTDA ME   <br />
<b>CONTRATADA</b><br />	 
CNPJ 88.888.888/0088-88<br /><br /><br /><br /><br /><br />
<b>Testemunhas:</b><br /><br />
_________________________________<br />
CPF. nº 088.888.888-88<br /><br />
</div>
<div style="width:400px; height:300px; background-color:; float:left;">
_________________________________________<br />            
<span style="color: #147eb0"><b>Ass.CONTRATANTE</b></span><br /><br />
<span style="color: #147eb0">Nome:</span>_________________________________________<br /><br />
<span style="color: #147eb0">CPF:</span>__________________________________________<br /><br />
                                             	
<span style="color: #147eb0">Declaro haver recebido cópia deste contrato assim como do Edital_2022 sendo-me oportunizado discutir as suas cláusulas.</span><br /><br />
_________________________________<br />
CPF. nº 888.888.888-88 <br /></p>        
</div>
<div style="clear:both;"></div>
</div>                                
</body>
</html>