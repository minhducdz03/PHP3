<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Xin chao cac ban</h1>
    <table>
        <thead>
            <tr>
                <tr>ID</tr>
                <tr>Name</tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $value)
            <tr>
                <td><?=$value['id'] ?></td>
                <td><?=$value['name'] ?></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>