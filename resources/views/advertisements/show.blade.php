<table>
        <tr>
            <td><p><b>{{$advertisement->naslov}}</b></p></td>
            <td><p>{{$advertisement->opis}}</p></td>
            <td><p>{{$advertisement->status}}</p></td>
            <td><p>{{$advertisement->objekt}}</p></td>
            <td><p>{{$advertisement->adresa}}</p></td>
            <td><p>{{$advertisement->grad}}</p></td>
            <td><p>{{$advertisement->cena}}</p></td>
            <td><p>{{$advertisement->namesten}}</p></td>
            <td><p>{{$advertisement->parno}}</p></td>
            <td><p>{{$advertisement->lift}}</p></td>
            <td><p>{{$advertisement->kat}}</p></td>
            <td><a href="{{route('advertisements.view')}}">Back</a></td>
        </tr>
</table>