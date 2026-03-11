<?php

$dados_brutos = [
    'nome'     => '   josé da silva   ',
    'email'    => 'JOSE.SILVA@EMAIL.COM',
    'nasc'     => '15/05/1990',
    'compras'  => '120.50, 80.00, 15.75, 250.00, 99.90'
];

// PROCESSAMENTO

$nome_limpo = trim($dados_brutos['nome']);
$nome_lower = strtolower($nome_limpo);
$email_limpo = strtolower($dados_brutos['email']);
$nome_formatado = ucwords($nome_lower);

$compras_array = explode(',', $dados_brutos['compras']);

$hoje = new DateTime();
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);
$intervalo = $hoje->diff($data_nascimento);
$idade = $intervalo->y;

$total_de_compras = count($compras_array);
$valor_total_gasto = array_sum($compras_array);
$maior_compra = max($compras_array);
$menor_compra = min($compras_array);

$media_gasto = 0;
if ($total_de_compras > 0) {
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Desafio 3</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:white;
    padding:30px;
    width:400px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}

h1{
    text-align:center;
    color:#333;
}

.dados{
    margin-top:20px;
}

.item{
    padding:8px;
    border-bottom:1px solid #ddd;
}

.estatisticas{
    margin-top:20px;
}

.valor{
    font-weight:bold;
    color: black;
}

.data{
    font-size:12px;
    color:gray;
    text-align:center;
    margin-top:15px;
}

</style>

</head>

<body>

<div class="container">

<h1>Relatório do Cliente</h1>

<div class="dados">

<div class="item">Nome: <span class="valor"><?= $nome_formatado ?></span></div>
<div class="item">Email: <span class="valor"><?= $email_limpo ?></span></div>
<div class="item">Idade: <span class="valor"><?= $idade ?> anos</span></div>

</div>

<div class="estatisticas">

<h3>Estatísticas de Compras</h3>

<div class="item">Total de pedidos: <span class="valor"><?= $total_de_compras ?></span></div>

<div class="item">Valor total gasto: 
<span class="valor">
R$ <?= number_format($valor_total_gasto,2,',','.') ?>
</span>
</div>

<div class="item">Média por pedido: 
<span class="valor">
R$ <?= number_format($media_gasto,2,',','.') ?>
</span>
</div>

<div class="item">Maior compra: 
<span class="valor">
R$ <?= number_format($maior_compra,2,',','.') ?>
</span>
</div>

<div class="item">Menor compra: 
<span class="valor">
R$ <?= number_format($menor_compra,2,',','.') ?>
</span>
</div>

</div>

<div class="data">
Gerado em <?= $hoje->format('d/m/Y H:i:s') ?>
</div>

</div>

</body>
</html>