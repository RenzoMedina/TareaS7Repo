<?php require 'partials/head.php'?>

<main class="main">
<?php require 'partials/navbar.php'?>
        <div class="section">
            <section>
                <div class="title-section">
                    Perfiles
                    <?php require 'partials/btn-section.php'?> 
                </div>
            </section>
            <section class = "content">
                <button> <a href="registro">Agregar</a></button>
                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th>R.U.N</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th>Evento</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                    <?php foreach($data as $personal): ?>
                        <tr>
                            <td><?= $personal->rut?></td>
                            <td><?= ucwords($personal->nombre)?></td>
                            <td><?= ucwords($personal->apellido)?></td>
                            <td><?= ucwords($personal->cargo)?></td>
                            <?php if($personal->estado == 1): ?>
                            <td>Activo</td>
                            <?php elseif($personal->estado == 0):?>
                            <td>Desactivo</td> 
                            <?php endif ?>
                            <td>   
                            <div class="estado">
                               <a href="<?= $personal->id?>"><span class="material-symbols-outlined">edit</span></a>
                                <form action="registro/destroy/<?= $personal->id?>" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')"><button type="submit" class="btn-destroy"><span class="material-symbols-outlined">delete</span></form></button>
                               </div>
                               </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
<?php require 'partials/footer.php'?>