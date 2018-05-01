<?php
        $nome="";
        $telefone="";
        $celular="";
        $email="";
        $homePage="";
        $linkFace="";
        $opiniao="";
        $infoProduto="";
        $sexo="";
        $profissao=""; 
       
        

    if($conexao = mysql_connect('localhost', 'root', 'bcd127')){
        mysql_select_db('db_padaria'); 
    }else{
        echo('ERRO AO CONECTAR!!!');
    } 


    if(isset($_GET['btnenviar'])){
        
        if($_GET['btnenviar']){
            
        
            
        $nome = $_GET['txtnome'];
        $telefone = $_GET['txttelefone'];
        $celular = $_GET['txtcelular'];
        $email = $_GET['txtemail'];
        $homePage = $_GET['txthomePage'];
        $linkFace = $_GET['txtlinkFace'];
        $opiniao = $_GET['txtopiniao'];
        $infoProduto = $_GET['txtinfoProduto'];
        $sexo = $_GET['rdosexo'];
        $profissao = $_GET['txtprofissao'];  
        
        
        $sql ="insert into tbl_fale_conosco (nome, telefone, celular, email, homePage, linkFacebook, opiniao, infoProduto, sexo, profissao)
        values('".$nome."', '".$telefone."', '".$celular."', '".$email."', '".$homePage."', '".$linkFace."', '".$opiniao."', '".$infoProduto."', '".$sexo."', '".$profissao."')";
        
        }
      
        mysql_query($sql);
        header('location:faleconosco.php');
    
    }

?>


