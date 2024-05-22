<?php
$target_dir = "videos/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);

if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
    echo "El video ". basename( $_FILES["video"]["name"]). " ha sido subido.";
} else {
    echo "Lo siento, hubo un error al subir tu video.";
}
?>
