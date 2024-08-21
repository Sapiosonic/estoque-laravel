<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/custom.css">
        <title>Controle de estoque</title>
    </head>
    <body>
        <h1>Detalhes do produto: <?= $produto->nome ?></h1>
        <ul>
            <li><strong>Valor: </strong> R$ <?= $produto->valor ?></li>
            <li><strong>Descrição: </strong> <?= $produto->descricao ?></li>
            <li><strong>Quantidade em estoque </strong> <?= $produto->quantidade ?></li>
        </ul>
    </body>
</html>