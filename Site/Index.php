<!DOCTYPE html>
<html lang="pt-br">

 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="História, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hystoria: Card Game</title>
   <link rel="shortcut icon" href="Ícone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Página_Inicial_Estilos.css">
   <script type="text/javascript" src="jquery-3.4.1.min.js"></script>

   <script>
   $(function() {
    $('.menu li').click(function(e) {
      e.stopPropagation();
      var sub = $('> ul', this);
      if(sub.length) {
        if(sub.is(':visible')) {
          sub.hide();
          sub.removeClass('open');
        } else {
          $('.menu .open').hide().removeClass('open');
          sub.show();
          sub.parents('ul:not(.menu)').addClass('open').show();
          sub.addClass('open');
        }
      }
     });
    });
   </script>
 </head>

 <body>
   <header>
    <input type="checkbox" id="bt_menu">
   	<label for="bt_menu"><a>&#9776;</a></label>
   	<nav class="menu">
     <ul>
       <li class="espaço"><div></div></li>
       <li class="logo"><a href="."><img class="logo" src="Logo.png"/></a></li>
       <li class="página_inicial"><a href="."><br>Hystoria</a></li>
       <li class="sobre_o_jogo"><a>Sobre o Jogo <font size="3" id="símbolo">▽</font></a>
	     <ul>
           <li class="como_jogar"><a href="Como_Jogar">Como Jogar</a></li>
	       <li class="campanha"><a href="Campanha">Campanha</a></li>
	       <li class="cartas"><a href="Cartas">Cartas</a></li>
	     </ul>
		                                                       </li>
       <li class="notícias"><a href="Notícias">Noticias</a></li>
       <li class="comunidade"><a href="Comunidade">Comunidade</a></li>
       <li class="suporte"><a href="Suporte">Suporte</a></li>
       <li class="user"><a href="Login/Login.php"><img class="user" src="User.png"/></a></li>
       <li class="login"><a href="Login/Login.php"><br>Entrar</a></li>
       <li class="download"><a href="Download">Jogue Agora!</a></li>
     </ul>
   	</nav>
   </header>

   <main>
   <h1>Bem-vindo, guerreiro!</h1>
   </main>
   
   <section>
    <div class="index-news">
     <h1>Noticias Recentes</h1>
     <div class="wrapper"> 
       <article>
          <a href="News1.php">
          <div class="news-img" id="news-img1"></div>
          <h3>1</h3>
          <a href="News1.php" class="leia_mais">LEIA MAIS...</a>
          </a>
       </article>
       <article>
          <a href="News2.php">
          <div class="news-img" id="news-img2"></div>
          <h3>2</h3>
          <a href="News2.php" class="leia_mais">LEIA MAIS...</a>
          </a>
       </article>
       <article>
          <a href="News3.php">
          <div class="news-img" id="news-img3"></div>
          <h3>3</h3>
          <a href="News3.php" class="leia_mais">LEIA MAIS...</a>
          </a>
       </article>
       <article>
          <a href="News4.php">
          <div class="news-img" id="news-img4"></div>
          <h3>4</h3>
          <a href="News4.php" class="leia_mais">LEIA MAIS...</a>
          </a>
       </article>
     </div>
    </div>
   </section>

   <section>
    <div class="slideshow">
      <h1>Screenshots</h1>
      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">

        <div class="slide" id="s1">
        </div>
        <div class="slide" id="s2">
        </div>
        <div class="slide" id="s3">
        </div>
      </div>
   
      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
      </div>
    </div>
   </section>

   <footer>
    <ul>
      <li class="mídias_sociais">Fique Conectado!</li>
    </ul>
    <ul>
      <li class="ícone_facebook"><a href="https://www.facebook.com" target="_blank"><img class="ícone_facebook" src="Ícone_Facebook.png" onmouseover="this.src='Ícone_Facebook_Hover.png';" onmouseout="this.src='Ícone_Facebook.png';"/>
      </a></li>
      <li class="ícone_twitter"><a href="https://twitter.com" target="_blank"><img class="ícone_twitter" src="Ícone_Twitter.png" onmouseover="this.src='Ícone_Twitter_Hover.png';" onmouseout="this.src='Ícone_Twitter.png';"/>
      </a></li>
      <li class="ícone_twitch"><a href="https://www.twitch.tv" target="_blank"><img class="ícone_twitch" src="Ícone_Twitch.png" onmouseover="this.src='Ícone_Twitch_Hover.png';" onmouseout="this.src='Ícone_Twitch.png';"/>
      </a></li>
      <li class="ícone_youtube"><a href="https://www.youtube.com" target="_blank"><img class="ícone_youtube" src="Ícone_Youtube.png" onmouseover="this.src='Ícone_Youtube_Hover.png';" onmouseout="this.src='Ícone_Youtube.png';"/>
      </a></li>
    </ul>
    
    <ul>
      <li class="ícone_unity"><a href="https://www.unity.com" target="_blank"><img class="ícone_unity" src="Ícone_Unity.png" onmouseover="this.src='Ícone_Unity_Hover.png';" onmouseout="this.src='Ícone_Unity.png';"/>
      </a></li>
    </ul>
    <ul>
      <li class="ícone_14_anos"><a href="https://justica.gov.br/seus-direitos/classificacao" target="_blank"><img class="ícone_14_anos" src="Ícone_14_anos.png" onmouseover="this.src='Ícone_14_anos_Hover.png';" onmouseout="this.src='Ícone_14_anos.png';"/></a></li>
    </ul>
    <ul>
      <li class="copyright"><p>© 2019</p> YGGBRASIL SOFTWARE. TODOS OS DIREITOS RESERVADOS.</li>
    </ul>
    <ul class="legal">
      <li class="termos_de_uso"><a href="Termos_de_Uso">Termos de Uso</a></li>
      <li class="política_de_privacidade"><a href="Política_de_Privacidade">Politica de Privacidade</a></li>
      <li class="contato"><a href="Contato">Contato</a></li>
	  </ul>
   </footer>
 </body>

</html>