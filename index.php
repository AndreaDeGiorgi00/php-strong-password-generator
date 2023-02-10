<?php 
    include 'functions/functions.php';
    
    
    if(isset(  $_GET['numero_caratteri'])){
        getPassword($_GET['numero_caratteri']);
        header('location: yourPassword.php');
    } ;
    
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>generatore password</title>
</head>
<body>
    <div class="container text-center mt-5">
        <h1> Il tuo generatore di password</h1>

        <form action="" class="mt-5">
            <span>quanto deve essere lunga la tua password?</span> <input type="number" name="numero_caratteri" min="0">
            <button>invia</button>
        </form>

        
    </div>
</body>
</html>