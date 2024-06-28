<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo Online</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="container">
        <h2>Dados Pessoais:</h2>
        <form id="personal-info-form" action="../PHP/gerar_curriculo.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" id="dataNascimento" name="dataNascimento" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <h2>Experiências Profissionais:</h2>
            <div id="experiencias">
            </div>
            <br>
            <button type="button" id="add-experiencia">+ Adicionar Experiência</button>

            <h2>Referências Pessoais:</h2>
            <div id="referencias">
            </div>
            <br>
            <button type="button" id="add-referencia">+ Adicionar Referência</button>

            <button type="submit">Gerar Currículo</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>
