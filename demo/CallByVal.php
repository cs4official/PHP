<html>
<head> 
    <title>
    PHP Call by Value
    </title>
</head>
<body>
    <?php

    function addNumber($n)
    {
    return $num = $n * 2;
    }
        $num = 12;
        echo addNumber($num)."</br>";
        echo $num;

?>
</body>
</html>