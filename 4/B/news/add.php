<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me Dumb</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="../b4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../b4/css/style.css">
</head>

    <?php 
        include "../config/database.php";

        $query = " SELECT * FROM tb_user ";
        $user = mysqli_query($con, $query);

        if(isset($_POST['tambah'])){
            $title = htmlspecialchars($_POST['title']);
            $deskripsi = htmlspecialchars($_POST['deskripsi']);
            $user_id = htmlspecialchars($_POST['user_id']);

            $ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
            $image = $_FILES['image']['name'];
            $x = explode('.', $image);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $dirUpload = "image/";
            
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){
                    $terupload = move_uploaded_file($file_tmp, $dirUpload.$image);
                    if ($terupload) {
                        $query = " INSERT INTO tb_news VALUES(NULL, '$title', '$image', '$deskripsi', NULL, '$user_id') ";
                        $data = mysqli_query($con, $query);
                        if($data){
                            echo "<script>alert('data berhasil ditambah)</script>";
                            header("location: index.php");
                        } else {
                            echo "<script>alert('data berhasil ditambah)</script>";
                            echo "error";die;
                        }
                    } else {
                        echo "Upload Gagal!";
                    }
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
        }
    ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand text-warning" href="#">Me Dumb</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="news">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2>Tambah Berita</h2>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="" class="btn btn-warning"> <- Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="title" class="col-4 col-md-3">Title</label>
                                    <div class="col-8 col-md-9">
                                        <input type="text" class="form-control form-control-sm" name="title" id="title" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-4 col-md-3">Image</label>
                                    <div class="col-8 col-md-9">
                                        <input type="file" class="form-control form-control-sm" name="image" id="image" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-md-3">Deskripsi</label>
                                    <div class="col-8 col-md-9">
                                        <textarea name="deskripsi" id="deskripsi" class="form-control form-control-sm" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="user_id" class="col-4 col-md-3">Nama User</label>
                                    <div class="col-8 col-md-9">
                                        <select name="user_id" id="user_id" class="form-control form-control-sm">
                                        <?php while($rows = mysqli_fetch_assoc($user)) { ?>
                                            <option value="<?php echo $rows['id'] ?>"><?php echo $rows['nama'] ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary ml-3" name="tambah">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light p-5 text-center border-top">
        All right copyright 2020 <a href="https://andidev30.github.io">Andi</a>
    </footer>

    <script src="../b4/js/jquery-3.4.1.min.js"></script>
    <script src="../b4/js/popper.min.js"></script>
    <script src="../b4/js/bootstrap.min.js"></script>

</body>

</html>