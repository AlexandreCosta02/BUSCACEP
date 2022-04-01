<?php
    include('api.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>BUSCA CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <link rel="icon" href="IMAGENS/Lupa.png">
</head>
<body>
    <div class="row">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-6 offset-1 offset-sm-1 offset-md-2 offset-lg-3 offset-xl-3 offset-xxl-3" id="buscaCEP">
            <div class="row">
                <div class="col-lg-10 col-xl-10 col-xxl-10 offset-lg-1 offset-xl-1 offset-xxl-1" id="imgLogo">
                    <img src="IMAGENS/buscacep.png" class="img-fluid">
                </div>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col" id="linhaCep">
                        <label>Digite o CEP:</label>
                        <input type="text" name="cep" pattern="[0-9]{5}-[0-9]{3}" >
                        <button type="submit" class="btn btn-success">Consultar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 offset-1 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1" id="informacoes">
                        <label id="lblInfo" for="ncep">CEP:</label>
                        <input type="text" name="ncep" value="<?php echo strval($endereco->cep);?>" readonly id="edtcep">  
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="localidade">Cidade:</label>
                        <input type="text" name="localidade" value="<?php echo strval($endereco->localidade);?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1" id="informacoes">
                        <label id="lblInfo" for="logradouro">Logradouro:</label>
                        <input type="text" name="logradouro" value="<?php echo strval($endereco->logradouro);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="bairro">Bairro:</label>
                        <input type="text" name="bairro" value="<?php echo strval($endereco->bairro);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="complemento">Complemento:</label>
                        <input type="text" name="complemento" value="<?php echo strval($endereco->complemento);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-1 col-xl-1 col-xxl-1 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label>Uf:</label>
                        <input type="text" name="uf" value="<?php echo strval($endereco->uf);?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-5 col-lg-1 col-xl-1 col-xxl-1 offset-1 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1" id="informacoes">
                        <label id="lblInfo" for="ddd">DDD:</label>
                        <input type="text" name="ddd" value="<?php echo strval($endereco->ddd);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="ibge">Código IBGE:</label>
                        <input type="text" name="ibge" value="<?php echo strval($endereco->ibge);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-1 offset-sm-1 offset-md-1 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="gia">Gia:</label>
                        <input type="text" name="gia" value="<?php echo strval($endereco->gia);?>" readonly>
                    </div>
                    <div class="col-5 col-sm-5 col-md-5 col-lg-3 col-xl-3 col-xxl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-0" id="informacoes">
                        <label id="lblInfo" for="siafi">Siafi:</label>
                        <input type="text" name="siafi" value="<?php echo strval($endereco->siafi);?>" readonly>
                    </div>
                </div>
            </form>
            <?php
                include('conexao.php');
                if($_POST){
                    $cep = $_POST['ncep'];
                    $localidade = $_POST['localidade'];
                    $logradouro = $_POST['logradouro'];
                    $complemento = $_POST['complemento'];
                    $bairro = $_POST['bairro'];
                    $uf = $_POST['uf'];
                    $ddd = $_POST['ddd'];
                    $ibge = $_POST['ibge'];
                    $gia = $_POST['gia'];
                    $siafi = $_POST['siafi'];

                    $sql = 'insert into TB_BUSCA values(null, "'.$cep.'","'.$localidade.'","'.$logradouro.'","'.$complemento.'","'.$bairro.'","'.$uf.'","'.$ddd.'","'.$ibge.'","'.$gia.'","'.$siafi.'")';
                    if($cep != ''){
                        $retorno = $conexao->query($sql);
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>