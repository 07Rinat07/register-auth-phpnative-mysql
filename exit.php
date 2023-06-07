<?php

setcookie('user', $user['name'], time() - 3600 * 24 * 360, "/");


header('Location: /');

?>
