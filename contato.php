<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Lucas Azzi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="limpeza, casa, diaristas, faxineira, passadeira, lavar roupas, lavar casa">
    <meta name="description" content="Limpeza de casa, hoteis, diaristas">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contato:</title>
</head>
<body>
    <header>
        <div class="container">
        <div class="logo">
                <a href="index.php"><h2>I CLEAN</h2></a>
            <div class="bar-mobile"><a class="click"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a></div>
            </div>
            <h3>Contato:</h3>
            <div class="line-text">
                <div style="width: 120px;"></div>
                </div>


            <nav class="menu-desktop">
            <ul>
                 <li>
                     <a href="index.php">Home</a>
                 </li>

                <li class="">
                    <!--fazer um link dessas paginas ao clicar no botao dos serviços-->
                    <a href="diaristas.php">Diaristas</a>
                 </li>

                 <li class="selected">
                    <a href="contato.php">Contato</a>
                 </li>
            </ul>
         </nav><!--menu-desktop-->
         <div class="clear"></div>
       </div><!--container-->
        </header>

        <form>
            <h3>Entre em contato conosco que responderemos o mais breve possivel!</h3> <br><br>
            <input type="text" name="nome" placeholder="Digite o seu nome...">
            <input type="text" name="email" placeholder="Digite o seu e-mail...">
</form>

<div class="texta">
<textarea name="texta" id="" cols="30" rows="10">Digite um texto...</textarea>
</div>
<div class="btn">
    <a href="">Enviar!</a>
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
