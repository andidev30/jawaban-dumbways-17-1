<?php 

    function cetak($param){
        if($param%2 === 0){
            return "masukan angka ganjil";
        }else{
            $tes = '';
            for($i=1; $i <= $param; $i++){
                echo "*";
                for($a=1; $a <= $param; $a++){
                    echo "=";
                    if($a == $param){
                        echo "<br>";
                    }
                }
            }
            return $tes;
        }
    }

    cetak(7);