@extends('principal');
@section('title', 'Listagem de contas');
@section('content');
<script type="text/javascript">
   function apagar( url ) {
       if( window.confirm('Deseja realmente apagar?') ){
           window.location = url
       }
   }
</script>
<h1>Lista de Contas Pagar</h1>
@if( old('insert') )
  <div class="alert alert-success">
      <strong>Sucesso</strong>
     {{ old('descricao') }} cadastrada
  </div>
@endif
@if( old('update') )
    <div class="alert alert-success">
        <strong>Sucesso</strong>
        {{ old('descricao') }} alterado
    </div>
@endif
<table width="100%" class="table table-striped table-bordered table-hover">
    <tr>
        <th>Codigo</th>
        <th>Descricao</th>
        <th>Valor</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>
    @foreach( $contas_pagar as $item )
        <tr>
            <td> {{ $item->id  }}  </td>
            <td> {{ $item->descricao }}  </td>
            <td> {{ $item->valor }}  </td>
            <td> <a class="btn btn-small btn-info" href="{{ action('ContasPagarController@editar', $item->id) }}">Editar</a>   </td>
            <td> <a class="btn btn-small btn-danger" href="#" onclick="apagar('{{ action("ContasPagarController@apagar", $item->id) }}')">Apagar</a>   </td>
        </tr>
    @endforeach
</table>
<a class="btn btn-small btn-info" href="{{ action('ContasPagarController@cadastro') }}">Cadastrar</a>
    @stop
