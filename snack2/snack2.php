<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<?php 

    $permitMessage = '';
    
    if ( isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["email"])) {

        $name = $_GET["name"];
        $age = $_GET["age"];
        $email = $_GET["email"];

        // var_dump($_GET["name"]);
        // var_dump($_GET["age"]);
        // var_dump($_GET["email"]);

        
        if(strlen($name) >= 3 && is_numeric($age) && str_contains($email,"@")){
            $permitMessage =  "Access Granted";
        } else {
            $permitMessage = "Access denied";
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
      <section class="row mt-3">
            <div class="col">
                <form action="snack2.php" method="GET" >
                    <label for="name" class="mt-3">Add your name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">

                    <label for="age" class="mt-3">Add your age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="age" >
                    
                    <label for="email" class="mt-3">Add your email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email">

                    <button type="submit" class="btn btn-primary mt-4">invia</button>
                </form>
                <p><?= $permitMessage ?></p>
            </div>
      </section>
    </main>
</body>
</html>