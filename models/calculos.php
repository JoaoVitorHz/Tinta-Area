<?php 
include "validate.php";

class calculo{
	//recebe os dados do controller, faz o calculo da area e manda de volta pro controller
	public function calculo($alt1, $larg1, $qtdJanela1, $qtdPortas1,
                            $alt2, $larg2, $qtdJanela2, $qtdPortas2, 
                            $alt3, $larg3, $qtdJanela3, $qtdPortas3, 
                            $alt4, $larg4, $qtdJanela4, $qtdPortas4)
	{
		$i = new validate();
		//PAREDE 1
		
		$resLarg1 = $i->LargPorta1($larg1);
		$res1 = $alt1 * $larg1;

		$janelas1 = 2.40 * $qtdJanela1;
		$portas1 = 1.52 * $qtdPortas1;

		$resJanela1 = $i->parede1($janelas1, $portas1, $res1);

		//Parede 2
		
		$resLarg2 = $i->LargPorta2($larg2);
		$res2 = $alt2 * $larg2;

		$janelas2 = 2.40 * $qtdJanela2;
		$portas2 = 1.52 * $qtdPortas2;


		$resJanela2 = $i->parede2($janelas2, $portas2, $res2);

		//Parede 3

		$resLarg3 = $i->LargPorta3($larg3);
		$res3 = $alt3 * $larg3;

		$janelas3 = 2.40 * $qtdJanela3;
		$portas3 = 1.52 * $qtdPortas3;


		$resJanela3 = $i->parede3($janelas3, $portas3, $res3);

		//Parde 4
		
		$resLarg4 = $i->LargPorta4($larg4);
		$res4 = $alt4 * $larg4;

		$janelas4 = 2.40 * $qtdJanela4;
		$portas4 = 1.52 * $qtdPortas4;


		$resJanela4 = $i->parede4($janelas4, $portas4, $res4);

		if($resLarg1 == true && $resLarg2 == true && $resLarg3 == true && $resLarg4 == true){
			if($resJanela1 == true && $resJanela2 == true && $resJanela3 == true && $resJanela3 == true){
				$metros = $i->validacao($res1, $res2, $res3, $res4);
				if ($metros == false ) {

					$janelas = ($janelas1 + $janelas2 + $janelas3 + $janelas4);
					$portas = ($portas1 + $portas2 + $portas3 + $portas4);
					$metros = ($res1 + $res2 + $res3 + $res4);
					$metros = $metros - ($janelas + $portas);

					$resultado = $metros / 5;

					return $resultado;
				}
				else {
					return $metros;
				}
			}
		}
	}
}