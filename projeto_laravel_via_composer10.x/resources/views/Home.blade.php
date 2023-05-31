<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Telefones</title>
</head>

<body>
    <header>
        <div id="RamaisHeader">
            <ul>
                <li id="RamaisTitle">
                    <h2>TELEFONES NOVACAP - RAMAIS</h2>
                    <ion-icon class="icon" name="call-outline"></ion-icon>
                </li>
            </ul>
        </div>
        <main>
            <div id="cardContainer">
                <div class="card">
                    <div id="cardTitle">
                        <h1>TELEFONE NOVACAP - RAMAIS</h1>
                    </div>
                    <table>
                        <thead>
                            <tr id="TableRow">
                                <th>DESCRIÇÃO LOTAÇÃO ANTERIOR</th>
                                <th>SIGLA ANTERIOR</th>
                                <th>DESCRIÇÃO LOTAÇÃO NOVA</th>
                                <th>SIGLA NOVA</th>
                                <th>RAMAL</th>
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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>