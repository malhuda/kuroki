<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE

if (!isset($_SESSION['FBID'])) {
    header("location:/");
}