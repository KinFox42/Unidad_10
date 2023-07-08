<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/edad_exacta.css">
    <title>Edad Exacta</title>
</head>
<body>
    <a href="../index.html#section-respuestas">
        <img class="home" src="../img/hogar.png" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button ="submit" name="verificar" class="btn btn-outline-info">Evíar</button>
    </form>

    <?php

    $edad_actual = 0;
    const constante_18 = 18;
    define ("constante0" , "0");
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $f_n->diff($date2);

       $edad_actual = $fecha_actual->y;
       $edad_meses = $fecha_actual->m;
       $edad_dias = $fecha_actual->d;

       if ($edad_actual >= constante_18){

        echo "<h1>Es mayor de edad, dado a que tiene " .$edad_actual. " años </h1>";
        
       }
       
       if ($edad_actual < constante_18 && $edad_actual > constante0){
            echo "<h2>Es menor de edad, dado a que tiene " .$edad_actual. " años</h2>";
        }
        echo "años: ".$edad_actual." <br>
        meses: ".$edad_meses."<br> dias: ".$edad_dias;
    }

    ?>

    </div>
</body>
</html>