<?php 

    $textoHtml = "<p>Testando paragráfo.</p><div>Uma div</div><p>Outro paragráfo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco;

?>