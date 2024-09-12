<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php //ตัวเริ่มต้นของ PHP
        echo "Hello PHP"; //PHP ต้องปิดด้วย ; เสมอ
        echo "<br>";
        echo "This is my first time to write PHP Language";
        echo "<br>";
        echo "<br>";
        define("MINSIZE", 50); //กำหนดค่าตัวแปร
        echo MINSIZE;
        echo "<br>";
        echo "This is value minsize => ",constant("MINSIZE");
    ?>

</body>
</html>