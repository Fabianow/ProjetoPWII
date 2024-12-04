<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#minha-conta">Minha 1  Conta</a></li>
            <li><a href="#meus-cartoes">Meus Cartões</a></li>
            <li><a href="#meus-enderecos">Meus Endereços</a></li>
            <li><a href="#minhas-compras">Minhas Compras</a></li>
        </ul>
    </nav>

    <section id="minha-conta">
        <h2>Minha Conta</h2>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <button type="submit">Salvar</button>
        </form>
    </section>

    <section id="meus-cartoes">
        <h2>Meus Cartões</h2>
        </section>

    <section id="meus-enderecos">
        <h2>Meus Endereços</h2>
        </section>

    <section id="minhas-compras">
        <h2>Minhas Compras</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Produtos</th>
                    <th>Valor Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                </tbody>
        </table>
    </section>

    <script src="perfil.js"></script>
</body>
</html>