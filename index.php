<?php

    require dirname(__FILE__) . '/arabic_transliteration.php';
    echo "{ transliteratedText  : '" . arabic_transliteration($_GET['text']) . "' }";

?>