<div class="base-home">
    <h1 class="titulo"><span class="cor">Exclui</span> cadastro</h1>
    <div class="base-formulario">
            <label>Nome</label>
            <input name="txt_nome" value="<?php echo $cliente->nome ?>" type="text" placeholder="Insira umm nome">
            <label>Email</label>
            <input name="txt_email" value="<?php echo $cliente->email ?>" type="text" placeholder="Insira um email">
            <label>Telefone</label>
            <input name="txt_fone" value="<?php echo $cliente->fone ?>" type="text" placeholder="Insira seu telefone">

            <a href="<?php echo URL_BASE ."cliente/delete/" .$cliente->id_cliente."/S" ?>" class="btn">Excluir</a>
    </div>
</div>