<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>

    <form method="post">
        <select name="size">
            <?php
               for ($i = 2; $i <= 10; $i++){
                  echo "<option value='$i'>$i</option>";
               }
               ?>
        </select>
    </form>
    
    <button name="submit" type="submit">Submit</button>
 
        <?php 
        if(isset($_POST['submit'])){
            $size = $_POST['size'];
        } else{
            $size = 8;
        }
        for($rows = 1; $rows <= $size; $rows++)
            {
                echo "<tr>";
                   for($columns = 1; $columns <= $size; $columns++)
                   {
                       $total = $rows + $columns;
                       if($total % 2 == 0) {
                        echo "<td></td>";
                       } else {
                        echo "<td class='black'></td>";
                       }
                   }
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>