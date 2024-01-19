<?php

  include_once("config/url.php");
  include_once("config/process.php");
  include_once("config/codevid.php")

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MemeList</title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css">
    

    <!-- font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="body">
    
<header class="header">
  <nav class="nav">
      <a href="<?= $BASE_URL ?>index.php" class="logo">MemeList</a>
      <div class="button">
      <button class="hamburguer"></button>
      </div>
      <ul class="nav-list">
        <li onclick="location.href='index.php';" style="cursor: pointer;"><a href="index.php"></a>Home</li>
        <li onclick="location.href='list.php';" style="cursor: pointer;"><a href="list.php"></a>List</li>
        <li>
          <a href="create.php">
            <div id="add_meme">Add Meme</div>
          </a>
        </li>
        <li>
          <div>
            <input type="checkbox" class="checkbox" id="theme">

              <label class="label2" for="theme">
                  <i class="fas fa-moon"></i>
                  <i class="fas fa-sun"></i>

              <div class="ball"></div>

            </label>
          </div>
        </li>
      </ul>
    </nav>

</header>
    

