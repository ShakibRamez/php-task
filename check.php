<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number"])) {
    $num = intval($_POST["number"]);
    $result = ($num % 2 == 0) ? "Even" : "Odd";
} else {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3>Result:</h3>
    <div class="alert alert-info">
      Number <strong><?= $num ?></strong> is <strong><?= $result ?></strong>.
    </div>
    <a href="index.html" class="btn btn-success">Try Another</a>
  </div>
</body>
</html>