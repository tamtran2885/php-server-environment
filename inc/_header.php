<?php
  $title = $title ?? "Log In "
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- <link rel="icon" href="%PUBLIC_URL%/favicon.ico" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Web site " />
    <title><?= htmlspecialchars($title, ENT_QUOTES); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      <?php include(__DIR__ . "/../assets/css/styles.css"); ?>
    </style>
  </head>
  <body>
    <?php include(__DIR__ . "/_navbar.php"); ?>
    <?php include(__DIR__ . "/_flash_message.php"); ?>