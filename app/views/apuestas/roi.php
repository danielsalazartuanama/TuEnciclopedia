<?php require URL_APP . '/app/views/layout/header.php'; ?>



<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>ROI</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-xl-8">
            <form action="roi" method="post">
                <div class="form-group">
                    <label for="ganancianeta">Probabilidad:</label>
                    <input type="number" name="ganancianeta" id="ganancianeta" class="form-control" value="<?= $data['ganancianeta'] ?>">
                </div>
                <div class="form-group">
                    <label for="invertotal">cuota:</label>
                    <input type="number" name="invertotal" id="invertotal" class="form-control" value="<?= $data['invertotal'] ?>">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-8">
            Respuesta:
            <input type="text" class="form-control" value="<?= $data['rpta'] ?>" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>