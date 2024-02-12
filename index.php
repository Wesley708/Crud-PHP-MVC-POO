<?php
    require_once "vendor/autoload.php";

    use Cocur\Slugify\Slugify;

    $slug = new Slugify();
    echo $slug->slugify('Teste com acentução para verificar a criação de um slug!','_');

    $slug->addRule('ão', 'seila');
    echo '</br>' . $slug->slugify('Teste com acentução para verificar a criação de um slug!','_');

?>