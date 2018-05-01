<?php 

    //Primeiro passo
    //CONEXÃO COM O BANCO DE DADOS

    if($conexao = @mysql_connect('localhost', 'root', 'bcd127')){
        //Em seguida 
        mysql_select_db('db_padoka');
        //Logo após, certifique se o banco de dados esta conectado
    }else{
        echo('ERRO: Não foi possível conectar ao Banco de Dados, informe o Administrador do site');
    }
     
    //Segundo passo, verifica o clique do botão
        if(isset($_GET['btnsalvar'])){
            
        
       
            
            //Terceiro passo, resgata os valores dos campos e armazena nas variaveis que irei
            //dar o nome agora
            //Pessoas na estação

            $nome = $_GET['txtnome'];
            $email = $_GET['txtemail'];
            $celular = $_GET['txtcelular'];
            $sexo = $_GET['rdosexo'];
            $senha_primaria = $_GET['txtsenha'];
            $senha_confirma = $_GET['txtconfirma_senha'];
            $nivel_user = $_GET['lstnivel_user'];
            $status = 1;

            //Quarto passo, verificar se as senhas correspondem para podermos salvar no banco
            //Faremos dessa forma para o código ficar mais limpo e lógico
            if ($senha_primaria == $senha_confirma){
                //Echo para conferir se esta salvando
                //echo ("Salvar");
                //Quinto passo, inserir no banco de dados, fazendo uma variavel chamanda $sql e inserindo as informacoes dentro dela, sendo os mesmos nomes que o do banco, values = são as variaveis do PHP
                //Trem parado colocando as pessoas dentro
                $sql = "insert into tbl_usuario (nome, email, celular, senha, sexo, status, idNivel_usuario) 
                values ('".$nome."','".$email."','".$celular."','".$senha_primaria."','".$sexo."',".$status.",".$nivel_user.")";
                
               
                //Esse echo serve para mostrar na tela do navegador se o BD esta dando algum erro
                //caso apareça algo, copie e cole no cmd mysql
                //echo($sql);
                 //Sexto passo, salva os dados que estão na variavel ($sql) no BD
                //Piloto que leva o trem para o BD
                mysql_query($sql);
                
                header('location:cadastro_user.php');
                
                
            }else{
                echo("As senhas não correspondem");
            }
            
            
        }

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>CMS|Cadastro do Usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylecms.css">
        
        <!--Função para habilitar a caixa checbox para ativar a edição da senha-->
        <script>
            //Criei uma função chamada habilitar
            function habilitar(){
                //Criei uma variavel chamada chk, oegando o nome da id que eu dei para minha checkbox, usando o checked da qual trás valores
                //verdadeiro ou falso
                var chk = document.getElementById("senha_chk").checked;
                
                //Se retornar true eu estou ATIVANDO as caixas
                if (chk == true){
                    //alert('1');
                }else{
                    //alert('2');
                    document.frmcadastro_usuario.txtsenha.disabled=1;
                    document.frmcadastro_usuario.txtconfirma_senha.disabled=1;
                    
                }
                
                
                
            }
        </script>
        
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
                
                <form name="frmcadastro_usuario" method="get" action="cadastro_user.php">
                
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

                            <input class="input_user_senha" name="txtsenha" type="password" class="ativando">

                        </div>

                        <div class="info_usuario_dois">
                            <p>Confirme a senha escolhida:</p>
                        </div>

                        <div class="info_box_senha">
                            <input class="input_user_senha" name="txtconfirma_senha" type="password" class="ativando">
                        </div>
                         
                            <!--Div checbox-->
                         <div id="checkbox">
                            <!--onclick chamando a função que criei no scrip-->
                             <input type="checkbox" value="Sim" name="txthabilitar_senha" onclick="habilitar();" id="senha_chk">Habilitar senha
                         </div>
                    </div>

                    <div class="linha_usuario">

                        <div class="info_usuario">
                            <p>Nível de Usúario:</p>
                        </div>

                        <div class="info_nivel">
                        <!--Aqui estou criando um select-->
                        <!--Da qual dentro dele estou fazendo uma lógica em PHP-->
                        <!--Para trazer dados de uma tabela do meu banco de dados, de uma forma mais facilitadora-->
                        <!--Com uma lógica básica dentro do option
                        lst -> select -->
                            <select name="lstnivel_user" id="select">
                                
                                <option>Por favor selecione um nível de Usuario</option>
        
                                <?php
                                    $sql="select * from tbl_nivel_usuario";
                                     
                                        //Aqui estou trazendo meus dados do banco, usando o mysql_query
                                    $opcao = mysql_query ($sql);
                                //Essa estrutura, irá estar me trazendo os niveis do usuario do BD
                                while($nivel=mysql_fetch_array($opcao))
                                    
                                {
                                    
                                ?><!-- Aqui estou fechando a tag PHP, porque estarei entrando em HTML -->
                                    <option value="<?php echo ($nivel['idNivelUser'])?>"><?php echo $nivel['nivel'] ?></option>
                                <!-- abrindo a tag php por conta do HTML -->
                                <?php
                                }
                                
                                    
                                    
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