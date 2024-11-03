<?php

require 'vendor/autoload.php';

use Overload\User;
use Overload\UserException;

try {
    $user = new User();

    // Виклик існуючих методів через __call
    $user->setName("Іван");
    $user->setAge(25);
    $user->setEmail("ivan@example.com");

    // Отримання всіх даних
    $userData = $user->getAll();
    print_r($userData);

    // Виклик неіснуючого методу
    $user->setPhone("123456789"); // Це викличе виняток

} catch (UserException $e) {
    echo "Помилка: " . $e->getMessage();
}
