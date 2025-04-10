<?php
   require_once '../shymicho_suscriptores_db_connection.php';

   try {

      if($_SERVER["REQUEST_METHOD"] === "POST") {

         $name = htmlspecialchars($_POST['name']);
         $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

         if (empty($name) || empty($email)) {
            die("Faltan datos. Por favor complete el formulario.");
         }

         if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("El correo electrónico no es valido");
         }

         $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $stmt = $pdo->prepare("INSERT INTO suscriptores (nombre, email) VALUES (:name, :email)");
         $stmt->bindParam(':name', $name);
         $stmt->bindParam(':email', $email);
         $stmt->execute();

         echo ("<strong>¡Gracias por suscribirse!</strong>");
      }

   } catch(PDOException $error) {

      if($error->getCode()==23000) {
         echo "El correo <strong>" . $email . "</strong> ya ha sido registrado anteriormente <a href='index.php'> [Regresar]</a>";
      } else {
         echo "Error en la base de datos: " . $error->getMessage();
      }
   }
?>
