<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ assets('css/index.css') }}">
    <title>Telefones</title>
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