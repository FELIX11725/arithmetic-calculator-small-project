
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

   
    $result = '';

    if(isset($_POST['num1'])){
        (float)$_POST['num1'];
    }else{
        return 0;
    }

    if(isset($_POST['num2'])){
        (float)$_POST['num2'];
    }else{
        return 0;
    }

    $num1=(float)$_POST['num1'];
    $num2=(float)$_POST['num2'];

    $operation=$_POST['operation'];

    switch ($operation){

        case 'add':
            $result = $num1+$num2;
            break;
        
        case 'subtract':
            $result =$num1-$num2;
            break;
        
        case 'multiply':
            $result=$num1*$num2;
            break;
        

        case 'divide':
            if($num2!=0){
            $result=$num1/$num2;
            }else{
                $result='Error: invalid operation';
            }
            break;

        default:
             $result='invalid operation';

        }

        header('Location: calc.html?result=' . urlencode($result));
        exit;

    
}

?>