<!doctype html> <!-- HTML5 -->
<html lang="pt-br">
    <head>
        <title>Fale Conosco</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylehome.css">
        <script>
            function validar (caracter, blockType)
            {
                caracter.target.style="background-color:white"
                if(window.event)
                {
                    var letra = caracter.charCode; 
                }else{
                    var letra = caracter.which;
                }
                    
                
                if(blockType == 'caracter'){
                    if(letra < 48 || letra > 57){
                        if(letra!=8 && letra!=32){
                            caracter.target.style="background-color:#FF0000"
                            return false;
                        }
                    }
                }else if (blockType == 'number'){
                    if(letra >= 48 && letra <=57){
                        caracter.target.style="background-color:#FF0000"
                        return false;
                    }
                }
                
            }
        
        
        </script>
        
    </head>
    <body>
        <header> <!-- Cabeçalho Fixo na página -->
            <div id="box_transparencia"> <!-- Div do tamanho da header, para ajustar SOMENTE a transparencia dessa div, sem que afete os outros elementos dentro da mesma -->
            </div>
            
            
            <div id="transp_element"> <!--Div que irá segurar todos os elementos abaixo dentro dela, para que seja possivel encaixar esta mesma div junto da outra div transparente de cima, para que os elementos não sejam afetados pela transparencia/opacity-->
            
            
            <div id="box_header">
                <div id="box_logo"> <!-- Box Logo -->
                </div>
                
                    <div id="box_menu">  <!-- Box Menu -->
                        <div class="item_menu">  <!-- Box itens do menu -->
                            <a href="home.php">Home</a>
                        </div>
                         <div class="item_menu">
                             <a href="historia.php">História</a>
                        </div>
                         <div class="item_menu">
                             <a href="servicos.php">Serviços</a>
                        </div>
                         <div class="item_menu">
                             <a href="produtomes.php">Especial</a>
                        </div>
                         <div class="item_menu">
                             <a href="promocoes.php">Promoções</a>
                        </div>
                         <div class="item_menu">
                             <a href="lojas.php">Lojas</a>
                        </div>
                         <div class="item_menu">
                             <a href="faleconosco.php">Fale Conosco</a>
                        </div>
                    </div>

                    <div id="box_cadastro">  <!-- Box Cadastro-->
                       <div class="form">
                            <form name="frmfaleconosco" method="GET" action="faleconosco.php">
                                <div id="box_usuario">  <!-- Box Usuario -->
                                    Usuário: <br>

                                    <input class="usuario_input" type="text" size="30" placeholder="Insira seu nome de Usuário">

                                </div>
                                <div id="box_senha">  <!-- Box Senha -->
                                    Senha:

                                     <input class="usuario_input" type="text" size="30" placeholder="Insira sua senha de Usuário">
                                </div>

                                <div id="box_botao"> <!-- Box Botão -->
                                    <input id="input_botao" type="submit" value="Ok">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="alinhar"> <!-- Esta caixa serve para "alinhar" a main e o header, pois estou usando position fixed no header, o que acaba tendo um "problema" -->
        </div>
        
         
          
        
            
            <section id="box_conteudo_conosco"> <!-- 3° caixa lado esquerdo-->
               
                <div id="fale_conosco">
                   <div id="titulo_dados">Preencha suas informações</div>
                   
                    <div class="form_fale_conosco">
                        <form name="frmfaleconosco" method="get" action="faleconosco.php">
                            <div class="box_dados">  <!-- Box Nome-->
                                <div class="organizadora_dados">Nome:</div>

                                <input class="dados_input" type="text" size="30" placeholder="Informe seu Nome e Sobrenome" name="txtnome" required onkeypress="return validar (event, 'number')">

                            </div>
                            <div class="box_dados">  <!-- Box Telefone -->
                               <div class="organizadora_dados">Telefone:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe um Telefone" name="txttelefone" onkeypress="return validar(event, 'caracter')">
                            </div>
                            
                             <div class="box_dados">  <!-- Box Celular -->
                                <div class="organizadora_dados">Celular:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe um Celular" name="txtcelular" required onkeypress="return validar(event, 'caracter')">
                            </div>
                            
                             <div class="box_dados">  <!-- Box E-mail -->
                               <div class="organizadora_dados">E-mail:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe um E-mail" name="txtemail" required>
                            </div>
                            
                             <div class="box_dados">  <!-- Box Home page-->
                                <div class="organizadora_dados">Home Page:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe uma Home Page" name="txthomePage">
                            </div>
                            
                             <div class="box_dados">  <!-- Box Link no Facebook -->
                                <div class="organizadora_dados">Link do Facebook:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe um link do Facebook" name="txtlinkFace">
                            </div>
                            
                             <div class="box_dados">  <!-- Box Sugestoes/Criticas-->
                                <div class="organizadora_dados">Sugestoes/Criticas:</div>

                                 <textarea cols="5" rows="3" name="txtopiniao"></textarea>
                            </div>
                            
                             <div class="box_dados">  <!-- Box Informações de Produtos-->
                                <div class="organizadora_dados">Informações do Produto:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe dados do Produto" name="txtinfoProduto" >
                            </div>
                            
                            <div class="box_dados"> <!-- Box Sexo-->
                                <div class="organizadora_dados">Sexo:</div>

                                    <input  class="input_radio" type="radio" name="rdosexo" value="F" required>Feminino


                                    <input  class="input_radio"  type="radio" name="rdosexo" value="M" required>Masculino


                            </div>
                            
                             <div class="box_dados">  <!-- Box Profissão -->
                               <div class="organizadora_dados">Profissão:</div>

                                 <input class="dados_input" type="text" size="30" placeholder="Informe Sua profissão" name="txtprofissao" required onkeypress="return validar (event, 'number')">
                            </div>

                            <div class="box_dados"> <!-- Box Botão -->
                                <input id="input_botao_dados" type="submit" value="Enviar" name="btnenviar">
                            </div>
                        </form>
                    </div>
                </div>
               
            </section>
        
        <footer> <!-- Rodapé -->
            <div id="box_transparencia_footer"> <!-- Div do tamanho do footer, para ajustar SOMENTE a transparencia dessa div, sem que afete os outros elementos dentro da mesma -->
            </div>
            
          <div id="transp_footer">
                
                <div id="elementosFooter">

                    <div class="box_footer">
                        <div id="logo_footer">
                            <img src="imagens/logohill.jpg" style="width:100%" alt=" Logo Padoka Hill Valley">  
                        </div>
                    </div>

                    <div class="box_footer">
                        <div class="footer_info">
                            <h2 class="title_footer_info">Horários</h2>
                            <p class="text_footer_info">Segunda à Sexta</p>
                            <p class="text_footer_info">06h00 ÀS 19h00</p>
                            <p class="text_footer_info">Sábados E Domingos</p>
                            <p class="text_footer_info">08h00 ÀS 19h00</p>
                            <p class="text_footer_info">Feriados</p>
                            <p class="text_footer_info">08h00 ÀS 16h00</p>
                        </div>
                    </div>

                   <div class="box_footer">
                        <div class="footer_info">
                            <h2 class="title_footer_info">Contato</h2>

                            <div id="icon_tel"><img src="imagens/telephone.png" alt=" Icone Telefone"></div> 
                            <div id="tel_footer"> 55 11 8742-9865 </div> 

                            <div id="icon_email"><img src="imagens/email.png" alt="Icone E-mail"></div> 
                            <div id="email_footer">padokavill_halley@gmail.com</div>
                            <div id="aqui_tem">
                               <h3>Aqui tem!</h3>
                            </div>
                        </div>
                         <p id="direitos">Copyright © 2018 Padoka Hill Valley - Todos os direitos reservados</p>
                    </div>
              </div>
            </div>
        </footer>
    </body>  
</html>