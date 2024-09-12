<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write nessage function</title>
</head>
<body>
    <?php
        function addFive(&$num)//ประกาศตัวแปร num โดยใช้ $
        {
            $num += 5;
        }

        function addSix(&$num)//ประกาศตัวแปร num โดยใช้ $
        {
            $num +=6;
        }
        
        $orignum = 10; //กำหนดค่าเริ่มต้นของตัวเลข
        addFive( $orignum );//เพิ่มค่าใน function addFive เข้าไป //Output: 15
        echo "Original Value is $orignum<br />";

        addSix( $orignum );//เพิ่มค่าใน function addSix เข้าไป //Output: 16
        echo "Original Value is $orignum<br />";
    ?>
</body>
</html>