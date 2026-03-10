<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <main>
    <div class="header content">
        <h2>Gestão de Usuários</h2>
        <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Acesso</th>
                <th>Status</th>
                <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Hewerton Marques</td>
                    <td>hewerton@unifev..edu.br</td>
                    <td>Administrador</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Maria</td>
                    <td>maria@unifev.edu.com</td>
                    <td>Supervisora</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
</body>
</html>