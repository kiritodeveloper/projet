<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@c - @yield('title')</title>
        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <p class="bold text-left">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                   </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="inicio">INICIO</a></li>

                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nuestros trabajos y areas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="trabajo">desarrollo de software</a></li>
                                 
                            </ul>
                      
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacnos</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <p class="bold text-left">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                   </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="inicio">INICIO</a></li>

                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            nuestros trabajos y areas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="nav-link" href="trabajo">desarrollo de software</a></li>
                            </ul>
                      
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contacnos</a></li>
                    </ul>
                </div>
            </nav>
        </header>


        <!--================Timeline Style : Demo-9 =================-->
<section class="service_solution_area p_100">

<nav>
            <ul>
                <li><a href="indexApp.php">Inicio</a></li>
                <li><a href="rankingView.php">Ranking</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="multimedia.php">Multimedia</a></li>
            </ul>
        </nav>

        <aside>
            <form action="Juego.php" method="GET" name="formNickname"
                id="formNickname">
                Nickname: <input type="text" name="nickname" value="" required><br>
                <input type="submit" value="   Play!!   ">
            </form>
        </aside>

        <section>
            <video width="320" height="180" controls>
                <source src="video/gameplay.mp4" type="video/mp4">
                <source src="video/gameplay.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>

        </section>


   <div class="container"> 
            <script type="text/javascript">
                    window.onload = function() {
                        var game = new Phaser.Game(400, 600, Phaser.AUTO, '', {
                            preload : preload,
                            create : create,
                            update : update
                        });
                        var score = 0;
                        var kill = 0;
                        var sonido;
                        var nickname = "pru";
                        var t;
                        var style;
                        var explosions;
                        var stateText;
                        var scoreString = '';
                        var scoreText;

                        function preload() {
                            game.load.image('sky', 'assets/sky.png');
                            game.load.image('star', 'assets/star.png');
                            game.load.spritesheet('dude', 'assets/dude.png', 32, 48);
                            game.load.spritesheet('kaboom', 'assets/explode.png', 128, 128);
                            game.load.audio('spop', 'assets/pop.mp3');
                        }

                        function create() {
                            
                            game.physics.startSystem(Phaser.Physics.ARCADE);
                            game.add.sprite(0, 0, 'sky');
                            
                            // Añadimos el sprite del jugador en la coordenada (32,game.world.height)
                            player = game.add.sprite(32, game.world.height - 150, 'dude');

                            // Activamos la física al jugador
                            game.physics.arcade.enable(player);
                            // Propiedades de la física: Bote, gravedad y colisiones en el world
                            //player.body.bounce.y = 0;
                            //player.body.gravity.y = 0;
                            player.body.collideWorldBounds = true;
                            // Our two animations, walking left and right.
                            player.animations.add('left', [ 0, 1, 2, 3 ], 10, true);
                            player.animations.add('right', [ 5, 6, 7, 8 ], 10, true);

                            stars = game.add.group();
                            stars.enableBody = true;
                            // Here we'll create 12 of them evenly spaced apart
                            explosions = game.add.group();
                            
                            game.time.events.loop(Phaser.Timer.SECOND*1,createStar, this);
                            game.time.events.loop(Phaser.Timer.SECOND*0.5,sumScore, this);




                            //  The score
                            scoreString = 'Score : ';
                            scoreText = game.add.text(10, 10, scoreString + score, { font: '34px Arial', fill: '#fff' });

                            //  Text
                            stateText = game.add.text(game.world.centerX,game.world.centerY,' ', { font: '30px Arial', fill: '#fff' });
                            stateText.anchor.setTo(0.5, 0.5);
                            stateText.visible = false;

                            sonido = game.add.audio('spop');
                            
                            game.camera.follow(player);

                            style = { font: "65px Arial", fill: "#ff0044", align: "center" };
                            t = game.add.text(game.world.centerX-350, 0, score, style);



                        }

                        function createStar() {

                            //  A bouncey ball sprite just to visually see what's going on.
                            
                            var star = stars.create(Math.random()*400, 0, 'star');

                            game.physics.enable(star, Phaser.Physics.ARCADE);

                            star.body.bounce.y = 0.9;

                            star.body.velocity.y = 100;


                            
                        }

                        function createExplosion(player){

                             var explosion = explosions.create(player.body.x,player.body.y, 'kaboom');


                            
                        }
                    
                        function update() {
                            // Collide the player and the stars with the platforms
                           
                            game.physics.arcade.overlap(player, stars, enemyHitsPlayer, null,
                                    this);

                                            

                            cursors = game.input.keyboard.createCursorKeys();
                            // Reset the players velocity (movement)
                            player.body.velocity.y = 0;
                            player.body.velocity.x = 0;
                            if (cursors.left.isDown) {
                                // Move to the left
                                player.body.velocity.x -= 150;
                                player.animations.play('left');
                            } else if (cursors.right.isDown) {
                                // Move to the right
                                player.body.velocity.x += 150;
                                player.animations.play('right');
                            } else {
                                // Stand still
                                player.animations.stop();
                                player.frame = 4;
                            }
                            if (cursors.up.isDown) {
                                // Move to the right
                                player.body.velocity.y -= 150;
                                player.animations.stop();
                            } else if (cursors.down.isDown) {
                                // Move to the right
                                player.body.velocity.y += 150;
                                player.animations.stop();
                            } else {
                                // Stand still
                                player.animations.stop();
                                player.frame = 4;
                            }
                            
                            // Allow the player to jump if they are touching the ground.
                            if (cursors.up.isDown && player.body.touching.down) {
                                player.body.velocity.y = -500;
                            }

                           

                            

                        }
                        //function collectStar(player, star) {
                            //sonido.play();
                            //star.kill();
                            // Sumamos 10 a la puntuación

                            //score += 10;
                            //scoreText.text = 'Score: ' + score;

                              //Campio los valores antes de que actualize
                        //}
                        
                        function sumScore(){
                            score++;         //this value will hold the score of every player. I need to pass it to the leader board using php. How?
                            scoreText.text = scoreString + score;
                        }

                        function endGame(){
                                finalScore = score;

                                submitScore("pru", finalScore);
                            }

                        function enemyHitsPlayer (player, star) {
                            
                            star.kill();



                            //  And create an explosion :)
                            createExplosion(player);

                            // When the player dies
                                scoreText.visible = false;
                                player.kill();
                                stars.callAll('kill');

                                endGame();

                                stateText.text=" GAME OVER \n Click to restart \n Score: "+finalScore;
                                stateText.visible = true;

                                

                                //the "click to restart" handler
                                
                            

                        }

                    function restart () {
                        score=-1;
                        //  A new level starts
                        
                        //resets the life count

                        //  And brings the aliens back from the dead :)
                        stars.removeAll();
                        createStar();
                        
                        explosions.removeAll();
                        //revives the player
                        player.revive();
                        //hides the text
                        stateText.visible = false;
                        scoreText.visible = true;

                    }
                        function submitScore(username, score) {

                            sonido.play();
                    

                            var data="nicknameNew="+nickname+"&scoreNew="+score;
                            
                            var request = new XMLHttpRequest();
                            request.open('POST', '../Controller/GameAdd.php', true);
                            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                            request.onload = function() {
                              if (request.status >= 200 && request.status < 400){
                                    game.input.onTap.addOnce(restart,this);
                                    console.log(data);
                              } else {
                                // We reached our target server, but it returned an error

                              }
                            };  
                            request.send(data);
                        }


                                    

                    };
            </script>
        </div>

