<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\Users\fillipe.ramos\Documents\code\Cadastro de Ramais\projeto_laravel_via_composer10.x\resources\css\index.css">
    <title>Telefones</title>
    <style>
    
    * {
    margin: 0;
    padding: 0;
}

main {
    padding: 50px;
}

#RamaisHeader {
    display: flex;
    width: 100%;
    height: 120px;
    background-color: #04174c;
}

#RamaisHeader ul {
    display: flex;
    align-items: center;
    gap: 50px;
    width: 100%;
    height: 100%;
    list-style: none;
}

#RamaisHeader h2 {
    color: #fff;
}

.headerIcons {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    font-size: 50px;
    height: 100%;
    background: cornflowerblue;
    color: #fff;
    cursor: pointer;
}

#RamaisTitle {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    gap: 10px;
    align-items: center;
}

.icon {
    color: white;
    font-size: 30px;
}

#cardContainer {
    display: flex;
    justify-content: center;
    width: 100%;
}

.card {
    display: flex;
    justify-content: center;
    width: 80%;
    height: 254px;
    border-radius: 30px;
    filter: drop-shadow(0 0 27px rgba(0, 0, 0, 0.53));
    background-color: #ffffff;
    flex-direction: column;
    align-items: center;
}

#cardTitle {
    padding: 30px;
}

#TableRow {
    display: flex;
    gap: 250px;
}

.form-box {
    display: none;
    width: 80%;
    justify-content: center;
    overflow: hidden;
    border-radius: 16px;
    color: #010101;
    filter: drop-shadow(0 0 27px rgba(0, 0, 0, 0.53));
    background-color: #ffffff;
}

#CloseBtncotainer {
    width: 100%;
    display: flex;
    justify-content: flex-end;
}

#CloseBtn {
    font-size: 30px;
    cursor: pointer;
}

.form {
    position: relative;
    display: flex;
    width: 80%;
    align-items: center;
    flex-direction: column;
    padding: 32px 24px 24px;
    gap: 16px;
    text-align: center;
}

.title {
    font-weight: bold;
    font-size: 25px;
}

.subtitle {
    font-size: 25px;
    color: #666;
}

.form-container {
    overflow: hidden;
    border-radius: 8px;
    background-color: #fff;
    margin: 1rem 0 .5rem;
    width: 100%;
}

.input {
    background: none;
    border: 0;
    outline: 0;
    height: 40px;
    width: 100%;
    border-bottom: 1px solid #eee;
    font-size: .9rem;
    padding: 8px 15px;
}

.form-section {
    padding: 16px;
    font-size: .85rem;
    background-color: #e0ecfb;
    box-shadow: rgb(0 0 0 / 8%) 0 -1px;
}

.form-section a {
    font-weight: bold;
    color: #0066ff;
    transition: color .3s ease;
}

.form-section a:hover {
    color: #005ce6;
    text-decoration: underline;
}

.form button {
    background-color: cornflowerblue;
    color: #fff;
    border: 0;
    border-radius: 24px;
    padding: 10px 16px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color .3s ease;
}

.form button:hover {
    background-color: #005ce6;
}</style>
</head>

<body>
    <header>
        <div id="RamaisHeader">
            <div class="headerIcons">
                <a href="login.html">
                    <ion-icon class="icon" name="person-outline"></ion-icon>
                </a>
            </div>
            <ul>
                <li id="RamaisTitle">
                    <h2>TELEFONES NOVACAP - RAMAIS</h2>
                    <ion-icon class="icon" name="call-outline"></ion-icon>
                </li>
            </ul>
            <div id="AddNew" class="headerIcons">
                <ion-icon class="icon" name="add-outline"></ion-icon>
            </div>
        </div>
        <main>
            <div id="cardContainer">
                <div class="form-box">
                    <form class="form">
                        <div id="CloseBtncotainer">
                            <span><ion-icon id="CloseBtn" name="close-outline"></ion-icon></span>
                        </div>
                        <span class="title">Registrar Novo</span>
                        <span class="subtitle">Registre um novo ramal.</span>
                        <div class="form-container">
                            <input type="text" class="input" placeholder="Departamento:"> 
                            <input type="text" class="input" placeholder="Sigla:">
                            <input type="text" class="input" placeholder="Lotação:">
                            <input type="text" class="input" placeholder="Ramal:">
                        </div>
                        <button>Registrar</button>
                    </form>
                </div>
                <div class="card">
                    <div id="cardTitle">
                        <h1>TELEFONE NOVACAP - RAMAIS</h1>
                    </div>
                    <table>
                        <thead>
                            <tr id="TableRow">
                                <th>Departamento</th>
                                <th>Sigla</th>
                                <th>Lotação</th>
                                <th>Ramal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </header>




    <script>
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>