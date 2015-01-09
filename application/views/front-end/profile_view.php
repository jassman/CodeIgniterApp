<section class="col s8 profile">
    
    <div class="row">
        <div class="col s4 offset-s4">
            <img src="<?php echo base_url(); ?>files/img/<?php echo $datos_usuario['foto'];?>" style="width: 100%; height: 200px;">
        </div>
    </div>
    <div class="row">
        <div class="col s8 offset-s2">
            <p>El nombre de usuario es: <?php echo $datos_usuario['nombre']?> <?php echo $datos_usuario['apellido']?> </p>
            <p>El correo es: <?php echo $datos_usuario['email']?> </p>
            <p>Cuenta desde: <?php echo $datos_usuario['fecha_creacion']?> </p>
        </div>
    </div>
    
    <?php

    ?>

</section>
