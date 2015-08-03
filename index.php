﻿<!DOCTYPE html>
<html>
<head>
  <!--Import materialize.css-->

  <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/font.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Carta a los Reyes Magos</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Como funciona</a></li>
                <!--<li><a href="faq.html">faq</a></li>-->
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="como.html">Como funciona</a></li>
            </ul>
        </div>
    </nav>

    <div class="top active">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1>Carta a los Reyes Magos</h1>
                    <h2 class="letter">¡Elige a tu rey preferido!</h2>
                    <ul class="kings">
                        <li class="standby">
                            <a href="#">
                                <figure>
                                    <span></span>
                                    <img src="img/melchor.png" alt="Melchor" />
                                    <figcaption>Melchor</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="standby">
                            <a href="#">
                                <figure>
                                    <span></span>
                                    <img src="img/gaspar.png" alt="Gaspar" />
                                    <figcaption>Gaspar</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="standby">
                            <a href="#">
                                <figure>
                                    <span></span>
                                    <img src="img/baltasar.png" alt="Baltasar" />
                                    <figcaption>Baltasar</figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                    <p class="letter first">(Primero elige a tu rey preferido y luego escribe tu carta)</p>
                </div>
            </div>
        </div>
    </div>
    <!--break-->

    <div class="top final inactive">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <img src="img/camello.png" alt="Camello" />
                    <h2 class="letter">¡Hemos enviado tu carta a los Reyes Magos!</h2>
                    <p>No olvides dejarme un poco de leche porque los Reyes están gorditos ¡y pesan mucho!</p>
                    <p>¡GRACIAS Y FELIZ NAVIDAD!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row letter noactive">
        <form class="col s10 m10 l6" style="display: block; margin: 0 auto; float: none;" name="mainForm" onsubmit="return validateForm()" action="kings.php" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" class="validate" name="name">
                    <label for="name white-text">Tu nombre</label>
                    <div class="card-panel red accent-1 inactive" id="alert1"><i class="mdi-alert-warning"></i> ¡Oye! ¡Dinos cómo te llamas!</div>
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">El email de Papá o Mamá</label>
                    <div class="card-panel red accent-1 inactive" id="alert2"><i class="mdi-alert-warning"></i> ¡Necesitamos el email de Papá o Mamá!</div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="letter" class="materialize-textarea" name="letter"></textarea>
                    <label for="letter">Escribe tu carta</label>
                    <div class="card-panel red accent-1 inactive" id="alert3"><i class="mdi-alert-warning"></i> ¡No olvides escribir tu carta!</div>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Enviar
                    <i class="material-icons">send</i>
                </button>
            </div>
        </form>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row margin5 margin-10">
                <div class="span12">
                    <!--<a href="http://www.facebook.com/awerest"><img src="img/twitter_icon.png" alt=""></a>
    				<a href="http://www.twitter.com/awerest"><img src="img/facebook_icon.png" alt=""></a>
    				<a href="http://www.dribbble.com/awerest"><img src="img/dribbble_icon.png" alt=""></a>
    				<a href="http://www.instagram.com/awerest"><img src="img/instagram_icon.png" alt=""></a>
    				<a href="http://www.pinterest.com/awerest"><img src="img/pinterest_icon.png" alt=""></a>-->
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Cómo funciona</h4>
            <p>¡Sencillo! Escribe tu carta a los Reyes Magos de Oriente estas navidades. Melchor, Gaspar y Baltasar están deseando saber cómo te has portado y los regalos y deseos que quieres para ti y tu familia.</p>
            <p>¡Recuerda poner el email de papá, mamá o alguien de tu familia!</p>
        </div>

        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">¡Vale!</a>
        </div>
    </div>
</body>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>x

<script>
    $(".button-collapse").sideNav();

    $('.standby').on('click', function(e) {
        $('.letter').toggleClass("letter active"); //you can list several class names
        e.preventDefault();
    });

    function changeClass() {
        $('#king').removeClass('standby');
        $(this).addClass('active');
    }

    $('ul.kings li').click(function () {
        $(this).siblings().attr('class', 'inactive').end().toggleClass('inactive active');
    });

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });

    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
</script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65738773-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html></html>
