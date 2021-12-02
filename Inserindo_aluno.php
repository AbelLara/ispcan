<?php
include_once 'conexao2.php';

$nome="fed";
$numero="1278";

//$sql="insert into dados (nome,numero)values('aroz',89)";
$sql='CALL sp_text("massaroca",766)';
$variavel=mysqli_query($con, $sql);
if(mysqli_insert_id($con)):

    Echo('inserido com sucesso');
else:
    Echo('Ja existe usuario com a mesma senha');
endif;

