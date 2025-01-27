<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
  <link rel="stylesheet" href="<?php echo $GLOBALS['path'] ?>css/bootstrap/dist/css/bootstrap.min.css">
  <style>
    body,
    html {
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="pb-5">
      <?php include __DIR__ . '/components/navbar.php'; ?>
    </div>

    <div class="row pb-5">
      <?php include __DIR__ . '/components/breadcrumbs.php'; ?>

      <div class="col">
        <h2>About Us</h2>
        <p>ini adalah halaman about us</p>
      </div>
    </div>
</body>

</html>
