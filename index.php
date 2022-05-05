<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php 

$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. 
              Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur.    ';

// $censura = $_GET['censura'];  
$censura = isset($_GET['censura'] ) ? $_GET['censura'] : '';

$paragrafoValidato = str_ireplace($censura,'***',$paragrafo);


$stringa1 = 'Il paragrafo censurato è lungo: ';
$stringa2 = ' caratteri';
$stringa3 = 'La parola da censurare è: ';

// // Metodologia Empty e ciclo if
// if( $_GET['censura'] != '') {
//     $censura = $GET['censura'];
//     $paragrafoValidato = str_ireplace($censura,'***',$paragrafo);
//     $paragrafoValidatoLunghezza = str_ireplace($paragrafoValidato);
// } else {
//     $paragrafoValidato = $paragrafo;
// }

// // Metodologia Empty e ciclo if
// if( !empty($_GET['censura'] ) ) {
//     $censura = $GET['censura'];
//     $paragrafoValidato = str_ireplace($censura,'***',$paragrafo);
//     $paragrafoValidatoLunghezza = str_ireplace($paragrafoValidato);
// } else {
//     $paragrafoValidato = $paragrafo;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

    <div style="width: 80%; margin: 0 auto;padding: 50px">

        <p style="color: red;">Contenuto del post: </p>
        <p>
            <?php  
                echo $paragrafo; 
            ?>
        </p>

        <p style="color: red;">Lunghezza paragrafo: </p>
        <p>
            La lunghezza del paragrafo è: <?php echo strlen($paragrafo); ?> caratteri.
        </p>

        <p style="color: red;">
            Ora ricontrolla il paragrafo per vedere se ci sono errori,
            se ci sono errori inserisci nella URI o nell'input la parola da censurare prima della pubblicazione del post...
        </p>
        <form method="GET">
            <input type="text" name="censura">
            <button type="submit">Invia</button>
        </form>

        <p style="color: red;">Paragrafo corretto e validato: </p>
        <p>
            <?php 
                    
                if ($censura != '') 
                echo $paragrafoValidato;

            ?>
        </p>
        <p>

            <?php 

                if ($censura != '') 
                    echo $stringa1;
                    echo strlen($paragrafoValidato);
                    echo $stringa2;

            ?> 
            
        </p>

        <p>

            <?php 

                if ($censura != '') 
                    echo $stringa3;
                    echo $censura;

            ?> 

        </p>

    </div>
    


    
</body>
</html>