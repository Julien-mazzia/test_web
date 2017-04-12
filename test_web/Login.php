<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
        <script type="text/javascript" src="jquery.min.js"></script>
</head>

    <body>
        <div id="textbox"></div>
<?php

    $pdo = new PDO('mysql:dbname=users;host=localhost', 'root', '20012001');
    $sql = 'select * from user';
    foreach($pdo->query($sql) as $row){
        if($row['name']==$_POST["user"]){
            if($row['password']==$_POST["passord"]){
                $valide ="valide";
            }
        }
    }
        
    ?>
        
</body>
    
    <script type="text/javascript">
        var prix = '<?= $valide; ?>';
        if(prix=='valide'){
            $('div').addClass('alert alert-success');
            $('div').append('Authentification réussie');
        }else{
            $('div').addClass('alert alert-danger');
            $('div').append('Erreur d\'authentification');
        }
    </script>
</html>