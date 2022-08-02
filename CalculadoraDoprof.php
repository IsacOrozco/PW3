<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<php?
    function adicao($numero_1 , $numero_2){
    return $numero_1 + $numero_2;
    }
    
    function subtracao($numero_1 , $numero_2){
    return $numero_1 - $numero_2;
    }
    
    function div($numero_1 , $numero_2){
    return $numero_1 / $numero_2;
    }
    
    function multi($numero_1 , $numero_2){
    return $numero_1 * $numero_2;
    }
    
    $numero_1 = 30;
    $numero_2 = 100;
    $soma = $numero_1 + $numero_2
    $op = "+";    
    
switch ($op) {
    case '+' :
        $soma =   adicao( $numero_1, $numero_2);
        echo " o resultado do $numero_1 + $numero_2 : ";
            break;
    
            case '-'
        $soma = subtracao( $numero_1, $numero_2);
        echo " o resultado do $numero_1 - $numero_2 : ";
            break;
    
            case '/' :
        $soma=   div( $numero_1, $numero_2);
        echo " o resultado do $numero_1 / $numero_2 : ";
            break;
    
            case '*' :
        $soma=   adicao( $numero_1, $numero_2);
        echo " o resultado do $numero_1 * $numero_2 : ";
            break;
}
    
    


?>
</body>
</html>