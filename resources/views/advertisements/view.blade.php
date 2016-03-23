<h2>Листа на огласи:</h2>
<table>
    @foreach($advertisements as $advertisement)
        <tr>
            <td><p><b>{{$advertisement->naslov}}</b></p></td>
            <td><p>{{$advertisement->opis}}</p></td>
            <td><a href="{{route('advertisements.show',$advertisement->id)}}">Show</a></td>
        </tr>
        @endforeach
</table>