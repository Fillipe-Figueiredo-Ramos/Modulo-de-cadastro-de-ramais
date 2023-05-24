<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
}

#LoginHeader {
    width: 100%;
    height: 120px;
    background-color: #04174c;
}

#LoginHeader ul {
    display: flex;
    align-items: center;
    gap: 50px;
    width: 100%;
    height: 100%;
    list-style: none;
}

#icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    font-size: 50px;
    height: 100%;
    background:cornflowerblue;
    color: #fff;
}

#HeaderTitle {
    width: 40%;
    font-size: 35px;
}

#HeaderTitle h2 {
    color: #fff;
}

#ContainerForm {
    width: 100%;
    height: 100%;
    margin: 70px 0 0 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form {
    display: flex;
    width: 80%;
    text-align: center;
    flex-direction: column;
    align-items: center;
    padding: 50px 20px 100px 20px;
    border-radius: 0.5rem;
    filter: drop-shadow(0 0 27px rgba(0, 0, 0, 0.53));
    background-color: #ffffff;
}

.form-title {
    font-size: 2.25rem;
    line-height: 1.75rem;
    font-weight: 600;
    padding: 25px;
    text-align: center;
    color: #000;
}

.input-container {
    position: relative;
    width: 100%;
}

.input-container input,
.form button {
    outline: none;
    border: 1px solid #e5e7eb;
    margin: 8px 0;
}

.icons {
    font-size: 40px;
}

.input-container input {
    background-color: #fff;
    padding: 1rem;
    padding-right: 3rem;
    font-size: 25px;
    line-height: 1.25rem;
    width: 60%;
    padding: 40px;
    border-radius: 0.5rem;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}



.submit {
    display: block;
    background-color: cornflowerblue;
    color: #ffffff;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 500;
    width: 40%;
    padding: 20px 0 20px 0;
    border-radius: 0.5rem;
    text-transform: uppercase;
}

.submit p {
    font-size: 25px;
}

.signup-link {
    color: #6B7280;
    font-size: 0.875rem;
    line-height: 1.25rem;
    text-align: center;
    padding: 10px;
}

.FinalRow a,
.FinalRow p {
    font-size: 20px;
}
    </style>
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