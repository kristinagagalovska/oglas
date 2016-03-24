<h2>Листа на огласи:</h2>
<table>
    @foreach($advertisements as $advertisement)
        <tr>
            <td><p><b>{{$advertisement->naslov}}</b></p></td>
            <td><p>{{$advertisement->opis}}</p></td>
            <td><a href="{{route('advertisements.show',$advertisement->id)}}">Show</a></td>
            <td><a href="{{route('advertisements.edit',$advertisement->id)}}">Edit</a></td>
            <td><a href="{{route('advertisements.delete',$advertisement->id)}}">Delete</a></td>
        </tr>
        @endforeach
</table>