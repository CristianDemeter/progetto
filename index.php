<?php 
        session_start(); 
        error_reporting(0);
        ini_set('display_errors', 0); 
        ?>
<!DOCTYPE html>
<html>
    <head>
        <title>WebPizza</title>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='preconnect' href='https://fonts.gstatic.com' />
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap' rel='stylesheet'/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="background">
            <div class="page">
                <div class="title">Web Pizza</div>
                <form method="POST" action="check.php">
                    <h4>Selezione il tipo di menu:</h4>
                     <select name="segmento" required>
                    <option>Menu Pizza Margherita</option>
                    <option>Menu Pizza Prosciutto Funghi</option>  
                    <option>Menu Pizza Scelgo io</option>
                    </select>
                    <h4>Seleziona quale formato desideri:</h4>
                     <select name="segmentodimensione" required>
                    <option>Piccolo</option>
                    <option>Medio</option>  
                    <option>Grande</option>
                    </select>  
                    <h4>Inserisci quanti menu desideri:</h4>
                    <input type="text" minlength="1" size="7" name="nominativo" required> 
                    <br>
                    <br>
                    <input type="checkbox" id="dolce" name="dolce" value="dolce">
                    <label for="dolce"> Desideri anche un dolce per l'aggiunta di 3 Euro?</label>
                    <br>
                    <h4>Inserisci quanti dolci desideri:</h4>
                    <input type="text" minlength="1" size="7" name="dolce">
                    <br>
                    <br>
                    <input type="submit" name="sendForm">
                </form>
            </div>
        </div>
    </body>
</html>