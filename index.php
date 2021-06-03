<?php
    require_once 'includes/autoload.php';

    $fieldOptions = [
        'Technical support',
        'Project Manager',
        'Business analyst',
        'Web developer',
        'Software tester',
        'Systems analyst',
        'Software engineer',
    ];

    $role = new Exercicio6\Exercicio6();
    $role->setFieldName('role');
    $role->setFieldOptions($fieldOptions);

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Exercício 6</title>
    <meta name="description" content="Exercício 6">
    <meta name="author" content="Thiago Ganimi">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>

<body>

<div class="container">

    <form action="#" method="post">

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>

        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" class="form-control" name="email" formnovalidate id="email" />
        </div>

        <div class="form-group">
            <label for="Role">Role:</label>
            <?php
                $role->renderSelectField('form-control');
            ?>
        </div>
        
        <button type="submit" class="btn btn-primary" id="btn-send">Save</button>
    </form>
</div>
</body>
</html>

