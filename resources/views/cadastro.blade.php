<h1>Cadastro de Contas</h1>
<form action="/contas/salvar" method="post">
   <div class="form-group">
       <label>Descrição:</label>
       <input type="text" name="descricao" class="form-control">
   </div>

    <div class="form-group">
        <label>Valor:</label>
        <input type="text" name="valor" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>