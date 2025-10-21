<?php 



     $pessoa = [
        "Matheus" => 29,
        "Aléxia" => 25,
        "Pedro" => 24,
        "João" => 43
     ];

?>

<table border = 4>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoa as $nome => $idade): ?>
    <tr>
        <td> <?= $nome; ?></td>
        <td> <?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>