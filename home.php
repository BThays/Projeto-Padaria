<!doctype html> <!-- HTML5 -->
<html lang="pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylehome.css">
        
        <script src="js/jquery-3.2.1.min.js"></script> <!-- Script para o slider chamando ações -->
        <script  src="js/jquery.cycle.all.js"></script>
        <script> // Código Js 
            $(function () {
               $("#conteudo_slider ul"). cycle ({
                fx:'fade', //Efeieto
                speed:2000, //Velocidade que vai trocar de slide, 2000 = 2seg e                     assim por diante
                timeout:7000, //Tempo de demora para trocar
                prev: "#botao_voltar",
                next:"#botao_avancar",
                
            })
               })
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
        
        <div id="main"> <!-- Caixa Principal -->
            <section id="box_slider"> <!-- 1° caixa slider-->  
                 <div id="conteudo_slider">
                    <ul>
                        <li>
                            <img src="imagens/slider.jpg" width="1600" height="400" alt="Padoka Hill Valley"> <!--Imagens tamanho 1373 x 635 -->
                        </li>
                        <li>
                            <img src="imagens/loja3.jpg" width="1600" height="400" alt="Padoka Hill Valley">
                        </li>
                         <li>
                            <img src="imagens/loja.jpeg" width="1600" height="400" alt="Padoka Hill Valley">
                        </li>
                         <li>
                            <img src="imagens/footer4.jpeg" width="1600" height="400" alt="Padoka Hill Valley">
                        </li>
                    </ul>
                </div>
                
                 <div id="botao_voltar">
                      <img src="imagens/seta2.png" alt="Seta Direita"> <!-- Botao 1 slider -->
                  </div>
                   
                    <div id="botao_avancar">
                        <img src="imagens/seta1.png" alt="Seta Esquerda"> <!-- Botao 2 slider -->
                    </div>
                
            </section>
        
            <section id="box_menu_segundario"> <!-- 2° caixa menu secundario lado direito-->
               
               <div id="transp_menu_secundario">
                   
               </div>
               
               <div id="elemento_transp">
                    <div class="menu_secundario">
                        <a href="#">Item 1</a>
                    </div>
                     <div class="menu_secundario">
                         <a href="#">Item 2</a>
                    </div>
                </div>
            </section>
            
            <section id="box_conteudo"> <!-- 3° caixa lado esquerdo-->
                <div class="box_organizadora"> <!-- Caixa para organizar os elemntos dos produtos-->
                    <div class="box_produto"> <!-- Caixa para apanas colocar os produtos-->
                        <div class="produto_foto">  <!-- Box Foto do produto linha 1 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>
                    <div class="box_produto">
                        <div class="produto_foto"> <!-- Box Foto do produto linha 1 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>
                    <div class="box_produto">
                        <div class="produto_foto"> <!-- Box Foto do produto linha 1 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div class="box_organizadora"> <!-- Caixa para organizar os elemntos dos produtos-->
                    <div class="box_produto">
                        <div class="produto_foto"> <!-- Box Foto do produto linha 2 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>
                    <div class="box_produto">
                        <div class="produto_foto"> <!-- Box Foto do produto linha 2 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                            <a href="#">Detalhes</a>
                        </div>
                    </div>
                    <div class="box_produto">
                        <div class="produto_foto"> <!-- Box Foto do produto linha 2 -->
                        </div>
                        <div class="nome">
                            Nome:
                        </div>
                        <div class="descricao">
                            Descrição:
                        </div>
                        <div class="preco">
                            Preço:
                        </div>
                        <div class="detalhes">
                           <a href="#">Detalhes</a>
                        </div>
                    </div>
                </div>
                
                <div id="rede_social"> <!-- Box Rede social -->
                    <div id="box_facebook"> <!-- Box Rede social facebook -->
                        
                    </div>
                    <div id="box_google"> <!-- Box Rede social google-->
                        
                    </div>
                    <div id="box_instagram"> <!-- Box Rede social instagram -->
                        
                    </div>
                
                </div>
            </section>
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
