<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$_ENV["BASE_URL"]."app/assets/libraries/bootstrap.css"?>">
    <script src="<?=$_ENV["BASE_URL"]."app/assets/libraries/bootstrap.js"?>"></script>
    <link rel="stylesheet" href="<?=$_ENV["BASE_URL"]."app/assets/css/register.css"?>">
    <link rel="shortcut icon" href="<?=$_ENV["BASE_URL"]."app/assets/images/logo.png"?>" />
    <title>Registro</title>
</head>
<body>
    <div id="content-area" class="card p-3">
        <form>
            <div id="logo"><img src="<?=$_ENV["BASE_URL"]."app/assets/images/logo.png"?>"></div>
            <div class="row">
                <div class="form-group col-12 mb-3">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-12 mb-3">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12 col-md-6 col-lg-6 mb-3">
                    <label for="inputAddress">Senha</label>
                    <input type="password" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-sm-12 col-md-6 col-lg-6 mb-3">
                    <label for="inputAddress2">Senha novamente</label>
                    <input type="password" class="form-control" id="inputAddress2">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-12 mb-3">
                    <label for="inputState">Cargo</label>
                    <select id="inputState" class="form-control">
                        <option selected>Selecione</option>
                        <option>Programador</option>
                        <option>Assistênte</option>
                        <option>Estagiário</option>
                    </select>
                </div>
                <div class="form-group col-12">
                    <label for="inputZip">Token</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success">Registrar</button>
            </div>
        </form>
    </div>
</body>
</html>