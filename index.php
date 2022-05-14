

    <!-- ======= Header Starting ======= -->
  <?php   require_once "./layouts/header.php" ?>
    <!-- ======= Header End      ======= -->
<?php 
    require_once './admin/connect.php';
    $cards = getAll();
    // echo "<pre>"; print_r($cards);echo "</pre>";
?> 


    <!-- ======= Main Starting ======= -->
    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 m-auto">
                    <img src="https://picsum.photos/1400/400" alt="jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <h3 class="text-center">So'ngi yangiliklar</h3>
        <?php if(isset($_SESSION['logged'])): ?>
        <div class="add__card" style='width:100%;text-align:center;'>
            <a href="./add.php" class="btn btn-success" style='margin:0 auto;'> Qo'shish</a>
        </div>
        <?php endif; ?>
        <div class="container py-5">
            <div class="row">
                <?php foreach($cards as $card): ?>
                <div class="col-12 col-md-6 col-lg-3  my-3">
                    <div class="card">
                        <img src="https://picsum.photos/350/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $card['title'] ?></h5>
                            <p class="card-text"><?= $card['subtitle'] ?></p>
                            <?php if(isset($_SESSION['logged'])): ?>
                            <a href="#" class="btn btn-primary">Batafsil..</a>
                            <a href="./admin/delete.php?id=<?= $card['id'] ?>" class="btn btn btn-danger">O'chirish</a>
                            <a href="./update.php?id=<?= $card['id'] ?>" class="btn btn btn-success">O'zgartir</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <!-- ======= Main End      ======= -->

    <!-- ======= Footer Starting ======= -->
    <?php require_once "./layouts/footer.php" ?>
    <!-- ======= Footer End      ======= -->



