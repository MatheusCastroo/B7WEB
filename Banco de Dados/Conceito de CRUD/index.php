<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();

?>
<a href="adicionar.php">Adicionar Usuário</a>
<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>AÇÕES</th>
</tr>
<?php foreach ($lista as $usuario):?>
    <tr>
        <td><?php $usuario->getId();?></td>
        <td><?php $usuario->getNome(); ?></td>
        <td><?php $usuario->getEmail();?></td>
        <td>
            <a href="editar.php?id=<?=$usuario['id'];?>">[ Editar ]</a>
            <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Deseja excluir?')">[ Excluir ]</a>
        </td>
    </tr>
<?php endforeach ?>
</table>