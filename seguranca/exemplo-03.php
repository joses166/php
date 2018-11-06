<?php 

$pasta = "arquivos";
$permissao = "0775";

if ( !is_dir( $pasta ) ) mkdir( $pasta, $permissao );

echo "Diretório criado com sucesso";

/* 
0 - Sem permissão
1 - Permissão de execução
2 - Permissão de gravação
3 - Permissão de execução e gravação
4 - Permissão de leitura
5 - Permissão de leitura e execução
6 - Permissão de leitura e gravação
7 - Permissão de execução, gravação e leitura ( Permissão Total )
*/
?>