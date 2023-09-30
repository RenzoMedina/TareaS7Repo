<?php require 'partials/head.php'?>

<main class="main">
<?php require 'partials/navbar.php'?>
        <div class="section">
            <section>
                <div class="title-section">
                    Dashboard
                </div>
            </section>
            <section>
               <p>Aqui irá tu planificación según el tu rol</p>
            </section>
        </div>
    </main>
    <?php if($_GET['status']=='error'):?>
       <script>
        alertify.error('No se almacenaron los datos volver a ingresar');
       </script>
    <?php endif?>
    <?php if($_GET['status']=='ok'):?>
       <script>
        alertify.success('Los datos fueron ingresados correctamente');
       </script>
    <?php endif?>
<?php require 'partials/footer.php'?>