<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break</title>
</head>
<body>
    <?php
    
    for($i = 1; $i<5; $i++)
    {
        if ($i == 3){
            continue;
        }
        echo("Nilai i : $i <br>");
    }

    echo ("loop selesai");
    ?>
</body>
</html>