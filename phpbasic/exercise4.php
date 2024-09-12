<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>
    <?php
        function test($str) {
            $count = 0;
            $i = 0;
        
            while ($i < strlen($str) - 1) {
                if (substr($str, $i, 2) == "aa") {
                    $count++;
                    $i++; // ข้ามไปหนึ่งตัวอักษร เพื่อไม่นับ "aaa" ซ้ำ
                }
                $i++;
            }
        
            return $count;
        }
        
        // เรียกใช้ function
        echo "bbaaccaag: ";
        echo test("bbaaccaag");
        echo "<br>";
        echo "jjkiaaasew: ";
        echo test("jjkiaaasew");
        echo "<br>";
        echo "JSaaakoiaa: ";
        echo test("JSaaakoiaa"); 
    ?>
</body>
</html>