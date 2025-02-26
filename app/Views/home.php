<?php include __DIR__ . '/components/card.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Gethuk</title>
  <link rel="stylesheet" href="<?php echo $GLOBALS['path'] ?>css/bootstrap/dist/css/bootstrap.min.css">
  <script src="<?php echo $GLOBALS['path'] ?>css/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="">
    <div class="pb-5 container">
      <?php include __DIR__ . '/components/navbar.php'; ?>
    </div>

    <div class="container">
      <div class="row pb-5">
        <div class="col">
          <h2>Welcome to Gethuk</h2>
          <p>ini adalah framework minimalist gw</p>
        </div>
      </div>
    </div>

    <div>
      <?php include __DIR__ . '/components/carousel.php'; ?>
    </div>

    <section class="container">
      <div class="row">
        <div class="col-md-3">
          <?php include __DIR__ . '/components/breadcrumbs.php'; ?>
          <figure>
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </div>

        <div class="col-md-6">
          <?php render_card("Card Title 1", "This is the first card text.", "Learn More", "https://example.com"); ?>
          <div>
            <?php include __DIR__ . '/components/accordion.php'; ?>
          </div>
        </div>

        <div class="col-md-3">
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
          <button type="button" class="btn btn-secondary btn-lg">Large button</button>
        </div>
    </section>
  </div>
  </div>

  <div>
    <?php include __DIR__ . '/components/footer.php'; ?>
  </div>
</body>

</html>
