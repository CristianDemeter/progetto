<?php 
    session_start();
    error_reporting(0);
    ini_set('display_errors', 0); 
    
    if(!empty($_SESSION['success'])){
    
    $dataPren = $_SESSION['dataPren'];
    $nominativo = $_SESSION['nominativo'];
    $segm = $_SESSION['segm'];
    $segmDim = $_SESSION['segmDim'];
    $dolce = $_SESSION['dolce'];
    $tariffa = $_SESSION['tariffa'];
    $price = $_SESSION['price'];

    ?>
<!DOCTYPE html>
<head>
    <title>Web Pizza</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background">
        <div class="page">
            <div class="title">La tua prenotazione è andata a buon fine!</div>

            <span><p><strong>Il tuo menù: </strong><?php echo $segm;?></p></span>
            <span><p><strong>Dimensione: </strong><?php echo $segmDim;?></p></span>
            <span><p><strong>Quantità di menù ordinati: </strong><?php echo $nominativo;?></p></span>
            <span><p><strong>Prezzo tipo di menù: </strong><?php echo $price;?>$</p></span>
            <span><p><strong>Prezzo complessivo di tutte le pizze: </strong><?php echo $price * $nominativo;?>$</p></span>
            <span><p><strong>Dolci ordinati: </strong><?php echo $dolce;?></p></span>
            <span><p><strong>Costo totale dolce: </strong><?php echo $dolce * 3;?>$</p></span>
            <a href="index.php">Ritorna al menu principale</a>
        </div>
    </div>
</body>

<?php }?>