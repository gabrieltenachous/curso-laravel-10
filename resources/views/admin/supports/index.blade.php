<h1>Listagem dos supports</h1>
{!! $xss !!}}
<table>
    <thead>
        <th>id</th>
        <th>status</th>
        <th>descrição</th>
    </thead>
    <tbody>
        @foreach($supports as $suport)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@foreach($supports as $support)

@endforeach
