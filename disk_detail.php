<?php


$json_string = file_get_contents('dischi.json');

$list = json_decode($json_string, true);

$disk = $list[$_GET['index']];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi JSON</title>
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <!-- fontawesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' />
  <!-- Axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.js' integrity='sha512-pmaEGtUAy7E5gRmwjLqQAD/QWw0dL4Z59b6b+2HQkqQwQ+HcPLLb9/KbUNo5zr10WuXmbivK9nYVZOyDkMgZMg==' crossorigin='anonymous'></script>
  <!-- Vue -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.4.23/vue.global.js' integrity='sha512-nG1pzAdB6onYkrCldpnkwHzZw7H3IUL4RLhinI7XEioaM8PHQDeHD6zPf+tog9WlKLAojc4zddvkTUpHvAZbew==' crossorigin='anonymous'></script>
  <!-- custom css -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div id="app">

    <div class="container text-center text-white ">
      <div class="details">
        <h1><?php echo $disk['title'] ?></h1>
        <h2><?php echo $disk['author'] ?></h2>
        <h4> <?php echo $disk['genre'] ?> </h4>
        <h3><?php echo $disk['year'] ?></h3>
        <a href="index.html" class="btn btn-primary">Homepage</a>
      </div>
    </div>

  </div>

</body>


</html>