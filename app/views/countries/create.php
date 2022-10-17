<form action="<?= URLROOT ?>/countries/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                <label for="Name">Naam: </label>    
                <input required id="Name" type="text" name="Name">
                </td>
            </tr>
            <tr>
                <td>
                <label for="CapitalCity">Hoofdstad: </label>    
                <input required id="CapitalCity" type="text" name="CapitalCity">
                </td>
            </tr>
            <tr>
                <td>
                <label for="Continent">Continent: </label>    
                <input required id="Continent" type="text" name="Continent">
                </td>
            </tr>
            <tr>
                <td>
                <label for="Population">Populatie: </label>    
                <input required id="Population" type="number" name="Population">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="aanmaken">
                </td>
            </tr>
        </tbody>
    </table>
</form>