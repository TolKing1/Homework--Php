<!-- ======= Header Starting ======= -->
<?php   require_once "./layouts/header.php" ?>
<!-- ======= Header End      ======= -->
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 m-auto text-center">
                <form action="./admin/card_add.php" method='POST'>
                    <label for="title">Matn sarlavhasi</label><br>
                    <input type="text" name='title' required class='card__add w-25' ><br>
                    <label for="subtitle">Matn teksti</label><br>
                    <textarea name="subtitle" id="" cols="40" rows="5"></textarea> <br>
                    <button type='button submit' class='btn btn-danger mt-4'>Yuborish</button>
                </form>
            </div>
        </div>
    </div>




</main>

<!-- ======= Footer Starting ======= -->
<?php require_once "./layouts/footer.php" ?>
<!-- ======= Footer End      ======= -->