<h1>Editar Usuário</h1>
<?php 
    $sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
    <div class="mb-3">
        <label>Nome do usuário</label>
        <input type="text" name="nome_usuario" class="form-control" value="<?php print $row->nome_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="number" name="cpf_usuario" class="form-control" value="<?php print $row->cpf_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email_usuario" class="form-control" value="<?php print $row->email_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="fone_usuario" class="form-control" value="<?php print $row->fone_usuario ?>" required>
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="dt_nasc_usuario" class="form-control" value="<?php print $row->dt_nasc_usuario ?>" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Enviar</button>
    </div>
</form>