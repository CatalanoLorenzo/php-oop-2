<?php
include_once __DIR__ . "/Database/database.php";

var_dump($computers)

?>
<!doctype html>
<html lang="en">

<head>
  <title>Computers</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <h1>Computers</h1>
  </header>
  <main>
    <div class="contaier">
      <div class="row">
        <? foreach ($computers as $computer) : ?>
          <div class="card">
            <div class="card-header">
              <h3><?= $computer->battery? 'Desktop' : 'Laptop' ?></h3>
            </div>
            <div class="card-body">
              <ul>
                <?php foreach ($computer as $item) : ?>
                  <?php if (is_int($item) || is_string($item)) : ?>
                    <li><?= $item; ?></li>
                  <?php else :?>
                    <?php foreach ($item as $component) : ?>
                      <li><?= $component; ?></li>
                      <?php endforeach ?>

                  <? endif; ?>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        <? endforeach ?>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>