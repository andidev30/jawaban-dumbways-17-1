<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me Dumb</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="b4/css/bootstrap.min.css">
    <link rel="stylesheet" href="b4/css/style.css">
</head>

<?php
    include "config/database.php";

    $id = $_GET['id'];

    $query = " SELECT tb_news.*, tb_user.id as id_user, tb_user.nama as nama_user, tb_user.email as email_user FROM tb_news LEFT JOIN tb_user ON tb_news.user_id = tb_user.id WHERE tb_news.id = '$id' ";
    $data = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($data);
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="news">
    <div class="container">
    
    <div class="row">
            <div class="col">
                <div class="card p-5">
                    <img class="card-img-top mb-5" src="news/image/<?php echo($row['image']) ?>" alt="gambar">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase mb-3"><?php echo $row['title'] ?></h5>
                        <p class="card-text"><?php echo $row['deskripsi'] ?></p>
                        <div class="row mt-4">
                            <div class="col">
                                Tanggal : <?php echo $row['create_time'] ?>
                            </div>
                            <div class="col">
                                Penulis : <?php echo $row['nama_user'] ?>(<?php echo $row['email_user'] ?>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <footer class="bg-light p-5 text-center border-top">
        All right copyright 2020 <a href="https://andidev30.github.io">Andi</a>
    </footer>

    <script src="b4/js/jquery-3.4.1.min.js"></script>
    <script src="b4/js/popper.min.js"></script>
    <script src="b4/js/bootstrap.min.js"></script>

</body>

</html>