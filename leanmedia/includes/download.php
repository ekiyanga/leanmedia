<?php

header('Content-disposition: attachment;
filename=$name.mp3');
header('Content-type: audio/mpeg');
readfile('$name.mp3');
?>