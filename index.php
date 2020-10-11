<?php
preg_match('/^\w{2}/', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $m);
switch (strtolower($m[0])) {
case 'ru': header('Location: /ru/'); break;
default: header('Location: /en/'); break;
}
?>
