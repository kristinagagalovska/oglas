<h2>Листа на огласи:</h2>
<form action="/advertisements/view" method="post">
<table>
    <tr>
        <td><select name="status">
                <option selected disabled name>Статус</option>
                <option value="site">Сите</option>
                <option value="prodava">Се продава</option>
                <option value="iznajmuva">Се изнајмува</option>
            </select>
        </td>
        <td><select name="objekt">
                <option selected disabled name>Избери</option>
                <option value="site">Сите</option>
                <option value="apartman">Апартман</option>
                <option value="garsonjera">Гарсоњера</option>
                <option value="stan">Стан</option>
                <option value="kukja">Куќа</option>
                <option value="soba">Соба</option>
            </select>
        </td>
        <td>
            <select name="grad">
                <option selected disabled name>Избери</option>
                <option value="site">Сите</option>
                <option value="skopje">Скопје</option>
                <option value="bitola">Битола</option>
                <option value="ohrid">Охрид</option>
                <option value="prilep">Прилеп</option>
                <option value="stip">Штип</option>
            </select>
        </td>
        <td>
            <select name="id">
                <option selected disabled name>Избери</option>
                <option value="1">1</option>
                <option value="4">4</option>
            </select>
        </td>

        <td><input type="submit" name="search"/></td>
    </tr>
</table>
</form>
<table>
    @foreach($advertisements as $advertisement)
        <tr>
            <td><p><b>{{$advertisement->naslov}}</b></p></td>
            <td><p>{{$advertisement->opis}}</p></td>
            <td><a href="{{route('advertisements.show',$advertisement->id)}}">Show</a></td>
        </tr>
    @endforeach
</table>
