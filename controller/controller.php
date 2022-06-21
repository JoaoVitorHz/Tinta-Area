<?php
include "../models/calculos.php";
require "../models/latas.php";
class controller {
    public  $resposta;
    //Recebe as informações da view, e manda pra model que fazer o calculo da area.
    public function calculos($alt1, $larg1, $qtdJanela1, $qtdPortas1,
                            $alt2, $larg2, $qtdJanela2, $qtdPortas2, 
                            $alt3, $larg3, $qtdJanela3, $qtdPortas3, 
                            $alt4, $larg4, $qtdJanela4, $qtdPortas4){
        
        $i = new calculo();
        $resposta = $i->calculo($alt1, $larg1, $qtdJanela1, $qtdPortas1,
                            $alt2, $larg2, $qtdJanela2, $qtdPortas2, 
                            $alt3, $larg3, $qtdJanela3, $qtdPortas3, 
                            $alt4, $larg4, $qtdJanela4, $qtdPortas4);

        return $resposta;
    }
    //recebe as informações da view e manda para o model que faz o calculo da quantidade de latas.
    public function latas($tinta){
        $a = new qtd();
        $valores = $a->calculoLatas($tinta);

        return $valores;
    }
}

?>
