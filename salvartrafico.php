<?php
     


      
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "amazonia";

        $conn = mysqli_connect($host, $usuario, $senha, $banco);
        #$mysqli = new mysqli($host, $usuario, $senha, $banco);  

         $tipot = $_POST['tipot'];
         $municipiot = $_POST['municipiot'];
         $bairrot = $_POST['bairrot'];
         $ruat = $_POST['ruat'];
         $mensagemt = $_POST['mensagemt'];  

                                      
 	 $sql = "INSERT INTO trafico(tipot, municipiot, bairrot, ruat, mensagemt) VALUES ('$tipot', '$municipiot', '$bairrot', '$ruat', '$mensagemt')";

      $query = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Denuncia enviada com sucesso!');
       location.href=\"/amazoniasos/denuncia.php\"</script>";
        } else {
                echo "<script>alert('Falha ao enviar denuncia!');
        location.href=\"/amazoniasos/denuncia.php\"</script>";
        }
?>
