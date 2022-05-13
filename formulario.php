<html>
    <head>
        <title>Formulario-Escolar</title>
    </head>
<body style="background-color: #000000; font-family: Arial, Helvetica, sans-serif;">
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
                        <select name="aluno_serie" id="serie" required>
                            <option selected disabled value="">Selecione</option>
                            <option value="1">1 Série EM</option>
                            <option value="2">2 Série EM</option>
                            <option value="3">3 Série EM</option>
                        </select>
                        <br /> <br />
                        <label ><b>Turno:</b></label>
                        <label>
                            <input type="radio" name="aluno_turno" value="1" required>Matutino
                        </label>
                        <label>
                            <input type="radio" name="aluno_turno" value="2" required>Vespertino
                        </label>
                        <br /> <br />
                        <label for=""><b>Nome:</b></label>
                        <br />
                        <input type="text" name="aluno_nome" id="aluno_nome" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <input type="text" name="aluno_rg" id="aluno_rg" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <input type="text" name="aluno_cpf" id="aluno_cpf" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <input type="text" name="aluno_naturalidade" id="aluno_naturalidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <input type="date" name="aluno_nascimento" id="aluno_nascimento" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required>
                        <!--Div de espaçamento!-->
                        <div style="width: 490px; height: 32px; background-color: transparent"></div>
                        <!--Fim da div de espaçamento-->
                        <label for=""><b>Telefone:</b></label>
                        <br />
                        <input type="text" name="aluno_telefone" id="aluno_telefone" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required>
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="aluno_zap" id="sim" value="1" required>Sim
                        <input type="radio" name="aluno_zap" id="nao" value="2" required>Não
                        <br /><br />
                        <label for=""><b>Bairro:</b></label>
                        <br />
                        <input type="text" name="aluno_bairro" id="aluno_bairro" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>Ciddade:</b></label>
                        <br />
                        <input type="text" name="aluno_cidade" id="aluno_cidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label><b>O(A) aluno(a) reside com?</b></label>
                        <input type="radio" name="responsavel" id="pai" value="1" required>Pai
                        <input type="radio" name="responsavel" id="mae" value="2" required>Mãe
                        <input type="radio" name="responsavel" id="paiemae" value="3" required>Pai e Mãe
                        <input type="radio" name="responsavel" id="outro" value="4" required>Outros
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
                        <input type="text" name="mae_nome" id="mae_nome" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <input type="text" name="mae_rg" id="mae_rg" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <input type="text" name="mae_cpf" id="mae_cpf" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <input type="text" name="mae_naturalidade" id="mae_naturalidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <input type="date" name="mae_nascimento" id="mae_nascimento" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required>
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <input type="text" name="mae_telefone1" id="mae_telefone1" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required>
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="mae_zap1" id="sim" value="1" required>Sim
                        <input type="radio" name="mae_zap1" id="nao" value="2" required>Não
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <input type="text" name="mae_telefone2" id="mae_telefone2" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;">
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="mae_zap2" id="sim" value="1">Sim
                        <input type="radio" name="mae_zap2" id="nao" value="2">Não
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <input type="email" name="mae_email" id="mae_email" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></b></label>
                        <br />
                        <input type="text" name="mae_trabalho" id="mae_trabalho" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
                        <br /><br />
                        <label for=""><b>End.Resid:</b></b></label>
                        <br />
                        <input type="text" name="mae_endereco" id="mae_endereco" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required>
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
                        <input type="text" name="pai_nome" id="pai_nome" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <input type="text" name="pai_rg" id="pai_rg" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <input type="text" name="pai_cpf" id="pai_cpf" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <input type="text" name="pai_naturalidade" id="pai_naturalidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <input type="date" name="pai_nascimento" id="pai_nascimento" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required />
                    </div>
                    <!--Dados do lado Direito-->
                    <div style="width: 490px; height: 300px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <input type="text" name="pai_telefone1" id="pai_telefone1" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" required />
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="pai_zap1" id="sim" value="1" required />Sim
                        <input type="radio" name="pai_zap1" id="nao" value="2" required />Não
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <input type="text" name="pai_telefone2" id="pai_telefone2" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" >
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="pai_zap2" id="sim" value="1" />Sim
                        <input type="radio" name="pai_zap2" id="nao" value="2" />Não
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <input type="email" name="pai_email" id="pai_email" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></b></label>
                        <br />
                        <input type="text" name="pai_trabalho" id="pai_trabalho" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
                        <br /><br />
                        <label for=""><b>End.Resid:</b></b></label>
                        <br />
                        <input type="text" name="pai_endereco" id="pai_endereco" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" required />
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
                        <label for=""><b>Nome:</b></label>
                        <br />
                        <input type="text" name="outro_nome" id="outro_nome" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>RG:</b></label>
                        <br />
                        <input type="text" name="outro_rg" id="outro_rg" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>CPF:</b></label>
                        <br />
                        <input type="text" name="outro_cpf" id="outro_cpf" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>Naturalidade:</b></label>
                        <br />
                        <input type="text" name="outro_naturalidade" id="outro_naturalidade" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>Nascimento:</b></label>
                        <br />
                        <input type="date" name="outro_nascimento" id="outro_nascimento" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" />
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 350px; background-color: transparent; float: left;">
                        <label for=""><b>Telefone (1):</b></label>
                        <br />
                        <input type="text" name="outro_telefone1" id="outro_telefone1" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" />
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="outro_zap1" id="sim" value="1" />Sim
                        <input type="radio" name="outro_zap1" id="nao" value="2" />Não
                        <br /><br />
                        <label for=""><b>Telefone (2):</b></label>
                        <br />
                        <input type="text" name="outro_telefone2" id="outro_telefone2" style="border:transparent; background-color: #e0e0e0; width: 200px; height: 25px;" />
                        <label for=""><b>Zap?:</b></label>
                        <input type="radio" name="outro_zap2" id="sim" value="1" />Sim
                        <input type="radio" name="outro_zap2" id="nao" value="2" />Não
                        <br /><br />
                        <label for=""><b>E-mail:</b></label>
                        <br />
                        <input type="email" name="outro_email" id="outro_email" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>Empresa onde trabalha:</b></label>
                        <br />
                        <input type="text" name="outro_trabalho" id="outro_trabalho" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label for=""><b>End.Resid:</b></label>
                        <br />
                        <input type="text" name="outro_endereco" id="outro_endereco" style="border:transparent; background-color: #e0e0e0; width: 450px; height: 25px;" />
                        <br /><br />
                        <label><b>Responsavel Pedagógico:</b></label>
                        <br />
                        <input type="radio" name="contrato_responsavel"  value="1" required /> Pai
                        <input type="radio" name="contrato_responsavel"  value="2" required /> Mãe
                        <input type="radio" name="contrato_responsavel" value="3" required /> Pai e Mãe
                        <input type= "radio" name="contrato_responsavel" value="4" required /> Outros
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
                        <label for=""><b>Escolha o dia do pagamento da mensalidade:</b></label>
                    <select name="dia_mensalidade" id="dia_mensalidade" required>
                       <option selected disabled value="">Selecione</option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                       <option value="11">11</option>
                       <option value="12">12</option>
                       <option value="13">13</option>
                       <option value="14">14</option>
                       <option value="15">15</option>
                       <option value="16">16</option>
                       <option value="17">17</option>
                       <option value="18">18</option>
                       <option value="19">19</option>
                       <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option>
                       <option value="23">23</option>
                       <option value="24">24</option>
                       <option value="25">25</option>
                       <option value="26">26</option>
                       <option value="27">27</option>
                       <option value="28">28</option>
                       <option value="29">29</option>
                       <option value="30">30</option>
                   </select>
                        <br /><br />
                        <label for=""><b>DOCUMENTAÇÃO RECEBIDA:</b></label>
                        <br />
                        <input type="checkbox" name="mae_rgcpf" value="1" />
                        <label for=""><b>RG/CPF/MÃE</b></label>
                        <br />
                        <input type="checkbox" name="pai_rgcpf" value="2" />
                        <label for=""><b>RG/CPF/PAI</b></label>                      
                        <br />
                        <input type="checkbox" name="responsavelfinaceiro_rgcpf" value="3" />
                        <label for=""><b>RG/CPF/RESPONSÁVEL FINANCEIRO</b></label>                       
                        <br /> 
                        <input type="checkbox" name="responsavelfinanceiro_edereco" value="4" />
                        <label for=""><b>COMPROVANTE DE ENDEREÇO/RESPONS. FINANCEIRO</b></label>                     
                        <br />
                        <input type="checkbox" name="contrato_assinado" value="5" />
                        <label for=""><b>CONTRATO ASSINADO</b></label>                       
                    </div>
                    <!--Dados do lado esquerdo-->
                    <div style="width: 490px; height: 160px; background-color: transparent; float: left;">
                        <label for=""><b>DOCUMENTAÇÃO RECEBIDA DO ALUNO:</b></label>
                        <br />
                        <input type="checkbox" name="aluno_certidaonasc" value="1" />
                        <label for=""><b>Certidão de Nascimento</b></label>
                        <br />
                        <input type="checkbox" name="aluno_rg_doc" value="2" />
                        <label for=""><b>RG</b></label>
                        <br /> 
                        <input type="checkbox" name="aluno_cpf_doc" value="3" />
                        <label for=""><b>CPF</b></label>
                        <br />
                        <input type="checkbox" name="fotos" value="4" />
                        <label for=""><b>03 FOTOS 3X4</b></label>                       
                        <br />
                        <input type="checkbox" name="atestescolaridade" value="5">
                        <label for=""><b>Atestado de Escolaridade</b></label>                       
                        <br />
                        <input type="checkbox" name="histtransfer" value="6">
                        <label for=""><b>Histórico/Transferencia</b></label>                       
                    </div>
                <div style="clear: both;"></div>        
                </div>
                    <!--Div de espaçamento!-->
                <div style="width: 980px; height: 10px; background-color: #ffffff;"></div>
                <div style="width: 980;height: 200px;background-color: transparent; text-align: center;">
                    <label for=""><b>OBSERVAÇÕES:</b></label>
                        <br />
                        <input type="text" name="obs" id="obs" style="width: 900px; height: 100px;">
                        <br /> <br />
                        <input type="submit" value="Enviar Formulario">
                </div>
                </div>
                <!--Fim do Formulario-->
                </form>
            </div>
        <!--div 2 div do form-->
        </div>
<!--Div geral FINAL-->
    </div>
</body>
</html>