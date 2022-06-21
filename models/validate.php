<?php 
class validate{

	public function validacao($res1, $res2, $res3, $res4){
		//validação da primeira parede
		if($res1 < 1){
			return"A aréa da primeira parede não pode ser menor do que 1";
		} else if($res1 > 50){
			return"A aréa da primeira parede não pode ser maior do que 50";
		} 

		//validação da segunda parede
		else if($res2 < 1){
			return"A aréa da segunda parede não pode ser menor do que 1";
		}
		else if($res2 > 50){
			return"A aréa da segunda parede não pode ser maior do que 50";
		}

		//validação da terceira parede
		else if($res3 < 1){
			return"A aréa da terceira parede não pode ser menor do que 1";
		}
		else if($res3 > 50){
			return"A aréa da terceira parede não pode ser maior do que 50";
		}

		//validação da quarta parede
		else if($res4 < 1){
			return"A aréa da quarta parede não pode ser menor do que 1";
		}
		else if($res4 > 50){
			return"A aréa da quarta parede não pode ser maior do que 50";
		} else {
			return false;
		}
	}

	public function parede1($janela1, $porta1, $res1){
		$a = $res1 / 2;
		if($janela1 > $a){
			echo "A area das janelas da primeira parede é 50% maior que a area do parede";
			exit();
		} else if($porta1 > $a){
			echo "A area das portas da primeira parede é 50% maior que a area da parede";
			exit();
		} else {
			return true;
		}
	}

	public function parede2($janela2, $porta2, $res2){
		$a = $res2 / 2;
		if($janela2 > $a){
			echo "A area das janelas da segunda parede é 50% maior que a area do parede";
			exit();
		} else if($porta2 > $a){
			echo "A area das portas da terceira parede é 50% maior que a area da parede";
			exit();
		} else {
			return true;
		}
	}

	public function parede3($janela3, $porta3, $res3){
		$a = $res3 / 2;
		if($janela3 > $a){
			echo "A area das janelas da terceira parede é 50% maior que a area do parede";
			exit();
		} else if($porta3 > $a){
			echo "A area das portas da terceira parede é 50% maior que a area da parede";
			exit();
		} else {
			return true;
		}
	}

	public function parede4($janela4, $porta4, $res4){
		$a = $res4 / 2;
		if($janela4 > $a){
			echo "A area das janelas da quarta parede é 50% maior que a area do parede";
			exit();
		} else if($porta4 > $a){
			echo "A area das portas da quarta parede é 50% maior que a area da parede";
			exit();
		} else {
			return true;
		}
	}

	public function largPorta1($larg1){
		$a = $larg1 - 1.90;
		if($a < 0.30){
			echo "A altura da primeira parede tem que ser no minimo 30 centimetros maior que a altura da porta";
			exit();
		} else {
			return true;
		}
	}
	public function largPorta2($larg2){
		$a = $larg2 - 1.90;
		if($a < 0.30){
			echo "A altura da segunda parede tem que ser no minimo 30 centimetros maior que a altura da porta";
			exit();
		} else {
			return true;
		}
	}
	public function largPorta3($larg3){
		$a = $larg3 - 1.90;
		if($a < 0.30){
			echo "A altura da terceira parede tem que ser no minimo 30 centimetros maior que a altura da porta";
			exit();
		} else {
			return true;
		}
	}
	public function largPorta4($larg4){
		$a = $larg4 - 1.90;
		if($a < 0.30){
			echo "A altura da quarta parede tem que ser no minimo 30 centimetros maior que a altura da porta";
			exit();
		} else {
			return true;
		}
	}
}