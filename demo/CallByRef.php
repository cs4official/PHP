<html>
<head> 
    <title>
    PHP Call by Reference
    </title>
</head>
<body>
    <?php

    function sum(&$num) //Formal parameter
    {
    return $num = $num +10 ;
    }
        $num = 10;  
        echo sum ($num)."</br>";   //Actual Parameter
        echo $num;
?>
</body>
</html>