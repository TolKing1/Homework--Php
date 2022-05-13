<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sayt</title>
    <link rel="stylesheet" href="./style/main.css">
</head>

<body>
    <!-- ======= Header Starting ======= -->
    <header>

        <nav>
            <a href="./index.php" class="header__logo">Logo</a>
            <ul>
                <li><a href="./index.php">Bosh Sahifa</a></li>
                <li><a href="./news.php">Yangiliklar</a></li>
                <li><a href="./contact.php">ALoqa</a></li>
            </ul>
            <div class="header__reg">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    Kirish
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Ism Kiriting</label>
                                    <input type="email" class="form-control" id="name" placeholder="Ism Kiriting">
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Parol Kiriting</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Parol Kiriting">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                <button type="button" class="btn btn-primary">Kirish</button>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Ro'yxatdan o'ting
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formani to'ldiring</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Ism Kiriting</label>
                                        <input type="text" class="form-control" id="name" placeholder="Ism Kiriting">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Pochta Kiriting</label>
                                        <input type="email" class="form-control" id="email" placeholder="Pochta Kiriting">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pass" class="form-label">Parol Kiriting</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Parol Kiriting">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yopish</button>
                                    <button type="button" class="btn btn-danger">Yuborish</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </nav>

    </header>
    <!-- ======= Header End      ======= -->