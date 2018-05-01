<?php

    //Ativando o uso de variaveis de sessão/SESSION
    //é uma variavel global que fica ativa no navegador
    //enquanto ele não for fechado
    session_start();

    //Fazendo a conexão com o banco de dados

    if($conexao = @mysql_connect('localhost', 'root', 'bcd127'))
    {
        //Habilitando o database a ser utilizado
        mysql_select_db('db_padoka');
    }else{
        echo('ERRO: Não foi possível conectar ao Bando de Dados! Informe ao Administrador da página');
    }

    //Excluir
    //Se tiver alguma coisa na URL chamado 'modo' sendo EXCLUIR ou EDITAR
    if(isset($_GET['modo']))
    {
        //a variavel modo vai receber o texto que mandamos na URL ''excluir''
        //se tudo der certo, seu valor vai ficar como excluir
        $modo=$_GET['modo'];//Variavel modo guarda a AÇÃO que ele vai fazer, nesse caso, excluir
        
            //Teste na tela para ver se esta pegando o excluir
            //echo($modo);
            
        if($modo == 'excluir')
        {
            $identificador = $_GET['id'];//Variavel da URL, pegando o Id do Usuario
            $sql="delete from tbl_usuario where idUsuario=".$identificador;
            
            mysql_query($sql);
            
            //Header irá mostrar na URL 'limpa' sem o id do usuario já excluido
            header('location:informacao_user.php');
            
        //Editar    
        }else if($modo == 'consultar')
        {
            $identificador = $_GET['id'];
            
            
            //Variavel que sempre vai estar ativa, quando o usuario clicar 
            //em alguma informação para editar
            //enquanto estiver na página para editar uma informação
            //essa variavel ainda continuará ativa até o usuario clicar em
            //outra informação de outra pessoa
            //ou seja, ela vai criando e se 'destruindo' toda vez que houver esse ciclo
            $_SESSION['codRegisto'] = $identificador;
            
            $sql="select * from tbl_usuario where idUsuario=".$identificador;
            $resposta = mysql_query($sql);
            
            //Verificando se existe resultado no banco sobre as informações
            //e vou armazenar em variaveis locais a serem utilizadas
            //nas caixas de texto
            if($usuario = mysql_fetch_array($resposta))
            {
                //Resgato todos os valors do banco de dados e
                //armazeno em variaveis locais a serem utilizadas
                //nas caixas de texto
                //Variavel local = usado em uma página especifica dentro da estrutura onde estou mexendo
                $identificador = $usuario['idUsuario'];
                $nome = $usuario['nome'];
                $email = $usuario['email'];
                $celular = $usuario['celular'];
                $sexo = $usuario['sexo'];
                if($sexo=='M'){
                    $rdoMasculino = "checked";
                }
                else if ($sexo=='F'){
                    $rdoFeminino = "checked";
                }
                $idNivel_usuario = $usuario['idNivel_usuario'];
                
            }
        }
    }

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Informações do Usuario</title>
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
            
            <div id="adicionar">
                <a href="cadastro_user.php">Adicionar Novo Usuário</a>
            </div>
            
           <div id="cabecalho_info">
                    <div class="box_info">
                        Nome:
                    </div>
                    
                    <div class="box_info">
                        E-mail:
                    </div>
                    
                    <div class="box_info">
                        Nível de Usuario:
                    </div>
               
                     <div class="box_info">
                        Opções:
                    </div>
                    
                </div>
            
            <div id="box_conteudo_info">
                 
                
                <!-- Esta lógica irá trazer as informações diretamente do BD -->
                    <?php
                        
                        $sql="select * from tbl_usuario order by idUsuario desc";
                        
                        $informacoes = mysql_query($sql);
                
                        $contador=0;
                
                        //Convertendo eu uma array de dados trazendo do BD
                        while($usuario=mysql_fetch_array($informacoes))
                        
                        {
                            
                    ?>
                
                
                
                <div id="box_usuarios_organiza">
                    <div id="crud_user">
                         <div class="box_info">
                            <?php echo ($usuario['nome']) ?>
                        </div>

                        <div class="box_info">
                           <?php echo ($usuario['email']) ?>
                        </div>

                        <div class="box_info">
                            <?php echo ($usuario['idNivel_usuario']) ?>
                        </div>

                         <div class="box_info">
                            <div class="opcoes_info">
                                <a href="informacao_user.php?modo=consultar&id=<?php echo($usuario['idUsuario'])?>">
                                 <img src="imagens/edit48.png" class="img_opcoes">
                                </a>
                            </div>
                             
                            <div class="opcoes_info">
                                <!--1°Passo-->
                                <!--Indicando um caminho para onde meus dados/tela/página vai, mostrando na tela o que está sendo feito-->
                                <!--Quando clicarmos na imagem excluir, irá mandar os dados para a url-->
                                <!--Pegando o select que eu fiz ali em cima, do banco com o idUsuario e jogando na tela-->
                                <a href="informacao_user.php?modo=excluir&id=<?php echo($usuario['idUsuario']) ?>">
                                <img src="imagens/excluir48.png" class="img_opcoes">
                                </a>
                            </div>

                            <div class="opcoes_info">
                            </div>
                        </div>

                    </div>
                </div> 
                
                <!-- Esse contador, irá adicionar sempre uma linha cada vez
                que alguem adicionar alguma informacao no cadastro de Usuario-->
                <?php 
                    $contador+=1;
                    }
                ?>
                
            </div>
            
             <div id="box_rodape">
                <p>Desenvolvido por Barbara Siqueira</p>
            </div>
            
        </div>
    </body>
    
</html>