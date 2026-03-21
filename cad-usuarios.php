<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https:ui-avatars.com/api/?name=Hewerton+Marques&background=000000&color=fff" alt="Avatar">
                <span>Hewerton</span>
            </div>
        </nav>

        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
                    <p> Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>
                <form action="processa.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="email" placeholder="nome@empresa.com" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Nome Completo</label>
                        <input type="email" id="email" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
                        </div>
                        <div class="form-group flex-1">
                            <label for="senha">Nivel</label>
                            <select id="nivel" name="nivel">
                                <opction value="1">Usuário</opction>
                                <opction value="2">Administrador</opction>
                            </select>
                        </div>
                    </div>
                    <div class="form-action">
                        <button type="submit" class="btn-save">Finalizar Cadastro</button>
                        <a href="index.php" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
    </footer>
</body>

</html>