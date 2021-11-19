<?php


    $des =$_REQUEST['texto'];
    
    $arqu='arquivo.txt';
    $arquivo_ler = fopen($arqu,'a+');
    fwrite($arquivo_ler, "\n");
    fwrite($arquivo_ler, $des);

    if (file_exists($arqu)) {
        while (!feof($arquivo_ler)) {
            $buffer= fgets($arquivo_ler,4096);
        }
        fclose($arquivo_ler);
    }else{
        echo"isso nao existe";
    }
    echo "<script>alert('Conteudo salvo!');
        location.href=\"/amazoniasos/lerarquivo.php\"</script>";
?>