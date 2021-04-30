<?php require URL_APP . '/app/views/layout/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Ganancia Neta</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-xl-8">
            <form action="ganancianeta" method="post">
                <div class="form-group">
                    <label for="apuesta">Probabilidad:</label>
                    <input type="number" name="apuesta" id="apuesta" class="form-control" min="0" value="<?= $data['apuesta'] ?>" step="any">
                </div>
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
            Ganancia Neta:
            <input type="text" class="form-control" value="<?= round($data['rpta'],2) . ' soles' ?>" step="any" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>