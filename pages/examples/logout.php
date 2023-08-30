<?php
session_start();
if (session_destroy()) {
header("Location: /Nurses/pages/examples/login.html");
}
?>