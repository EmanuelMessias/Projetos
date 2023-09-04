<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
        <?php
            if(isset($_POST['nome'])){
                echo 'Post:  '.$_POST['nome'];

            }else if(isset($_GET['nome'])){
                echo $_GET['nome'];

            }
        
        
        
        ?>

<form action="" method="post"></form>
    <input type="text" name="nome"> 
    <input type="submit" value="enviar">
    
</body>
</html>