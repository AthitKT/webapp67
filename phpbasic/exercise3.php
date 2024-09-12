<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3</title>
</head>
<body>
    <?php
        function test($x,$y)
        {
            return($x <= 20 || $y >= 50)||($y <= 20 || $x >= 50);
        }

        echo "20 หรือ 84 หนึ่งในตัวเลขนี้อยู่ในช่วง 20 - 50: ";
        var_dump(test(20, 84));
        echo "<br>";
        echo "25 หรือ 40 หนึ่งในตัวเลขนี้อยู่ในช่วง 20 - 50: ";
        var_dump(test(25, 40));

    ?>
    
</body>
</html>