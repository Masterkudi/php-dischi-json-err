<?php

$string = file_get_contents("./db/album.json");

echo json_encode($album);


echo "<pre><code>";
 var_dump($album);
 echo "</code></pre>";