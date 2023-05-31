<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Login</title>
</head>

<body>
    <header>
        <div id="LoginHeader">
            <ul>
                <li id="icon"><ion-icon name="call-outline"></ion-icon></li>
                <li id="HeaderTitle">
                    <h2>Tefone - Ramais</h2>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <div id="ContainerForm">
            <form class="form">
                <p class="form-title">Entre na sua conta</p>
                <div class="input-container">
                    <input placeholder="Digite seu E-mail" type="email">
                    <ion-icon class="icons" name="mail-outline"></ion-icon>
                    <input placeholder="Digite sua senha" type="password">
                    <ion-icon class="icons" name="lock-closed-outline"></ion-icon>
                </div>
                <button class="submit" type="submit">
                    <p>Entrar</p>
                </button>
                <div class="FinalRow">
                    <p class="signup-link">
                        Sem conta ?
                        <a href="">Cadastrar</a>
                    </p>
                    <a href="">Esqueci minha senha</a>
                </div>

            </form>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>