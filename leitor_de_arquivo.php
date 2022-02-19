<?php 



$cursos = file_get_contents("listaCursos.txt");

echo $cursos;

$cursos2 = file("listaCursos.txt");

var_dump($cursos2);

/*$arquivo = fopen('listaCursos.txt', 'r');

$tamanhoDoArquivo = filesize('listaCursos.txt');

$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);*/

?>