<?php





$arquivo = fopen('arquivo.txt','w') or die('Não foi possível excluir o arquivo.');

echo "<script>alert('Conteudo excluido');
location.href=\"/amazoniasos/lerarquivo.php\"</script>";







?>