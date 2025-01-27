<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
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
        <h2>Daftar user</h2>
        <?php foreach ($data['users'] as $key => $value) { ?>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title mb-0"><?php echo $value['name']; ?></h5>
              <p class="card-text"><?php echo $value['email']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

</body>

</html>
