<?php
  $dogs = array(
    array(
      "Name" => "Bozo",
      "Breed" => "Pug",
      "Speed" => "Slow",
      "Meals" => 3
    ),
    array(
      "Name" => "Butters",
      "Breed" => "Mutt",
      "Speed" => "Fast",
      "Meals" => 2
    ),
    array(
      "Name" => "Homie",
      "Breed" => "Sheep Dog",
      "Speed" => "Slow",
      "Meals" => 9
    ),
    array(
      "Name" => "Sydno",
      "Breed" => "Border Collie",
      "Speed" => "Fast",
      "Meals" => 3
    )
  );

  $json_dogs = json_encode($dogs, JSON_PRETTY_PRINT);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JSON</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5">
      <h2>
        <?php echo $dogs[3]["Breed"]; ?>
      </h2>
      <pre>
        <?php //echo $json_dogs; ?>
      </pre>
      <pre>
        <?php //print_r(json_decode($json_dogs, true)); ?>
      </pre>

    </div>
  </body>
</html>