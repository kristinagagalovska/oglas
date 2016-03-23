<h4>Внеси нов оглас:</h4>
<form action="/advertisements/add" method="post">
    <input name="naslov" placeholder="Внеси наслов на оглас" type="text"/></br>
    </br><input name="opis" placeholder="Внеси опис на оглас" type="text"/></br>
    </br><select name="status">
        <option selected disabled name>Избери</option>
        <option value="prodava">Се продава</option>
        <option value="iznajmuva">Се изнајмува</option>
    </select>
    <select name="objekt">
        <option selected disabled name>Избери</option>
        <option value="apartman">Апартман</option>
        <option value="garsonjera">Гарсоњера</option>
        <option value="stan">Стан</option>
        <option value="kukja">Куќа</option>
        <option value="soba">Соба</option>
    </select></br>
    </br><input name="adresa" placeholder="Внеси адреса" type="text"/>
    <select name="grad">
        <option selected disabled name>Избери</option>
        <option value="skopje">Скопје</option>
        <option value="bitola">Битола</option>
        <option value="ohrid">Охрид</option>
        <option value="prilep">Прилеп</option>
        <option value="stip">Штип</option>
    </select></br>
    </br><input name="cena" placeholder="Внеси цена" type="text"/> </br>
    </br><select name="namesten">
        <option selected disabled name>Избери</option>
        <option value="da">Да</option>
        <option value="ne">Не</option>
    </select>
    <select name="parno">
        <option selected disabled name>Избери</option>
        <option value="da">Да</option>
        <option value="ne">Не</option>
    </select>
    <select name="lift">
        <option selected disabled name>Избери</option>
        <option value="da">Да</option>
        <option value="ne">Не</option>
    </select></br>
    </br><input name="kat" placeholder="Внеси кат" type="text"/></br>
    </br><select name="vremetraenje">
        <option selected disabled name>Избери</option>
        <option value="7">7 дена</option>
        <option value="14">14 дена</option>
    </select></br>
    </br><input type="submit" name="save"/>
</form>