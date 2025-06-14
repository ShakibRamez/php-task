<?php
$file = "guestbook.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (!empty($name) && !empty($message)) {
        $entry = "[" . date("Y-m-d H:i:s") . "] $name: $message\n";
        file_put_contents($file, $entry, FILE_APPEND);
    }
}

header("Location: index.html");
exit;
