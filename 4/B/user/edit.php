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

        $id = $_GET['id'];

        $query = " SELECT * FROM tb_user WHERE id = '$id' ";
        $data = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($data);

        if(isset($_POST['edit'])){
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $query = " UPDATE tb_user SET nama = '$nama', email = '$email' WHERE id = '$id' ";
            $data = mysqli_query($con, $query);
    
            if($data){
                echo "<script>alert('data berhasil ditambah)</script>";
                header("location: index.php");
            } else {
                echo "<script>alert('data berhasil ditambah)</script>";
                echo "error";die;
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
                    <li class="nav-item">
                        <a class="nav-link" href="../news">News</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="news">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <h2>Edit User</h2>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="" class="btn btn-warning"> <- Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-md-3">Nama</label>
                                    <div class="col-8 col-md-9">
                                        <input type="text" class="form-control form-control-sm" name="nama" id="nama" value="<?php echo $row['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-md-3">Email</label>
                                    <div class="col-8 col-md-9">
                                        <input type="text" class="form-control form-control-sm" name="email" id="email" value="<?php echo $row['email'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary ml-3" name="edit">Simpan</button>
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