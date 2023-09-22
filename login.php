<?php 

if( isset($_POST)){
    

    $login= $_POST['login'] ;
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<?php 

if (isset($login)){


    echo " bonjour " .$login." bienvenue ! " ;
}



?>

    
</body>
</html>