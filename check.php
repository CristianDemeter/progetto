<?php  

session_start();
error_reporting(0);
ini_set('display_errors', 0);

$margherita = 5.99;
$funghi = 6.99;
$scelgoio = 8.99;

if(!empty($_POST['sendForm'])) {
    
    $nominativo = $_POST['nominativo'];
    $_SESSION['nominativo'] = $nominativo;

    $dolce = $_POST['dolce'];
    $_SESSION['dolce'] = $dolce;

    $segm = $_POST['segmento'];
    $_SESSION['segm'] = $segm;

    $segmDim = $_POST['segmentodimensione'];
    $_SESSION['segmDim'] = $segmDim;

        
        
        if($segm == 'Menu Pizza Margherita'){

                if ($segmDim == 'Piccolo')  {
                $price = $margherita * 1;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $margherita * $nominativo;
            } else if ($segmDim == 'Medio') {
                $price = $margherita * 0.25;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $margherita * $nominativo;
            }
            else if ($segmDim == 'Grande'){
                $price = $margherita * 0.5;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $margherita * $nominativo;
            }
        }

        if($segm == 'Menu Pizza Prosciutto Funghi'){
            
                if ($segmDim == 'Piccolo')  {
                $price = $funghi * 1;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $funghi * $nominativo;
            } else if ($segmDim == 'Medio') {
                $price = $funghi * 0.25;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $funghi * $nominativo;
            }
            else if ($segmDim == 'Grande'){
                $price = $funghi * 0.5;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $funghi * $nominativo;
            }
        }

        if($segm == 'Menu Pizza Scelgo io'){
            
                if ($segmDim == 'Piccolo')  {
                $price = $scelgoio * 1;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $scelgoio * $nominativo;
            } else if ($segmDim == 'Medio') {
                $price = $scelgoio * 0.25;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $scelgoio * $nominativo;
            }
            else if ($segmDim == 'Grande'){
                $price = $margherita * 0.5;
                $_SESSION['price'] = $price;
                $_SESSION['tariffa'] = $scelgioio * $nominativo;
            }
        }



        $_SESSION['success'] = 'true';
        header('location: success.php');
    }
 