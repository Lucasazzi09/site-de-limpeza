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
    <title>Diaristas</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php"><h2>I CLEAN</h2></a>
            <div class="bar-mobile"><a class="click"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <a class="close"><i class="fa fa-times" aria-hidden="true"></i></a></div>
            </div>
            <h3>Diaristas:</h3>
            <div class="line-text">
                <div style="width: 120px;"></div>
                </div>


            <nav class="menu-desktop">
            <ul>
                 <li>
                     <a href="index.php">Home</a>
                 </li>

                <li class="selected">
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

        <form>
            <fieldset>
            <h3>Criar conta</h3> <br><br>
            <input type="text" name="nome" placeholder="Digite o seu nome...">
            <input type="text" name="email" placeholder="Digite o seu e-mail...">
            <input type="password" name="password" placeholder="Senha:">


           </div>
              <h2>Qual sua cidade?</h2>
              <div class="input">
           <div>
               <input type="radio" name="cidade" value="Guararapes"><span>Guararapes</span>
           </div>
           <div>
            <input type="radio" name="cidade" value="Araçatuba"><span>Araçatuba</span>
           </div>
           <div>
            <input type="radio" name="cidade" value="Penápolis"><span>Birigui</span>
           </div>
        </div>
</form>


  <div class="w100">
     <h2>Escolha a data:</h2>
        <select name="nascimento-dia" class="nascimento">
      <?php  for($i = 1; $i <= 31; $i++){

         ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
     <?php } ?>

        </select><!--nascimento-->

        <select name="mes" class="meses">
            <option value="">jan</option>
            <option value="">Fev</option>
            <option value="">Mar</option>
            <option value="">Abril</option>
            <option value="">Maio</option>
            <option value="">jun</option>
            <option value="">jul</option>
            <option value="">Agosto</option>
            <option value="">Set</option>
            <option value="">Out</option>
            <option value="">Nov</option>
            <option value="">Dez</option>
        </select><!--mes-->
        <div class="clear"></div>
        <div class="btn">
    <a href="">Enviar!</a>
</div>
        </fieldset>


        <div class="escolha"><h2>Escolha sua profissional</h2></div>
        <div class="i">
            <img src="https://img.icons8.com/ios-filled/50/000000/expand-arrow--v1.png"/>
        </div>

        <div class="center__infos">
            <div class="card-single2">
              <img src="./imagens diaristas/faxineira.jpg" alt="" title="">
              <div class="clear"></div>
                <div class="btn2">
                    <a href="contato.php">Saiba mais</a>
                </div>
           </div>

           <div class="card-single2">
              <img src="./imagens diaristas/lavadeira.jpg" alt="" title="">
            <div class="clear"></div>
               <div class="btn2">
                   <a href="contato.php">Saiba mais</a>
               </div>
           </div>

           <div class="card-single2">
              <img src="./imagens diaristas/passadeira.jpg" alt="" title="">
            <div class="clear"></div>
               <div class="btn2">
                   <a href="contato.php">Saiba mais</a>
               </div>
           </div>

           <div class="card-single2">
              <img src="./imagens diaristas/area-de-atuacao-como-personal-organizer-1.jpg" alt="" title="">
            <div class="clear"></div>
               <div class="btn2">
                   <a href="contato.php">Saiba mais</a>
               </div>
           </div>

           <div class="card-single2">
              <img src="./imagens diaristas/grupocuidar.jpg" alt="" title="">
            <div class="clear"></div>
               <div class="btn2">
                   <a href="contato.php">Saiba mais</a>
               </div>
           </div>

           <div class="card-single2">
              <img src="./imagens diaristas/quando-terceirizar-limpeza-para-empresa-4-e1590278682893.jpg" alt="" title="">
            <div class="clear"></div>
               <div class="btn2">
            <a href="contato.php">Saiba mais</a>
               </div>
           </div>
        </div>
        <div class="clear"></div>

        <div class="icon-initial">
    <a href="diaristas.php"><img src="https://img.icons8.com/ios-filled/50/000000/long-arrow-up.png"/></a>
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
