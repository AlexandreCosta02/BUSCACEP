<?php
    if($_POST['cep'] != ''){
        $ncep = $_POST['cep'];
        $url = "https://viacep.com.br/ws/{$ncep}/xml/";
        $endereco = simplexml_load_file($url);
    }
        
?>