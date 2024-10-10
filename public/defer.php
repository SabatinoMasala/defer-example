<?php

echo "Hello world!";

if (\function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
} else {
    flush();
}

sleep(20);
