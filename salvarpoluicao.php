<?php
     


      
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "amazonia";

        $conn = mysqli_connect($host, $usuario, $senha, $banco);
        #$mysqli = new mysqli($host, $usuario, $senha, $banco);  

         $tipop = $_POST['tipop'];
         $municipiop = $_POST['municipiop'];
         $bairrop = $_POST['bairrop'];
         $ruap = $_POST['ruap'];
         $mensagemp = $_POST['mensagemp'];  

                                      
 	 $sql = "INSERT INTO poluicao(tipop, municipiop, bairrop, ruap, mensagemp) VALUES ('$tipop', '$municipiop', '$bairrop', '$ruap', '$mensagemp')";

      $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Denuncia enviada com sucesso!');
       location.href=\"/amazoniasos/denuncia.php\"</script>";
        } else {
                echo "<script>alert('Falha ao enviar denuncia!');
        location.href=\"/amazoniasos/denuncia.php\"</script>";
        }
?>
