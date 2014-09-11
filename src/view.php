<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TRON</title>
        
        <link rel="icon" type="image/x-icon" href="favicon" />
        <?php
        echo "<link rel='stylesheet' type='text/css' href='". $this->core->publicPath . "css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' type='text/css' href='". $this->core->publicPath . "css/tron.css'>";
        ?>
    </head>
    <body>
        <div id="page-wrapper">
            <h1>Tron v2</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 border-right">
                    <h4>Paramétres : </h4>
                    <div class='gameStyle'>
                        <label for='backgroundSize'>Taille du terrain</label> <input type="integer" name='backgroundSize' placeholder='taille' size='3'></input><br/>
                        <i style="font-size:0.7em">max 48<br/></i>
                    </div>
                    
                    <div class='gameStyle'>
                        <label for='bikesNumber'>Nb de motos </label> <input type="integer" name='bikesNumber' placeholder='motos' size='3'></input><br/>
                        <i style="font-size:0.7em">max 15<br/>
                    </div>
                    </i>
                    <h4>Joueurs :</h4>
                    <div class='gameStyle players' data-players='hvh'>
                        <span class='text-left'>Humain</span>
                        <span class='text-center'>VS</span>
                        <span class='text-right'>Humain</span>
                    </div>
                    <div class='gameStyle players' data-players='hvia'>
                        <span class='text-left'>Humain</span>
                        <span class='text-center'>VS</span>
                        <span class='text-right'>IA</span>
                    </div>
                    <div class='gameStyle players' data-players='iavia'>
                         <span class='text-left'>IA</span>
                        <span class='text-center'>VS</span>
                        <span class='text-right'>IA</span>
                    </div>
                    <div class="playerTypes table">
                        <div class="playerType cell border-right">
                            <span id="player1Name" class="cell">Joueur1</span>
                            <?php
                            echo "<img id='player1Icon' class='playerIcon cell' src='". $this->core->publicPath . "img/typeUnknown.png'>";
                            ?>
                        </div>
                        <div class="playerType cell" >
                            <span id="player2Name" class="cell">Joueur 2</span>
                            <?php
                            echo "<img id='player2Icon' class='playerIcon cell' src='". $this->core->publicPath . "img/typeUnknown.png'>";
                            ?>
                        </div>
                    </div>
                </div>
                <div id='game' class="col-md-10">
                    <div class='centered setups'>
                        <div class='playDiv'>
                            <span id="backgroundStep" class="alert alert-warning glyphicon"> Definis la taille du terrain (<span id="backgroundSize">20 x 20</span>)</span><br/>
                            <span id="bikesNumberStep" class="alert alert-warning glyphicon"> Choisis un nombre de motos (<span id="bikesNumber">2</span>)</span><br/>
                            <span id="bikesPlacementStep" class="alert alert-danger glyphicon glyphicon-remove"> Place les motos (<span id="bikesNumberToPlace">2</span>)</span><br/>
                            <span id="gameTypeStep" class="alert alert-danger glyphicon glyphicon-remove"> Choisis les joueurs</span><br/>
                            <button id="btnBegin" type="button" class='disabled btn btn-default'><span class='glyphicon glyphicon-play'> Commencer</span></button>

                        </div>
                    </div>
                    <div id='background'>
                    </div>
                </div>
            </div>
        </div>

        <?php
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/jquery-2.1.0.min.js'></script>";
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/bootstrap.min.js'></script>";
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/moto.js'></script>";
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/player.js'></script>";
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/tron.js'></script>";
        echo "<script type='text/javascript' src='". $this->core->publicPath . "js/Modern-Blink/jquery.modern-blink.js'></script>";
        ?>
        <script>
            window.onload = function(){
                var tron = new Tron();
                tron.init();   
            };
        </script>
    </body>

</html>
