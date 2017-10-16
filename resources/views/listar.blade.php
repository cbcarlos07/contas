<table>
    <tr>
        <th>Codigo</th>
        <th>Descricao</th>
        <th>Valor</th>
    </tr>
    @foreach( $contas_pagar as $item )
        <tr>
            <td> {{ $item->id  }}  </td>
            <td> {{ $item->descricao }}  </td>
            <td> {{ $item->valor }}  </td>
        </tr>
    @endforeach
</table>
