<html>
<head>
    <title>
    PHP Call by Value
    </title>
</head>
<body>
    <?php
     function addNumber($n)  // Formal Parameter
    {
    return $n = $n * 2;
    }
        $n = 12;
        echo addNumber($n)."</br>"; // it is actual parameter, it passes the value to the formal parameter
        echo $n;
?>
</body>
</html>
