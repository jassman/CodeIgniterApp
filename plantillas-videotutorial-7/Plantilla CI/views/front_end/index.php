<section class="contenido">
    <h1>Aplicación Dinámica con CodeIgniter</h1>
    <?
    foreach ($articulos as $item):
        ?>
        <h3>
            <?
            echo anchor('articulo/' . $item->url_articulo, $item->nombre_articulo);
            ?>
        </h3>
        <strong>Fecha de Publicación:</strong> <? echo $item->fecha_articulo; ?>
        <p><? echo $item->contenido_articulo; ?></p>
        <hr>
        <?
    endforeach;
    ?>
</section>