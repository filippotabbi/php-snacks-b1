<?php
$round = [
  [
    'home' => 'Roma',
    'away' =>'Lazio',
    'homescore' => 2,
    'awayscore' => 0
  ],
  [
    'home' => 'Inter',
    'away' => 'Milan',
    'homescore' => 1,
    'awayscore' => 1
  ],
  [
    'home' => 'Juve',
    'away' => 'Torino',
    'homescore' => 1,
    'awayscore' => 0
  ],
  [
    'home' => 'Sampdoria',
    'away' => 'Genova',
    'homescore' => 5,
    'awayscore' => 3
  ]
];

for ($i=0; $i < count($round); $i++) { ?>

  <div class="">
    <?=$round[$i]['home']?> - <?=$round[$i]['away']?> | <?=$round[$i]['homescore']?>-<?=$round[$i]['awayscore']?>
  </div>

<?php
}

?>
