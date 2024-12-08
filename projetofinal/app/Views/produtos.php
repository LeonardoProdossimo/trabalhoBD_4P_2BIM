<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            ul.pagination li {
                display: inline;
            }

            ul.pagination li a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
            }

            .active {
                background-color: #198754;
                color: #FFF !important;
            }

            ul.pagination li a:hover:not(.active) {
                background-color: #DDD;

            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mt-4">Usuários</h2>
                <?php echo anchor(base_url('produto/create'), 'Novo produto', ['class'=>'btn btn-success mb-3 mt-2']); ?>
                <table class="table">
                    <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Data de Cadastro</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Categoria</th>
                    </tr>
                    <?php
                    foreach ($produtos as $produto): ?>
                        <tr>
                        <td><?php
                            echo $produto['idproduto'] ?></td>
                        <td><?php
                            echo $produto['descricao'] ?></td>
                        <td><?php
                            echo $produto['datacadastro'] ?></td>
                        <td><?php
                            echo 'R$ '.($produto['preco'] == null ? 0.00 : $produto['preco']) ?></td>
                        <td><?php
                            echo $produto['quantidade_estoque'] ?></td>
                            <td><?php
                            echo $produto['categoria'] ?></td>
                        <td>
                            <?php
                            echo anchor('produto/edit/' . $produto['idproduto'], 'Editar') ?> -
                            <?php
                            echo anchor(
                                'produto/delete/' . $produto['idproduto'],
                                'Excluir',
                                ['onclick' => "return confirm('Deseja excluir o registro?');"]
                            ) ?>
                        </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </table>
                    <?php
                    echo $pager->links(); ?>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
            </body>
</html>