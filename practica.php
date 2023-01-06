<?php
    $ara[1]=4;
    $ara[]=3;
    $ara[]=4;
    $ara[]=5;
        echo"<p style='text-align:center;text-decoration:underline'>NUMEROS EN LISTAS</p>";
    print_r($ara);
    echo"<br>";
    $vec = array(3,4,2);
    print_r($vec);
        echo"<br>";
    $dict = array("alfa"=>12,"beta"=>3);
        echo"<br>";
    print_r($dict);
        echo"<br>";
        echo $dict['alfa'];
        echo '<br>';
        echo count($vec);
        echo "<br> LISTA <BR>";
        $listaCol = array("aada","bfda");
        define("CURSO","Progra");

        echo CURSO;
                echo '<br>';
        echo "PHP version :".PHP_VERSION."<br>";
        echo "PHP OS :".PHP_OS."<br>";
        echo "PEAR  :".PEAR_EXTENSION_DIR;
    print "";
?>