<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $data['title']; ?>

    <table>
        <thead>
            <th>Landnaam</th>
            <th>Hoofdstad</th>
            <th>Werelddeel</th>
            <th>Inwoners</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>
    <a href="<?= URLROOT ?>/countries/create">create</a>
</body>
</html>