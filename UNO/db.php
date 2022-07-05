<?php
try {
    $pdo = new PDO("mysql:host = localhost;
                      dbname=conFess", "root", "Onepiece33meryem");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, 
                        PDO::ERRMODE_EXCEPTION);
    // echo 'valid';
  }
  catch (PDOException $e) {
    die("ERROR: Could not connect. ".$e->getMessage());
  }
?>