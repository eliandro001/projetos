<h1>Editar Atendente</h1>
<?php
    $sql = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST['id_atendente'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_atendente" value="<?php print $row->id_atendente; ?>">
    <div class="mb-3">
        <label>Nome do atendente</label>
        <input type="text" name="nome_atendente" class="form-control" value="<?php print $row->nome_atendente ?>" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_atendente" class="form-control" value="<?php print $row->cpf_atendente ?>" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email_atendente" class="form-control" value="<?php print $row->email_atendente ?>" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="fone_atendente" class="form-control" value="<?php print $row->fone_atendente ?>" required>
    </div>
    <div class="mb-3">
        <button class="btn btn-success">Enviar</button>
    </div>
</form>