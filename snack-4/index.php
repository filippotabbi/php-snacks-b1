
<?php

$classe28 = [
    array(
        "nome" => "Carlo",
        "cognome" => "Gilardi",
        "voti" => [
            8,8,7,5,9,10,3,3
        ]
    ),
    array(
        "nome" => "Alvaro",
        "cognome" => "Vitali",
        "voti" => [
            4,3,5,4,2
        ]
    ),
    array(
        "nome" => "Ciccio",
        "cognome" => "Caputo",
        "voti" => [
            2,2,3,3,3
        ]
    ),
];

for ($i = 0 ; $i < count($classe28); $i++) {

    $somma = 0;
    for ($j = 0 ; $j < count($classe28[$i]['voti']); $j++) {
        $somma += $classe28[$i]['voti'][$j];
    }
    ?>
    <ul>
        <li>
            <?= $classe28[$i]['nome'] ?>
            <?= $classe28[$i]['cognome'] ?>
            <p><strong><?= round($media = $somma / ($j - 1), 2) ?></strong></p>
        </li>
    </ul>

<?php
}
?>
