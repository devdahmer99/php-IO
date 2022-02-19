<?php 

$arquivo = fopen('listaCursos.txt', 'r');

$tamanhoDoArquivo = filesize('listaCursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);

?>