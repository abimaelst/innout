<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

// $user = new User(['name' => 'abimael', 'email' => 'abimael@gail.com']);

print_r(User::get(['name' => 'Admin'], 'name, id'));

foreach (User::get([], 'name') as $user) {
    echo $user->name;
    echo '<br>';
}
