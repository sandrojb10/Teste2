<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$p1 = new Primo($num1,$num2);

$count = count($p1->arrayResult());
echo "Numero Inicial: ".$p1->getStart();
echo "<br>";
echo "Numero Final: ".$p1->getEnd();;
echo "<br>";
echo "Resposta: Encontrados ".$count." números primos, são eles: ".json_encode($p1->arrayResult());


class Primo {
    public $start;
    public $end;
    public $array = array();

    public function __construct($start, $end){

        $this->start = $start;
        $this->end = $end;
        
        // $array = array();

        $dif = $end - $start;

        for($i = 1 ; $i <= $dif ; $i++){
            $div = 0;
            for($count = 1 ; $count <= $start ; $count++){
                if($start % $count == 0){
                    $div++;
                }
            }

            if($div == 2){
                
                array_push($this->array,$start);
            }
            $start++;
        }
        
        
    }

    public function arrayResult(){
        return $this->array;
    }
    public function getStart(){
        return $this->start;
    }
    public function getEnd(){
        return $this->end;
    }

}
?>