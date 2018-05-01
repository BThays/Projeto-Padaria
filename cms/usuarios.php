
<!doctype html>
<html lang="pt-br">
    <head>
        <title>CMS|Cadastro do Usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylecms.css">
    </head>
    
    <body>
        <div id="box_principal"> 
            <div id="cabecalho">
                <div id="box_title">
                    <h2>CMS - Sistema de Gerenciamento do Site</h2>
                </div>
                
                <div id="box_icon">
                     <img src="imagens/logohill.jpg" style="width:100%" alt=" Logo Padoka Hill Valley">
                </div>
            </div>
            
            <div id="box_adm">
            
                <div class="administrador">
                    <img src="imagens/content.png" style="width:100%">
                </div>
                    
                 <div class="administrador">
                    <img src="imagens/contact.png" style="width:100%">
                </div>
                
                 <div class="administrador">
                    <img src="imagens/produto.png" style="width:100%">
                </div>
                
                 <div class="administrador">
                    <img src="imagens/users.png" style="width:100%">
                </div>
                
                 <div id="bemvindo">
                    Bem vindo ao CMS
                </div>
                
                <div id="linha_title">
                
                    <div class="title_adm">
                        Adm. Conteudo
                    </div>

                    <div class="title_adm">
                        Adm. Fale Conosco
                    </div>

                    <div class="title_adm">
                        Adm. Produtos
                    </div>

                    <div class="title_adm">
                        <a href="admusuarios.php">Adm. Usuários</a>
                    </div>
                    
                     <div id="logout">
                        <a href="../home.php">Logout</a>
                    </div>
                    
                </div>
                
            </div>
        
            
            <div id="box_conteudo">
                
                <form name="frmcadastro_usuario" method="get" action="usuarios.php">
                
                    <div class="linha_usuario">
                        <div class="info_usuario">
                            <p>Nome:</p>
                        </div>

                        <div class="info_input">
                            <input class="input_user" name="txtnome">
                        </div>

                    </div>

                    <div class="linha_usuario">
                        <div class="info_usuario">
                            <p>E-mail:</p>
                        </div>

                        <div class="info_input">
                            <input class="input_user" name="txtemail">
                        </div>
                    </div>

                     <div class="linha_usuario">
                        <div class="info_usuario">
                            <p>Celular:</p>
                        </div>

                        <div class="info_input">
                            <input class="input_user" name="txtcelular">
                        </div>
                    </div>


                    <div class="linha_usuario">
                        <div class="info_usuario">
                            <p>Sexo:</p>
                        </div>

                         <div class="info_input">
                             <input class="radio" type="radio" name="rdosexo" value="F">Feminino

                             <input type="radio" name="rdosexo" value="M">Masculino
                        </div>
                    </div>

                     <div class="linha_usuario">
                         <div class="info_usuario">
                             <p>Escolha sua senha:</p>
                        </div>

                        <div class="info_box_senha">

                            <input class="input_user_senha" name="txtsenha">

                        </div>

                        <div class="info_usuario_dois">
                            <p>Confirme a senha escolhida:</p>
                        </div>

                        <div class="info_box_senha">
                            <input class="input_user_senha" name="txtconfirma_senha">
                        </div>
                    </div>

                    <div class="linha_usuario">

                        <div class="info_usuario">
                            <p>Nível de Usúario:</p>
                        </div>

                        <div class="info_nivel">
                            <select>
                              <?php
                                
                                $sql = "select * from tbl_nivel_usuario"
                                
                                ?>
                            </select>
                        </div>

                        <div id="box_botton">
                            <input id="botton" type="submit" value="Salvar" name="btnsalvar">
                        </div>

                    </div>
                
                </form>
            
            </div>
            
             <div id="box_rodape">
                <p>Desenvolvido por Barbara Siqueira</p>
            </div>
            
        </div>
    </body>
    
</html>