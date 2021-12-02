<?php 
include_once 'conexao.php';
include_once 'html.php';


//$sql="insert into tbl_alunos(nome,genero,nascimento,bilhete) values('Marcos Gonsalves','Masculino','1994/03/12','2333Meuuu333')";
//mysqli_query($con,$sql);

//echo("inserido");








?>
<body>
<table class="table table-striped">


<thead>
<tr>

<th>Nome</th>
<th>Genero</th>
<th>Nacionalidade</th>
</tr>


</thead>


<tbody>

<?php

$sql="select * from tbl_alunos ";
$gta=mysqli_query($con,$sql);

while($numero=mysqli_fetch_assoc($gta)):




?>
 <tr>

    <td><?php echo $numero['nome']; ?></td>
    <td><?php echo $numero['genero']; ?></td>
    <td><?php echo $numero['nacionalidade']; ?></td>
    <td><div class="btn-group">
        <a href="" class="btn btn-danger btn-sm">Eliminar</a>
    <a href="conexao.php? codigo=<?php echo $numero['codigo_aluno'];?>" class="btn btn-info btn-sm">Editar Registro</a>
</div></td>
 </tr>
<?php endwhile; ?>
</tbody>
</table>

</body>