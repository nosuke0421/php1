<?php
    class defNum{
        private $name;
        private $roll;
        public function __construct($name,$roll){
            $this->name = $name;
            $this->roll = $roll;
        }
        public function getName(){
            return $this->name;
        }
        public function getRoll(){
            return $this->roll;
        }
    }

    $defNum1 = new defNum("PHP_VERSION","PHPのバージョン");
    $defNum2 = new defNum("PHP_OS","PHPが稼働中のOS");
    $defNum3 = new defNum("__LINE__","処理中の行番号");
    $defNum4 = new defNum("__FILE__","処理中のPHPファイル");
    $defNum5 = new defNum("__DIR__","処理中のファイルがあるディレクトリ");
    $defNum6 = new defNum("__FUNCTION__","関数名");
    $defNum7 = new defNum("__CLASS__","クラス名");
    $defNum8 = new defNum("__TRAIT__","トレイト名");
    $defNum9 = new defNum("__METHOD__","メソッド名");
    $defNum10 = new defNum("__NAMESPACE__","名前空間の名称");
    $defNum11 = new defNum("true","真");
    $defNum12 = new defNum("false","偽");
    $defNum13 = new defNum("null","値が無い");

    $defNums = array(
        $defNum1,$defNum2,$defNum3,$defNum4,
        $defNum5,$defNum6,$defNum7,$defNum8,
        $defNum9,$defNum10,$defNum11,$defNum12,
        $defNum13
    );
?>