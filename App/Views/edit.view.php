<?php require 'partials/head.php'?>

<main class="main">
<?php require 'partials/navbar.php'?>
        <div class="section">
            <section>
                <div class="title-section">
                    Editar datos
                    <?php require 'partials/btn-section.php'?> 
                </div>
            </section>
            <section>
            <form class="form-asitencia" action="registro/update/<?= $data['id']?>" method="POST" autocomplete="off">
                <div class="form-group-asistencia">
                    <label>Fecha Actual</label>
                    <input type="text" id="fecha_asistencia">
                </div>
                <div class="form-group-asistencia">
                    <label>R.U.N:</label>
                    <input type="text" class="readonly" name="rut" pattern="[0-9]{2}\.[0-9]{3}\.[0-9]{3}-[0-9a-z]{1}" value="<?= $data['rut']?>" readonly>
                </div>
                <div class="form-group-asistencia">
                    <label>Nombres:</label>
                    <input type="text" name="nombre" value="<?= $data['nombre']?>">
                </div>
                <div class="form-group-asistencia">
                    <label>Apellidos:</label>
                    <input type="text" name="apellido" value="<?= $data['apellido']?>">
                </div>
                <div class="form-group-asistencia">
                    <label>Cargo:</label>
                    <select name="cargo" id="">
                        <option><?= $data['cargo']?></option>
                        <option value="administrador">administrador</option>
                        <option value="docente">docente</option>
                        <option value="coordinador">coordinador</option>
                    </select>
                </div>
                <div class="form-group-asistencia">
                    <button type="submit" id="enviar" name="enviar">Guardar</button>
                </div>
            </form>
        </section>
        </div>
    </main>

<?php require 'partials/footer.php'?>