</section>


        


        <footer class="footr_area">

            <div class="footer_copyright">
                <div class="container">
                    <div class="float-sm-left">
                        <h5>
                            Empresa &copy;<script>document.write(new Date().getFullYear());</script> Todos Los Derechos Reservados <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://macsoftins.com" target="_blank">M@c-Softins</a>
                        </h5>
                    </div>
                   
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
            <script type="text/javascript">
                  jQuery(document).ready(function($) {
 
                        $('#myCarousel').carousel({
                                interval: 5000
                        });
                 
                        //Handles the carousel thumbnails
                        $('[id^=carousel-selector-]').click(function () {
                        var id_selector = $(this).attr("id");
                        try {
                            var id = /-(\d+)$/.exec(id_selector)[1];
                            console.log(id_selector, id);
                            jQuery('#myCarousel').carousel(parseInt(id));
                        } catch (e) {
                            console.log('Regex failed!', e);
                        }
                    });
                        // When the carousel slides, auto update the text
                        $('#myCarousel').on('slid.bs.carousel', function (e) {
                                 var id = $('.item.active').data('slide-number');
                                $('#carousel-text').html($('#slide-content-'+id).html());
                        });
                });
            </script>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/phaser.js"></script>
        <script src="vendors/circle-bar/circle-progress.min.js"></script>
        <script src="vendors/circle-bar/plugins.js"></script>
        
        <script src="js/circle-active.js"></script>
        <script src="js/theme.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </body>
</html>