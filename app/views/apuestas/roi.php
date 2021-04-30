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
                    <label for="ganancianeta">Ganacia Neta:</label>
                    <input type="number" name="ganancianeta" id="ganancianeta" class="form-control" min="0" value="<?= $data['ganancianeta'] ?>" step="any">
                </div>
                <div class="form-group">
                    <label for="invertotal">Inversion total:</label>
                    <input type="number" name="invertotal" id="invertotal" class="form-control" min="0" value="<?= $data['invertotal'] ?>" step="any">
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
            Retorno de inversión es:
            <input type="text" class="form-control" value="<?= round($data['rpta'],2) .' soles' ?>" step="any" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>