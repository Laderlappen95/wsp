<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function cleanData($data){
        try{
        for($i =1 ;$i<5;$i++){
            $data[$i] = strip_tags($data[$i]);
            $data[$i] = stripslashes($data[$i]);
            $data[$i] = trim($data[$i]);
            echo $data[$i] . "<br>";
        }
        }catch(Exception $e){}
    }

    ?>
</body>
</html>