<?php require URL_APP . '/app/views/layout/header.php'; ?>



<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1>Esperanza Matemática</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <form action="<?= URL ?>apuestas/esperanzaMatematica" method="post">
                <div class="form-group">
                    <label for="cuota">cuota:</label>
                    <input type="number" name="cuota" id="cuota" class="form-control" value="<?= $cuota ?>">
                </div>
                <div class="form-group">
                    <label for="probabilidad">Probabilidad:</label>
                    <input type="number" name="probabilidad" id="probabilidad" class="form-control" value="<?= $probabilidad ?>">
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
            <input type="text" class="form-control" value="<?= $rpta ?>" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>