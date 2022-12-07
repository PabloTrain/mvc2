<?php
# console/setpassword.php
require "../app/models/User.php";

$users = \App\Models\User::all();

foreach ($users as $user) {
    // echo $user->name . "\n";
    echo "<br>" . $user->name . ': ' . $user->setPassword('secret') . "\n";
}