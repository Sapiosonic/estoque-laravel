<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="/css/custom.css">
    </head>
    
    <body>
        <div class="container">
            <h1>Listagem de produtos</h1>
            <table class="table table-striped table-bordered table-hover">
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $produto->nome ?></td>
                    <td><?= $produto->valor ?></td>
                    <td><?= $produto->descricao ?></td>
                    <td><?= $produto->quantidade ?></td>
                </tr>
                <?php endforeach ?>
            </table>
            <button class="btn btn-primary">Click me!</button>
        </div>
    </body>
</html>
