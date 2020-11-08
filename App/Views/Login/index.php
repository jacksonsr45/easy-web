<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MicroFramework | Login</title>
    <link rel="stylesheet" href="<?= assets('semantic_ui/semantic.min.css'); ?>">
    <link rel="stylesheet" href="<?= assets('css/login.css'); ?>">
</head>
<body>
    <div class="ui sixteen column grid">
        <div id="login-center">
            <form class="ui form">
            <h1>Bem vindo MicroFramework!</h1>
            <div class="field">
                <label>Usuário</label>
                <input type="text" name="username" placeholder="Usuário">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field">
                <div class="ui checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>Manter conectado!</label>
                </div>
            </div>
            <button class="ui button" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>