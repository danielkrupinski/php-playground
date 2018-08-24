<?php
if (isset($_SERVER['PHP_AUTH_DIGEST'])) {
    echo $_SERVER['PHP_AUTH_DIGEST'];
}
