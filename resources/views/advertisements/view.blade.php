<h2>List of Advertisements:</h2>
<table>
    @foreach($advertisements as $advertisement)
        <tr>
            <td><p>{{$advertisement->naslov}}</p></td>
        </tr>
        @endforeach
</table>