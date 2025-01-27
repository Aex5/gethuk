<?php if (!defined('GETHUK')) die ('gak boleh bang!');
$requestUri = $_SERVER['REQUEST_URI']; 

$segments = explode('/', trim($requestUri, '/'));

$breadcrumbs = [
    ['label' => 'Home', 'url' => '/']
];

$uri = '';
foreach ($segments as $segment) {
    $uri .= '/' . $segment;
    $breadcrumbs[] = ['label' => ucfirst($segment), 'url' => $uri];
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php foreach ($breadcrumbs as $index => $breadcrumb) 
      { 
        ?>
          <?php 
            if ($index === count($breadcrumbs) - 1) {
              echo '<li class="breadcrumb-item active" aria-current="page">' . $breadcrumb['label'] . '</li>';
            } else {
              echo '<li class="breadcrumb-item"><a href="' . $breadcrumb['url'] . '">' . $breadcrumb['label'] . '</a></li>';
            }
          ?>
        <?php 
      } 
    ?>
  </ol>
</nav>

