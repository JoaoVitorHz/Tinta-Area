<?php 
class qtd{

    public function calculoLatas($tinta){
        if($tinta >= 18){

            $lata1 = $this->lata1($tinta);
            $tinta = $tinta - (18 * $lata1);

            $res1 = $lata1." de 18 Litros + ";

        } 
        if($tinta >= 3.6) {
            $lata2 = $this->lata2($tinta);
            $tinta = $tinta - (3.6 * $lata2);

            $res2 = $lata2." de 3.6 Litros + ";

        } 
        if($tinta >= 2.5){
            
            $lata3 = $this->lata3($tinta);
            $tinta = $tinta - (2.5 * $lata3);

            $res3 = $lata3." de 3.6 Litros + ";

        } 
        if($tinta > 0) {

            $lata4 = $this->lata4($tinta);
            $tinta = $tinta - (0.5 * $lata4);

            $res4 = $lata4." de 0.5 Litros";
        }

        $res1 = $res1 ?? ''; $res2 =  $res2 ?? ''; $res3 =  $res3 ?? ''; $res4 =  $res4 ?? '';
        return $valores = $res1.$res2.$res3.$res4;
    }


    private function lata1($tinta) {
        $lata18 = floor($tinta / 18);

        return $lata18;
    }
    private function lata2($tinta) {
        $lata2 = floor($tinta / 3.6);

        return $lata2;
    }
    private function lata3($tinta) {
        $lata3 = floor($tinta / 2.5);

        return $lata3;
    }
    private function lata4($tinta) {
        $lata4 = ceil($tinta / 0.5);

        return $lata4;
    } 
    
}
