<?php
if (isset($_POST['set'])) {
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    if ((empty($_POST['num1']) || empty($_POST['num2']) ) ){
        echo "Remplissez Tous\n\n";
    }
    elseif(!(is_numeric($num1) && is_numeric($num2))){
            echo "Saisisez Des Valeurs Numeriques!!";
    }
    else{
    switch($_POST['calcul']){

        case "Addition":
        $sum = $num1 + $num2;
        echo $sum;
        break;
        case "Sustraction":
        $sus = $num1 - $num2;
        echo $sus;
        break;

        case "Division":
        $quoit = $num1 / $num2;
        echo $quoit;
        break;

        case "Multiplication":
        $prod = $num1 * $num2;
        echo $prod;
        break;
        default:
        echo "Choississez Une Operateur!!";

    }  
}
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>

<body>
<div align="center">
<fieldset style="width:20px;">
<form  method="POST">
    <div>
        <label>Numero1</label>
        <input type="text" name="num1">
     </div><br>

     <div>           
          <label>Numero2</label>
        <input type="text" name="num2">
    </div><br>
    <div>
    <label>Operateur</label>
    <select name="calcul">
        <option>--Operation--</option>
        <option value="Addition">Addition</option>
        <option value="Sustraction">Sustraction</option>
        <option value="Division">Division</option>
        <option value="Multiplication">Multiplication</option>
    </select>
    </div><br>  
    <div>
        <input type="submit" name="set" value="Calculer">
    </div>
</div>
</form>
</fieldset> 
</div>
</body>
</html>