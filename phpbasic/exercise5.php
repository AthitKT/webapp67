<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex5</title>
</head>
<body>
    <?php
        function test($n)
        {
            return $n %3 == 0|| $n %7 == 0;
        }
        
        echo "7 หาร 14 ลงตัว: ";
        var_dump(test(14));
        echo "<br>";
        echo "3 หาร 12 ลงตัว: ";
        var_dump(test(12));
        echo "<br>";
        echo "3 หรือ 7 หาร 37 ลงตัว: ";
        var_dump(test(37));

    ?>
    
</body>
</html>