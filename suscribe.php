<?php

   require_once 'db_connection.php';

   try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if($_SERVER["REQUEST_METHOD"] === "POST") {
         $name = htmlspecialchars($_POST['name']);
         $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("El correo electrónico no es valido");
         }

         $stmt = $pdo->prepare("INSERT INTO suscriptores (nombre, email) VALUES (:name, :email)");
         $stmt->bindParam(':name', $name);
         $stmt->bindParam(':email', $email);
         $stmt->execute();

         echo ("¡Gracias por suscribirse!");
      }
   } catch(PDOException $e) {
      if($e->getCode()==23000) {
         echo "El correo <strong>" . $email . "</strong> ya ha sido registrado <a href='index.html'>[ Regresar ]</a>";
      }
   }

?>
