<?php 

    function cetak($param){
        if(is_numeric($param)){
            $bin = $param;
            $hex2 = base_convert($bin,2,16);
            $result = $hex2;
            return $result;
        } else {
            return $result ="inputan harus angka";
        }
    }

    echo cetak(1110);
    
?>