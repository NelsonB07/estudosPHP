<?php 


    include_once "backend.php"; 


?>

<h1>Sejam Bem-Vindos a nosso site.</h1>
<p> <?=$nome; ?> Veja as nossas oferta</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>