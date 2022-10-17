<form action="<?= URLROOT ?>/countries/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="Name" value="<?= $data['row']->Name ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="CapitalCity" value="<?= $data['row']->CapitalCity ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="Continent" value="<?= $data['row']->Continent ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="Population" value="<?= $data['row']->Population ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?= $data['row']->id ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="aanpassen">
                </td>
            </tr>
        </tbody>
    </table>
</form>