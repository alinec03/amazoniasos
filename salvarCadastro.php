<?php
   
   $host = "localhost";
   $user = "root";
   $senha = "";
   $bd = "amazonia";   

   $conn = mysqli_connect($host, $user, $senha, $bd);

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];

  $sql = "INSERT INTO login (nome, senha) VALUES ('$nome', '$senha')";

  $query = mysqli_query($conn, $sql);

  header('Location:index.html');

?>