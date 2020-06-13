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
    $data = mysqli_query($con, $query);
    
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
                    <h2>Data User</h2>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="add.php" class="btn btn-success">Tambah Data +</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead class="text-center thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1; while($rows = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                <th><?php echo $no++ ?></th>
                                <th><?php echo $rows['nama'] ?></th>
                                <th><?php echo $rows['email'] ?></th>
                                <th>
                                    <a href="delete.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    <a href="edit.php?id=<?php echo $rows['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                </th>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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