<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
  <title>BarbeariaOn</title>
  <!--stylesheet-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <link href="styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link href="_css/servico.css" rel="stylesheet" type="text/css" />

  <!--scripts-->
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/all-plugins.js"></script>
  <script type="text/javascript" src="scripts/plugins-activate.js"></script>
</head>
<style>
  div.bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
}

div.auth {
    width: 100%;
    max-width: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    border-radius: 10px;
    box-shadow: 0 20px 50px rgba(8, 112, 184, 0.7);
    
}

div.auth p.title{
    padding: 20px;
    text-align: center;
    font-size: 24pt;
    font-weight: bold;
    color: black;
}

div.auth form{
    display: block;
    margin: auto;
    padding: 20px;
}

div.auth input.field{
    display: block;
    margin: 10px auto;
    width: 100%;
    max-width: 400px;
    padding: 5px 10px;
    padding-left: 30px;
    border: 1px solid #CCC;
    border-radius: 3px;
}

div.auth select.field{
    display: block;
    margin: 10px auto;
    width: 100%;
    max-width: 400px;
    padding: 5px 10px;
    padding-left: 30px;
    border: 1px solid #CCC;
    border-radius: 3px;
}

div.auth input[type="text"]{
    background: url(images/user.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}

div.auth input[type="email"]{
    background: url(images/email.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}

div.auth input[type="password"]{
    background: url(images/password.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}
div.auth input[type="number"]{
    background: url(images/gastos.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}
div.auth input[type="date"]{
    background: url(images/calendario.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}

div.auth input[id="presente"]{
    background: url(images/presente.png) no-repeat scroll 7px 7px;
    background-size: 16px;
}

div.auth button {
    display: block;
    margin: 20px auto;
    padding: 10px 25px;
    border: 1px solid #34ADFF;
    background-color: #6262e2;
    border-radius: 40px;
    color: #fff;
}

div.auth button:hover {
    background-color: #34ADFF;
    border-color: #34ADFF;
    color: #FFF;
    cursor: pointer;
}

div.auth button:disabled {
    opacity: 0.5;
    cursor: default;
}

div.auth p.toogle{
    padding: 20px;
    padding-top: 0px;
    text-align: center;
    cursor: pointer;
    color: black;
}

div.auth p.toogle:hover{
    text-decoration: underline #000;
}

div.register{
    display: none;
}
</style>
<body>

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>BarbeariaOn</span>
            </h3>


            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboards.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="equipe.php">
                        <span class="ti-face-smile"></span>
                        <span>Equipe</span>
                    </a>
                </li>
                <li>
                    <a href="controleGastos.php">
                        <span class="ti-money"></span>
                        <span>Controle de Gastos</span>
                    </a>
                </li>
                <li>
                    <a href="cadastrar.php">
                        <span class="ti-clipboard"></span>
                        <span>Cadastrar</span>
                    </a>
                </li>
                <li>
                    <a href="graficos.php">
                        <span class="ti-bar-chart-alt"></span>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="agenda.php">
                        <span class="ti-agenda"></span>
                        <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="index.php"><span style="display:flex; justify-content: center; background-color:black; padding: 10px; border-radius:15px; " class="ti-arrow-left"></span></span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
    <section id="Banner1" class="content-section">
        <div class="bg"></div>

        <div class="auth login">
            <p class="title">Registre um produto de cada vez</p>
            <form action="php/controleGastosCode.php" method="POST" id="login">
                <input type="text" name="nomeC" class="field" required="required" placeholder="Seu nome" />
                <select name="produto" class="form-control field" id="exampleFormControlSelect1">
                <option selected>Produtos</option>
                    <option value="Gola higiênica">Gola higiênica</option>
                    <option value="Papel higiênico">Papel higiênico</option>
                    <option value="lâmina gillette">lâmina gillette</option>
                </select>
                <input type="number" class="field" name="valorCompra" min="0" value="0" required="required" step="any" placeholder="valor da Compra">
                
                <button class="submit" value="enviar">Cadastrar</button>
            </form>
        </div>

    </section>
    </div>
</body>

</html>