<?php 

$arquivo = fopen('listaCursos.txt', 'r');

while(!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}


fclose($arquivo);

?>