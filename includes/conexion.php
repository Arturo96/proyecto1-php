<?php

$connection = mysqli_connect('localhost', 'root', 'itsecurity', 'blog_master');

mysqli_query($connection,"SET NAMES 'utf8'");

// Iniciar una sesión
session_start();