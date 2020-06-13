<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>

<body>
    
    <a href="1.php">Refresh</a>
    <br>
    <form action="" method="get">
        <label>Masukan angka binner</label>
        <input type="text" name="angka">
        <button type="submit" name="btn">cek</button>
    </form>
    <br>

    <?php 
        if(isset($_GET['btn'])){
            $angka = $_GET['angka'];
            if(is_numeric($angka)){
                $bin = $angka;
                $hex2 = base_convert($bin,2,16);
                echo 'result : ' . $hex2;
            } else {
                echo "inputan harus angka";
            }
        }
    ?>

</body>
</html>