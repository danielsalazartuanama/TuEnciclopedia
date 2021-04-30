<?php require URL_APP . '/app/views/layout/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Esperanza Matemática</h2>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-xl-6  ">
            
            <form id="solo" action="esperanzaMatematica" method="post">
                <div class="form-group">
                    <label for="cuota">cuota:</label>
                    <input type="number" name="cuota" id="cuota" class="form-control" min="0" step="0.01"  value="<?= $data['cuota'] ?>" step="any">
                </div>
                <div class="form-group">
                    <label for="probabilidad">Probabilidad:</label>
                    <input type="number" name="probabilidad" id="probabilidad" class="form-control" min="0" step="0.1" value="<?= $data['probabilidad'] ?>" step="any">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>
        </div>
      
    </div>
    <br>
    <div class="row">
        <div class="col-xl-6">
            Esperanza Matemática:
            <input type="text" class="form-control" value="<?= $data['rpta'] ?>" step="any" disabled>
        </div>
    </div>
</div>

<br>

<?php require URL_APP . '/app/views/layout/footer.php'; ?>