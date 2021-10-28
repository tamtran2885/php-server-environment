<!DOCTYPE html>
<?php $randomInt = random_int(1, 10); ?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- <link rel="icon" href="%PUBLIC_URL%/favicon.ico" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Web site "
    />
    <title>PHP app</title>
  </head>
  <body>
    <h1>Hello world</h1>
    <p><?php echo $randomInt ?></p>
    <?php if ($randomInt > 5) { ?>
        <h2>Nice</h2>
    <?php } ?>
  </body>
</html>