<?php
     


      
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "amazonia";

        $conn = mysqli_connect($host, $usuario, $senha, $banco);
        #$mysqli = new mysqli($host, $usuario, $senha, $banco);  

         $tipoq = $_POST['tipoq'];
         $municipioq = $_POST['municipioq'];
         $bairroq = $_POST['bairroq'];
         $ruaq = $_POST['ruaq'];
         $mensagemq = $_POST['mensagemq'];  

                                      
 	 $sql = "INSERT INTO queimada(tipoq, municipioq, bairroq, ruaq, mensagemq) VALUES ('$tipoq', '$municipioq', '$bairroq', '$ruaq', '$mensagemq')";

      $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Denuncia enviada com sucesso!');
       location.href=\"/amazoniasos/denuncia.php\"</script>";
        } else {
                echo "<script>alert('Falha ao enviar denuncia!');
        location.href=\"/amazoniasos/denuncia.php\"</script>";
        }
?>
