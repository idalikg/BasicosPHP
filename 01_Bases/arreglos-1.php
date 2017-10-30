<?php  

    // Declración del arreglo simple (forma 1)
    $arreglo_one = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Novienmbre','Diciembre');

    // Impresión de valor según posición en el arreglo
    echo $arreglo_one[6];

    // Saber el número de elementos contenidos en un arreglo

    echo '<br/>El arreglo tiene '. count($arreglo_one) .' elementos';

    // Iteración de posiciones con FOR
    $total = count($arreglo_one);
    echo "<br/>Meses<br/>";
    for($i=0; $i < $total; $i++) { 
        echo '<li>Mes '. ($i+1) .' : '. $arreglo_one[$i].'</li>';
    }
?>