<?php $render('header'); ?>


<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">[editar]</a>    
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')" >[excluir]</a>       
            </td>   
        </tr>
        <?php endforeach; ?>
</table>

<?php $render('footer'); ?>
