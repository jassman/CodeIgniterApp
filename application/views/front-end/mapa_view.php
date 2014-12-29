<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <script type="text/javascript">
    function datos_marker(lat, lng, marker)
    {
     var mi_marker = new google.maps.LatLng(lat, lng);
     map.panTo(mi_marker);
     google.maps.event.trigger(marker, 'click');
    }
    </script>
    <?=$map['js']?>
    <title>La librería googlemaps de codeigniter por Biostall.com</title>
</head>
<body>
<?=$map['html']?>
<section class="contenido">
    <ul>
        <?php
        foreach($datos as $marker_sidebar)
        {
            ?><li onclick="datos_marker(<?=$marker_sidebar->pos_y?>,<?=$marker_sidebar->pos_x?>,marker_<?=$marker_sidebar->id?>)">
            <?=$marker_sidebar->id;?>&nbsp;&nbsp;<?=substr($marker_sidebar->infowindow,0,14)?></li><?php
        }
        ?>
    </ul>
</section>
</body>
</html>