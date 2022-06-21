<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Tintas</title>
</head>
<body>
    
    <section>
    <h1>Digital Republic - Code Challenge</h1>
    <form method="POST">
        <div class="porta porta1">

            <h1>Parede 1</h1>
            Altura da Parede:<br/>
            <input type="text" name="altura1" placeholder="Digite aqui a altura da parede">
            Largura da Parede<br/>
            <input type="text" name="largura1" placeholder="Digite aqui a largura da parede">
            Quantidade de portas<br/>
            <input type="text" name="porta1" placeholder="Digite aqui a quantida de portas">
            Quantidade de Janelas<br/>
            <input type="text" name="janela1" placeholder="Digite aqui a quantidade de janelas">

        </div>
        <div class="porta porta2">

            <h1>Parede 2</h1>
            Altura da Parede:<br/>
            <input type="text" name="altura2" placeholder="Digite aqui a altura da parede" >
            Largura da Parede<br/>
            <input type="text" name="largura2" placeholder="Digite aqui a largura da parede">
            Quantidade de portas<br/>
            <input type="text" name="porta2" placeholder="Digite aqui a quantida de portas">
            Quantidade de portas<br/>
            <input type="text" name="janela2" placeholder="Digite aqui a quantida de janelas">

        </div>
        <div class="porta porta3">
                
            <h1>Parede 3</h1>
            Altura da Parede:<br/>
            <input type="text" name="altura3" placeholder="Digite aqui a altura da parede">
            Largura da Parede<br/>
            <input type="text" name="largura3" placeholder="Digite aqui a largura da parede">
            Quantidade de portas<br/>
            <input type="text" name="porta3" placeholder="Digite aqui a quantida de portas">
            Quantidade de portas<br/>
            <input type="text" name="janela3" placeholder="Digite aqui a quantida de janelas">


        </div>
        <div class="porta porta4">

            <h1>Parede 4</h1>
            Altura da Parede:<br/>
            <input type="text" name="altura4" placeholder="Digite aqui a altura da parede">
            Largura da Parede<br/>
            <input type="text" name="largura4" placeholder="Digite aqui a largura da porta">
            Quantidade de portas<br/>
            <input type="text" name="porta4" placeholder="Digite aqui a quantida de portas">
            Quantidade de portas<br/>
            <input type="text" name="janela4" placeholder="Digite aqui a quantida de Janelas">

        </div>

<?php 
include "../controller/controller.php";
if (isset($_POST['send'])){
    //PORTA1
    (!empty($_POST['altura1']) ? $alt1 = $_POST['altura1'] : $alt1 = 0);
    (!empty($_POST['largura1']) ? $larg1 = $_POST['largura1'] : $larg1 = 0);

    (!empty($_POST['janela1']) ? $qtdJanela1 = $_POST['janela1'] : $qtdJanela1 = 0);
    (!empty($_POST['porta1']) ? $qtdPortas1 = $_POST['porta1'] : $qtdPortas1 = 0);

    //PORTA2
    (!empty($_POST['altura2']) ? $alt2 = $_POST['altura2'] : $alt2 = 0);
    (!empty($_POST['largura2']) ? $larg2 = $_POST['largura2'] : $larg2 = 0);

    (!empty($_POST['janela2']) ? $qtdJanela2 = $_POST['janela2'] : $qtdJanela2 = 0);
    (!empty($_POST['porta2']) ? $qtdPortas2 = $_POST['porta2'] : $qtdPortas2 = 0);

    //PORTA3
    (!empty($_POST['altura3']) ? $alt3 = $_POST['altura3'] : $alt3 = 0);
    (!empty($_POST['largura3']) ? $larg3 = $_POST['largura3'] : $larg3 = 0);

    (!empty($_POST['janela3']) ? $qtdJanela3 = $_POST['janela3'] : $qtdJanela3 = 0);
    (!empty($_POST['porta3']) ? $qtdPortas3 = $_POST['porta3'] : $qtdPortas3 = 0);

    //PORTA4
    (!empty($_POST['altura4']) ? $alt4 = $_POST['altura4'] : $alt4 = 0);
    (!empty($_POST['largura4']) ? $larg4 = $_POST['largura4'] : $larg4 = 0);

    (!empty($_POST['janela4']) ? $qtdJanela4 = $_POST['janela4'] : $qtdJanela4 = 0);
    (!empty($_POST['porta4']) ? $qtdPortas4 = $_POST['porta4'] : $qtdPortas4 = 0);

    $i = new controller();
    $resposta = $i->calculos($alt1, $larg1, $qtdJanela1, $qtdPortas1,
                            $alt2, $larg2, $qtdJanela2, $qtdPortas2, 
                            $alt3, $larg3, $qtdJanela3, $qtdPortas3, 
                            $alt4, $larg4, $qtdJanela4, $qtdPortas4);

    $valores = $i->latas($resposta);
    (is_numeric($resposta) == true) ? $resposta = $resposta : $resposta = $erro;  
}
 ?> 
        <div class="info">
            <p>Você vai precisar pintar uma aréa de: <?php echo $resposta ?? '0'?>  m²!</p>
            <p>Você vai preciar de <?php echo $valores ?? '0'?> !</p>
            <p><?php echo $erro ?? ''?></p>
            <button type="submit" name="send">Calcular</button>
        </div>
        
        </form>
    </section>

</body>
</html>

