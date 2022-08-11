<html>
<head>
    
<meta charset="UTF-8"/>


<title>Calculo</title>

</head>  

<body>
<div>


    <?php

    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["calc"])?$_GET["calc"]:1;
    switch ($o) {

        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ^ 3;
            break;
        case 3;
        $r = sqrt($n); // Também poderá utilizar desta forma: $n ^ (1/2)

    }

    echo "O resultado da operação é: $r ";

    ?>
<br/>
<br/>
    <!-- Aqui volta a página -->
    <a href="calculo.html"><button>Voltar</button</a>
</div>

</body>


</html>