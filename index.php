<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Lucas Azzi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="limpeza, casa, diaristas, faxineira, passadeira, lavar roupas, lavar casa">
    <meta name="description" content="Limpeza de casa, hoteis, diaristas">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>I CLEAN</title>
</head>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="index.php"><h2>I CLEAN</h2></a>
            <div class="bar-mobile"><a class="click"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a></div>
        </div>
        <h3>Serviços:</h3>
        <div class="line-text">
            <div style="width: 120px;"></div>
            </div>
        <nav class="menu-desktop">
        <ul>
            <li class="">
                <!--fazer um link dessas paginas ao clicar no botao dos serviços-->
                <a href="diaristas.php">Diaristas</a>
             </li>
             <li class="">
                <a href="contato.php">Contato</a>
             </li>
        </ul>
     </nav><!--menu-desktop-->
     <div class="clear"></div>
   </div><!--container-->


    </header>
    <div class="center__infos">
    <div class="card-single">
      <img src="./imagens/faxineira.jpg" alt="" title="">
      <h3>Faxineira</h3>
      <p> É a pessoa que realiza trabalhos domésticos como a faxina, que é a limpeza da casa e inclui varrer, tirar o pó, lavar, retirar o lixo e outras.</p>
      <div class="clear"></div>
        <div class="btn">
            <a href="diaristas.php">Contrate!</a>
        </div>
   </div>

   <div class="card-single">
      <img src="./imagens/lavadeira.jpg" alt="" title="">
    <h3>Lavadeira</h3>
    <p> Lavar e secar peças de vestiário, roupas de cama e mesa e outras, utilizando processos manuais e/ou mecânicos, para eliminar sujeiras e dar-lhes boa aparência.</p>
    <div class="clear"></div>
       <div class="btn">
           <a href="diaristas.php">Contrate!</a>
       </div>
   </div>

   <div class="card-single">
      <img src="./imagens/passadeira.jpg" alt="" title="">
    <h3>Passadeira</h3>
    <p>Esse profissional é responsável por aplicar a técnica necessária (temperatura ideal em relação ao tecido) para desamassar diversos tipos de roupas. É essencial para devolver a forma original do tecido, mantendo a durabilidade da peça e prevenindo acidentes</p>
    <div class="clear"></div>
       <div class="btn">
           <a href="diaristas.php">Contrate!</a>
       </div>
   </div>

   <div class="card-single">
      <img src="./imagens/personal organize.jpg" alt="" title="">
    <h3>Personal organaize</h3>
    <p>O Personal Organizer (ou também “consultor de organização”) é o profissional que utiliza técnicas fundamentadas na necessidade e na realidade de cada cliente para organizar qualquer espaço que precise de arrumação. Com isso, a rotina de quem adquire esse serviço se torna mais funcional, prática e dinâmica.</p>
    <div class="clear"></div>
       <div class="btn">
           <a href="diaristas.php">Contrate!</a>
       </div>
   </div>

   <div class="card-single">
      <img src="./imagens/baba.jpg" alt="" title="">
    <h3>Babá</h3>
    <p>Cuida de bebês e crianças, zelando pelo bem-estar, saúde, alimentação, higiene pessoal, educação, cultura, recreação e lazer. </p>
    <div class="clear"></div>
       <div class="btn">
           <a href="diaristas.php">Contrate!</a>
       </div>
   </div>

   <div class="card-single">
      <img src="./imagens/limpeza-pos-obra.jpg" alt="" title="">
    <h3>Limpeza pós obra</h3>
    <p>Consiste em uma limpeza profunda do local, com maquinário, produtos e utensílios específicos para remoção de respingos ou manchas de tinta, rejunte, cimento, poeira ou qualquer outro tipo de sujeira.</p>
    <div class="clear"></div>
       <div class="btn">
    <a href="diaristas.php">Contrate!</a>
       </div>
   </div>
</div>
<div class="clear"></div>

<div class="icon-initial">
    <a href="index.php"><img src="https://img.icons8.com/ios-filled/50/000000/long-arrow-up.png"/></a>
</div>

<footer>
    <div class="footer1">
        <div class="icons">
            <h2>Entre em contato conosco.</h2>
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v6.png"/>
            <img src="https://img.icons8.com/color/48/000000/facebook.png"/>
        </div>
        <div class="des"><a target="blank" href="https://links-page.vercel.app/"><h3>Desenvolvido por Lucas Azzi</h3></a></div>
    </div>
</footer>

<!--Script--->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--fontawesome-->
<script src="https://use.fontawesome.com/2168dd8823.js"></script>
<script>
    $(function (){
      $('.click').click(function (){
          $('.click').css('display','none');
          $('.menu-desktop').fadeIn();
          $('.close').fadeIn();

          $('.close').click(function (){
              if ($('.menu-desktop').is(':visible')){
                  $('.close').css('display','none');
                  $('.menu-desktop').fadeOut();
                  $('.click').fadeIn();

              }
          })

      })
    });
</script>
</body>
</html>
