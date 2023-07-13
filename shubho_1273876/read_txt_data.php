<?php

$users = file("users.txt");

echo "<pre>";

foreach ($users as $user) {
    list($name, $email, $phone) = explode(",", $user);
}
