<!doctype html> <!-- HTML5 -->
<html lang="pt-br">
    <head>
        <title>Serviços</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylehome.css">
        
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
                             <a href="produtomes.php">Especial </a>
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
                            <form>
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
        
        <div id="box_leitura">
            
        </div>
        
        <div id="leitura_descricao">
          <div class="texto_servico">
                Ambiente Leitura!
                <p>Lorem ipsum sit habitant volutpat cursus ut id curae pellentesque, taciti suscipit nibh gravida eget litora sagittis platea, curabitur hendrerit ornare turpis felis primis placerat ullamcorper. scelerisque aenean sociosqu venenatis luctus viverra facilisis nibh consequat massa ut arcu dui, eu aliquet potenti eu quisque est faucibus sagittis</p>
          </div>
        </div>
        
        
        <div id="box_tecnologia">
            
        </div>
        
         <div id="tecnologia_descricao">
            <div class="texto_servico">
                Ambiente Retro!
                <p>Lorem ipsum sit habitant volutpat cursus ut id curae pellentesque, taciti suscipit nibh gravida eget litora sagittis platea, curabitur hendrerit ornare turpis felis primis placerat ullamcorper. scelerisque aenean sociosqu venenatis luctus viverra facilisis nibh consequat massa ut arcu dui, eu aliquet potenti eu quisque est faucibus sagittis</p>
          </div>
        </div>
        
        <div id="box_retro">
            
        </div>
      
        <div id="retro_descricao">
            <div class="texto_servico">
                Ambiente Tecnologia!
                <p>Lorem ipsum sit habitant volutpat cursus ut id curae pellentesque, taciti suscipit nibh gravida eget litora sagittis platea, curabitur hendrerit ornare turpis felis primis placerat ullamcorper. scelerisque aenean sociosqu venenatis luctus viverra facilisis nibh consequat massa ut arcu dui, eu aliquet potenti eu quisque est faucibus sagittis</p>
          </div>
        </div>
      
      
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