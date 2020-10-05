<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2</title>
  </head>
  <body>
    <?php
      //Controlo che le variabili in GET non siano vuote e che age sia un numero
      if (!empty($_GET["name"]) && !empty($_GET["email"]) && !empty($_GET["age"] && is_numeric($_GET["age"])) ) {
        // Setto le variabili e trasformo $age da stringa a intero
        $name = $_GET["name"];
        //var_dump($name);
        $mail = $_GET["email"];
        //var_dump($mail);
        $age = intval($_GET["age"]);
        //var_dump(gettype($age));
        // Controlo che name>3
        if (strlen($name)>3 && strpos($mail, ".")!== false && strpos($mail, "@") !== false && is_int($age)) {
          echo "Accesso riuscito";
        }else {
          echo "Accesso negato";
        }
      } else {
        echo "Accesso negato";
      };

    ?>
  </body>
</html>
