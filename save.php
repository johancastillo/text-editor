

<?php

try{
    // Conexión a la base de datos
    $connect = new PDO('mysql:host=localhost;dbname=text_editor', 'jcjohan', 'password');
    $connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Guardar en la base de datos
    $statement = $connect->prepare("INSERT INTO posts (content) VALUES (:content)");
    $statement->execute(["content" => "<p><b>Test Two</b></p>"]);    
    
    
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}


?>

<h1>Saved</h1>