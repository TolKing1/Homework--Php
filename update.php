<!-- ======= Header Starting ======= -->
<?php   require_once "./layouts/header.php" ?>
<!-- ======= Header End      ======= -->
<?php 
require_once './admin/connect.php';
$selected = getSelected();
?>
<main>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 m-auto text-center">
                <form action="./admin/edit.php?id=<?= $selected['id'] ?>" method='POST'>
                    <label for="title">Matn sarlavhasi</label><br>
                    <input type="text" name='title' required class='card__add w-25' value="<?= $selected['title'] ?>"><br>
                    <label for="subtitle">Matn teksti</label><br>
                    <textarea name="subtitle" id="" cols="40" rows="5" ><?= $selected['subtitle'] ?></textarea> <br>
                    <button type='button submit' class='btn btn-success mt-4'>O'zgartitirsh</button>
                </form>
                
            </div>
        </div>
    </div>
</main>
<!-- ======= Footer Starting ======= -->
<?php require_once "./layouts/footer.php" ?>
<!-- ======= Footer End      ======= -->