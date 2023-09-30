<?php require 'partials/head.php'?>

<main class="main">
<?php require 'partials/navbar.php'?>
        <div class="section">
            <section>
                <div class="title-section">
                    Reportes asitencia
                    <?php require 'partials/btn-section.php'?> 
                </div>
            </section>
            <section class = "content"> 
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Curso</th>
                            <th>Fech. Curso</th>
                            <th>Hrs Inc.</th>
                            <th>Hrs Fn.</th>
                            <th>Astnc.</th>
                            <th>Inc. Cls.</th>
                            <th>Fn. Cls.</th>
                            <th>Justf.</th>
                            <th>Obs.</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                       <?php foreach($data as $asistencia): ?>
                            <tr>
                                <td><?= $asistencia->nombre?></td>
                                <td><?= $asistencia->apellido?></td>
                                <td><?= ucwords($asistencia->nombre_curso)?></td>
                                <td><?= $asistencia->fecha_curso?></td>
                                <td><?= $asistencia->hora_inicio?></td>
                                <td><?= $asistencia->hora_final?></td>
                                <td><?= ucwords($asistencia->asistio)?></td>
                                <td><?= $asistencia->inicio_clase?></td>
                                <td><?= $asistencia->final_clase?></td>
                                <td><?= strtoupper($asistencia->justificacion)?></td>
                                <td><?= $asistencia->observaciones?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

<?php require 'partials/footer.php'?>