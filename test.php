<?php

// include_once($_SERVER['DOCUMENT_ROOT'].'<t4 type="media" id="548291" formatter="path/*"/>'); 
  include_once 'config.php';

  $pdo = new PDO("sqlsrv:Server=".$DB_HOST.",".$DB_PORT.";TrustServerCertificate=1;Database=".$DB_DATABASE." ",$DB_USERNAME ,$DB_PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "select top 10 * from tblFaculty";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();

  foreach($result as $row) {
    echo $row['Fname']." ".$row['Lname']."<br>";
  }


