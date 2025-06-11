<?php

$users = [];


function addUser(&$users, $name, $email) {
    $users[] = [
        'id' => uniqid(),
        'name' => $name,
        'email' => $email
    ];
}


function deleteUser(&$users, $id) {
    foreach ($users as $index => $user) {
        if ($user['id'] === $id) {
            unset($users[$index]);
            break;
        }
    }
    $users = array_values($users); 
}


function editUser(&$users, $id, $newName, $newEmail) {
    foreach ($users as &$user) {
        if ($user['id'] === $id) {
            $user['name'] = $newName;
            $user['email'] = $newEmail;
            break;
        }
    }
}


function listUsers($users) {
    echo "لیست کاربران:<br>";
    foreach ($users as $user) {
        echo "ID: {$user['id']}, Name: {$user['name']}, Email: {$user['email']}<br>";
    }
}

addUser($users, "Ali", "ali@example.com");
addUser($users, "Sara", "sara@example.com");
listUsers($users);

echo "<br>--- بعد از ویرایش ---<br>";
editUser($users, $users[0]['id'], "Ali Reza", "alireza@example.com");
listUsers($users);

echo "<br>--- بعد از حذف ---<br>";
deleteUser($users, $users[1]['id']);
listUsers($users);
?>
