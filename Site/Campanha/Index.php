<!DOCTYPE html>
<html lang="pt-br">

 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="História, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Campanha</title>
   <link rel="shortcut icon" href="../Ícone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Campanha_Estilo.css">
   <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
 </head>

 <body>
   <div class="container">
   <div class="column active">
   <div class="content">
   <h1>1</h1>
   <div class="box">
   <a href="Romanos.html"> <h2>Romanos</h2> </a>
   <a href="Romanos.html"><p>Saiba mais sobre as tropas romanas!</p> </a>
   </a>
   </div>
   </div>
   <div class="bg bg1"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>2</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Hunos"><h2>Hunos</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Hunos">Saiba mais sobre os Hunos!</a></p>
   </div>
   </div>
   <div class="bg bg2"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>3</h1>
   <div class="box">
   <a href="Maquinário.html"><h2>Maquinario</h2> </a>
   <p><a href="Maquinário.html">Saiba mais sobre as maquinas de guerra!</a></p>
   </div>
   </div>
   <div class="bg bg3"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>15</h1>
   <div class="box">
   <a href="https://youtu.be/9H_8dskVsIg"><h2>A Batalha</h2></a>
   <p><a href="https://youtu.be/9H_8dskVsIg"> A batalha dos Campos Catalunicos</a></p>
   </div>
   </div>
   <div class="bg bg4">
    <a href="#"> </a>
   </div>
   </div>
   </div>
   <script type="text/javascript">
		$(document).on('mouseover', '.container .column', function(){
			$(this).addClass('active').siblings().removeClass('active')
		})
   </script>
 </body>

</html>