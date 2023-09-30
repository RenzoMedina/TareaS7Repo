<?php require 'partials/head.php' ?>
<main class="main">
    <?php require 'partials/navbar.php' ?>
    <div class="section">
        <section>
            <div class="title-section">
                Asistencia clases
                <?php require 'partials/btn-section.php' ?>
            </div>
        </section>
        <section>
            <form class="form-asitencia" action="clases/registro" method="POST" id="formulario" >
                <div class="form-group-asistencia">
                    <label>Fecha:</label>
                    <input type="text" readonly name="fecha_curso" id="fecha_asistencia">
                </div>
                <div class="form-group-asistencia">
                    <label>Docente:</label>
                    <select name="id_docente" id="id_docente">
                    <option>--- Elija docente ---</option>
                        <?php foreach($data as $docente): ?>
                            <?php if ($docente->cargo=="docente"):?>
                                <option id="docente_id" value="<?= $docente->id?>"><?= $docente->nombre?></option>
                            <?php endif?>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="form-group-asistencia">
                    <label>Curso a dictar:</label>
                    <select name="nombre_curso">
                        <option>--- Elija Curso ---</option>
                        <option value="matemáticas">matemáticas</option>
                        <option value="literatura">literatura</option>
                        <option value="ciencia naturales">ciencia naturales</option>
                        <option value="historia">historia</option>
                        <option value="religión">religión</option>
                        <option value="arte">arte</option>
                        <option value="tecnología">tecnología</option>
                        <option value="música">música</option>
                    </select>
                </div>
                <div class="form-group-asistencia">
                    <div class="time-clases">
                        <div class="time-inicio"><label>Inicio:</label>
                            <input type="time" name="hora_inicio" min="08:00" max="16:00">
                        </div>
                        <div class="time-final">
                            <label>Final:</label>
                            <input type="time" name="hora_final" min="08:30" max="16:30">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group-asistencia">
                    <div class="validacion-asistencia">
                        <p>¿Asistó?</p>
                        <input type="radio" name="asistencia" value="si" id="validacionSi" required><label for="validacionSi" >Si</label>
                        <input type="radio" name="asistencia" value="no" id="validacionNo" required><label for="validacionNo" >No</label>
                    </div>
                </div>
                <div class="form-group-asistencia">
                    <div class="time-clases">
                        <div class="time-inicio">
                        <div class="time-inicio"><label>Inicio:</label>
                            <input type="time" name="clase_inicio" id="time-inicio">
                        </div>
                        </div>
                        <div class="time-final">
                            <label>Final:</label>
                            <input type="time" name="clase_final" id="time-final">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group-asistencia">
                    <div class="validacion-asistencia">
                        <p>¿Justificó?</p>
                        <input type="radio" name="justificada" value="n/a" id="JustNoAplica" required><label>N/A</label>
                        <input type="radio" name="justificada" value="si" id="justificada" required><label for="justificada">Si</label>
                        <input type="radio" name="justificada" value="no" id="justificacionNula" required><label for="justificacionNula">No</label>
                    </div>
                    <label>Observación:</label>
                    <input type="text" name="observaciones" id="observaciones" >
                </div>

                <div class="form-group-asistencia">
                    <button type="submit" id="enviar" name="enviar">Guardar</button>
                </div>
            </form>
        </section>
    </div>
</main>
<?php require 'partials/footer.php' ?>