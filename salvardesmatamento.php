<?php
     


      
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "amazonia";

        $conn = mysqli_connect($host, $usuario, $senha, $banco);
        #$mysqli = new mysqli($host, $usuario, $senha, $banco);  

         $tipod = $_POST['tipod'];
         $municipiod = $_POST['municipiod'];
         $bairrod = $_POST['bairrod'];
         $ruad = $_POST['ruad'];
         $mensagemd = $_POST['mensagemd'];  

                                      
 	 $sql = "INSERT INTO desmatamento(tipod, municipiod, bairrod, ruad, mensagemd) VALUES ('$tipod', '$municipiod', '$bairrod', '$ruad', '$mensagemd')";

      $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Denuncia enviada com sucesso!');
       location.href=\"/amazoniasos/denuncia.php\"</script>";
        } else {
                echo "<script>alert('Falha ao enviar denuncia!');
        location.href=\"/amazoniasos/denuncia.php\"</script>";
        }
?>
