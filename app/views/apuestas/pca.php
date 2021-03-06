<?php require URL_APP . '/app/views/layout/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Probabilidad de la casa de apuesta</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-xl-8">
            <form action="pca" method="post">
                <div class="form-group">
                    <label for="cuota">cuota:</label>
                    <input type="number" name="cuota" id="cuota" class="form-control" min="0" value="<?= $data['cuota'] ?>" step="any">
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
            Probabilidad de la casa de apuesta es:
            <input type="text" class="form-control" value="<?= round($data['rpta'],2) . ' %'?>" step="any" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>