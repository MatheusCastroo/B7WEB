<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>
<form method="POST" action="<? $base; ?>/novo">
    <label for="">Nome: <br />
        <input type="text" name="name"></label><br /><br />
    <label for="">E-mail:<br /></label>
    <input type="text" name="name"></label><br /><br />
    <input type="submit" value="Adicionar">

</form>
<?php $render('footer'); ?>