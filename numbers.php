<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Numbers 1 to 20</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3 class="mb-4">Even/Odd from 1 to 20</h3>
    <ul class="list-group">
      <?php
      for ($i = 1; $i <= 20; $i++) {
          $status = ($i % 2 == 0) ? "Even" : "Odd";
          echo "<li class='list-group-item'>$i is <strong>$status</strong></li>";
      }
      ?>
    </ul>
    <a href="index.html" class="btn btn-secondary mt-3">Back</a>
  </div>
</body>
</html>