<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <table border="">
        <tr>
            <th>Name</th>
            <th>Formula of area</th>
            <th>result</th>

        </tr>
        <tr>
            <td>Square</td>
            <td>s*s</td>
            <td>
                <p>if s = 5 </p>
              <?php 
                $areaOfSquare = area(5,5);
                echo $areaOfSquare;
              ?>
            </td>
        </tr>
        <tr>
            <td>Circle</td>
            <td>3.14 * r * r</td>
            <td>
                <p>if r = 7 </p>
              <?php 
                $areaOfCircle = area(7,7);
                echo $areaOfCircle;
              ?>
            </td>
        </tr>
    </table>
    
</body>
</html>

<?php 
    function area($a,$b){
        $areaOfSquare = $a * $b;
        return $areaOfSquare;
    }
?>
