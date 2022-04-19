<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Hola Form</h3>
    <form action="<?= site_url('/home/formulario') ?>" method="POST">
        <input type="time" name="name" placeholder="Your Name">
        <button>Hi</button>
        <p>
        <?=$msg?>
        </p>
    </form>
</body>
</html>