<?php
$functionsExecutedCounter = 0;
require_once('meetkunde.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type='text/css'>
        body { font-family: "Calibri Light" }
        table.test { border-collapse: collapse; }
        table.test td { border-bottom: 1px solid lightgray; }
    </style>

    <title>Oefeningen HC1</title>
</head>

<body class="container">

<h1>Oefeningen bij HC 1</h1>


<h2>Kies je oefening</h2>
<br/>

<select class="form-control" id="list">
    <?php
    $i = 1;
    while ($i < 21) {
        echo "<option> Oef" . $i++ . "</option>";
    }
    ?>
</select>

<br/>


<div id="oef1">
    <h3>Oefening 1</h3>
    <p>Cirkel met straal 2.2 heeft opp = <?php echo berekenOppervlakteCirkel(2.2); ?></p>
</div>


<div id="oef2">
    <h3>Oefening 2</h3>
    <p>Driehoek met basis 100, hoogte 1 heeft opp = <?= berekenOppervlakteDriehoek(100, 1) ?></p>
    <p>Rechthoek met zijde1 12, zijde2 6 heeft opp = <?php echo berekenOppervlakteRechthoek(12, 6); ?></p>
    <p>Vierkant met zijde 9 heeft opp = <?php echo berekenOppervlakteVierkant(9); ?></p>
</div>


<div id="oef3">
    <h3>Oefening 3</h3>
    <p>Momenteel zijn er <?= $functionsExecutedCounter ?> functies aangeroepen.</p>
</div>


<div id="oef4">
    <h3>Oefening 4</h3>

    <?php
    $variabele1 = 1;
    // $variabele2 = ;
    $variabele3 = '';
    $variabele4 = 123;
    $variabele5 = 'dmtwood';

    if (isset($variabele1) == true) {
        echo '<p>v1 is true, as expected</p>';
    }
    if (isset($variabele2) == false) {
        echo '<p>v2 is false, as expected</p>';
    }
    if (empty($variabele3) == true) {
        echo '<p>v3 is empty, as expected</p>';
    }
    if (empty($variabele4) == false) {
        echo '<p>v4 is empty, as expected</p>';
    }
    if (isset($variabele5) == true && empty($variabele5) == false) {
        echo '<p>v5 is true and not empty, as expected</p>';
    }


    ?>

</div>


<div id="oef5">
    <h3>Oefening 5</h3>
    <?php

    function checkGetal($getal)
    {
        switch ($getal) {
            case 10:
            case 20:
            case 30:
                return '<p>' . $getal . ' behoort tot {10,20,30}. </p>';
            default: return '<p>' . $getal . ' behoort niet tot {10,20,30}. </p>';
        }
    }

    ?>

    <?php echo checkGetal(5); ?>
    <?= checkGetal(15) ?>
    <?= checkGetal(20) ?>
    <?= checkGetal(25) ?>
    <?= checkGetal(30) ?>

</div>


<div id="oef6">
    <h3>Oefening 6</h3>
    <p><?php
        $som = 0;
        for ($i = 1; $i <= 30; $i++)
            $som += $i;

        echo 'Som van 1 t/m 30 is ' . number_format($som,0,',','.');
        ?></p>
    <p><?php
        $som = 0;
        for ($i = 1; $i <= 1000000; $i++)
            $som += $i;

        echo 'Som van 1 t/m 1.000.000 is ' . number_format($som,0,',','.');
        ?></p>
</div>


<div id="oef7">
    <h3>Oefening 7</h3>
    <p><?php

        $currentDate = date('l d/m/Y G:i');

        echo $currentDate;

        $month = date('n');
        $season = '';
        //  'n' reads de month as a number (1-12)
        if ($month == 12 || $month == 1 || $month == 2)
            $season = 'winter';
        else if ($month == 3 || $month == 4 || $month == 5)
            $season = 'lente';
        else if ($month == 6 || $month == 7 || $month == 8)
            $season = 'zomer';
        else if ($month == 9 || $month == 10 || $month == 11)
            $season = 'herfst';

        echo '<br>Het is een ' . $season . 'maand.';

        ?></p>
</div>


<div id="oef8">
    <h3>Oefening 8</h3>
    <?php

    function splitsNaam($naam)
    {
        $naam = trim($naam);
        $list = explode(' ', $naam);
        if (!isset($list[1]))
            die('Geen spatie gevonden in de naam.');

        echo '<ul>
              <li>Voornaam: ' . $list[0] . '</li>
              <li>Achternaam: ' . $list[1] . '</li>
            </ul>';
    }

    function voegNamenSamen($voornaam, $achternaam)
    {
        echo $voornaam . ' ' . $achternaam;
    }

    ?>
    <p><?= splitsNaam('Dimitri Gevers') ?>
        <?= voegNamenSamen('Douwke', 'Vanachteren') ?></p>
</div>


<div id="oef9">
    <h3>Oefening 9</h3>
    <?php

    $lidstaten = ['België', 'Nederland', 'Frankrijk', 'Duitsland', 'Bulgarije', 'Cyprus',
        'Denemarken', 'Estland', 'Finland', 'Griekenland', 'Hongarije', 'Ierland', 'Italië',
        'Kroatië', 'Letland', 'Litouwen', 'Luxemburg', 'Malta', 'Oostenrijk', 'Polen',
        'Portugal', 'Roemenië', 'Slovenië', 'Slowakije', 'Spanje', 'Tsjechië', 'Zweden'];
    sort($lidstaten);

    ?>
    <h4>De Europese Unie:</h4>
    <p>De Europese Unie telt sinds 2020 in totaal 27 lidstaten.</p>
    <h5>De volledige lijst van lidstaten, alfabetisch gerangschikt</h5>
    <ol>
        <?php foreach ($lidstaten as $land)
            echo '<li>' . $land . '</li>';
        ?>
    </ol>
</div>


<div id="oef10">
    <h3>Oefening 10</h3>
    <table class="test" cellpadding="10">
        <?php
        echo '<tr>';

        for ($j = 1; $j <= 5; $j++) {
            echo '<td></td>';
        }

        echo '</tr>';
       ;
        for ($i = 1; $i <= 6; $i++) {

            echo '<tr>';

            for ($j = 1; $j <= 5; $j++) {
                echo '<td>' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
            }

            echo '</tr>';

        }
        ?>
    </table>
</div>


<div id="oef11">
    <h3>Oefening 11</h3>
    <?php
    function caseMagic($zin)
    {
        return array(
                'uppercase' => strtoupper($zin),
                'lowercase' => strtolower($zin),
                'ucfirst' => ucfirst(strtolower($zin)),
                'ucwords' => ucwords(strtolower($zin))
        );
    }

    function shuffleWoord($woord)
    {
        return str_shuffle($woord);
    }

    function isPalindroom($woord)
    {
        return ($woord == strrev($woord));
    }

    function isAnagram($woord1, $woord2)
    {
        $woord1 = strtolower($woord1);
        $woord2 = strtolower($woord2);
        $woord1 = str_replace(' ', '', $woord1);
        $woord2 = str_replace(' ', '', $woord2);
        return (count_chars($woord1) == count_chars($woord2));
    }

    ?>
    <p>CaSeMaGiC Op dEzE zIn: <?= print_r(caseMagic('CaSeMaGiC Op dEzE zIn')) ?></p>
    <p>Shuffle op "peins": <?= shuffleWoord('peins') ?></p>
    <p>Kok is een palindroom: <?= isPalindroom('kok') ?></p>
    <p>Lepel is een palindroom: <?= isPalindroom('Lepel') ?></p>
    <p>Palindroom is geen palindroom: <?= isPalindroom('palindroom') ?></p>
    <p>Is 'anagram' en 'Manarga' een anagram: <?= isAnagram('Natte poes', 'Toepasten') ?></p>
    <p>Is 'toepasten' en 'natte poes' een anagram: <?= isAnagram('Natte poes', 'Toepasten') ?></p>
    <p>'ananas' en 'anagram' zijn geen anagram: <?= isAnagram('ananas', 'anagram') ?></p>
</div>


<div id="oef12">
    <h3>Oefening 12</h3>
    <?php

    function getName($email)
    {
        $email = trim($email);
        $list = explode('@', $email);
        return $list[0];
    }

    function getDomain($email)
    {
        $email = trim($email);
        $list = explode('@', $email);
        return $list[1];
    }

    ?>
    <p>Voor emailadres vi@g.ra:<br>
        Naam: <?= getName('vi@g.ra') ?><br>
        Domein: <?= getDomain('vi@g.ra') ?></p>
</div>


<div id="oef13">
    <h3>Oefening 13</h3>
    <?php


    $lidstaten = ['België', 'Nederland', 'Frankrijk', 'Duitsland', 'Bulgarije', 'Cyprus',
        'Denemarken', 'Estland', 'Finland', 'Griekenland', 'Hongarije', 'Ierland', 'Italië',
        'Kroatië', 'Letland', 'Litouwen', 'Luxemburg', 'Malta', 'Oostenrijk', 'Polen',
        'Portugal', 'Roemenië', 'Slovenië', 'Slowakije', 'Spanje', 'Tsjechië', 'Zweden'];
    shuffle($lidstaten);

    ?>
    <ol>
        <?php foreach ($lidstaten as $land)
            echo '<li>' . $land . '</li>';
        ?>
    </ol>
</div>


<div id="oef14">
    <h3>Oefening 14</h3>
    <?php


    $lidstaten = ['België', 'Nederland', 'Frankrijk', 'Duitsland', 'Bulgarije', 'Cyprus',
        'Denemarken', 'Estland', 'Finland', 'Griekenland', 'Hongarije', 'Ierland', 'Italië',
        'Kroatië', 'Letland', 'Litouwen', 'Luxemburg', 'Malta', 'Oostenrijk', 'Polen',
        'Portugal', 'Roemenië', 'Slovenië', 'Slowakije', 'Spanje', 'Tsjechië', 'Zweden'];

    ?>
    <p>Alle landen die beginnen met B</p>
    <ol>
        <?php foreach ($lidstaten as $land) {
            if (strpos($land, 'B') === 0)
                echo '<li>' . $land . '</li>';
        }

        ?>
    </ol>
</div>


<div id="oef15">
    <h3>Oefening 15</h3>
    <?php


    $lidstaten = ['België', 'Nederland', 'Frankrijk', 'Duitsland', 'Bulgarije', 'Cyprus',
        'Denemarken', 'Estland', 'Finland', 'Griekenland', 'Hongarije', 'Ierland', 'Italië',
        'Kroatië', 'Letland', 'Litouwen', 'Luxemburg', 'Malta', 'Oostenrijk', 'Polen',
        'Portugal', 'Roemenië', 'Slovenië', 'Slowakije', 'Spanje', 'Tsjechië', 'Zweden'];
    ?>
    <p>Alle landen die niet beginnen met B</p>
    <?php foreach ($lidstaten as $key => $land) {
        if (substr($land, 0, 1) == "B")
            unset($lidstaten[$key]);
    }

    sort($lidstaten); ?>
    <ol>
        <?php foreach ($lidstaten as $land)
            echo '<li>' . $land . '</li>';
        ?>
    </ol>
</div>


<div id="oef16">
    <h3>Oefening 16</h3>
    <?php
    function parameterTest($a, $b)
    {
        echo 'A is ' . $a . '<br>
            B is ' . $b;
    }

    ?>
    <p><?php parameterTest("Hallo", 29, 3, 5, 5, 'ogerjo'); ?></p>
<!-- error - not enough params  <p>--><?php //parameterTest();?><!--</p>-->
<!-- error - not enough params  <p>--><?php //parameterTest(8);?><!--</p>-->
    <p><?php parameterTest(true, "PHP");?></p>
    <p><?php parameterTest('A, B', 3, 4.5);?></p>
    <p><?php parameterTest(1, 2, 3, 4);?></p><p>
</div>


<div id="oef17">
    <h3>Oefening 17</h3>
    <?php

    function convertTextToNumbers($string)
    {
        $termen = explode(';', $string);
        $result = '';

        foreach ($termen as $term) {
            switch ($term) {
                case 'nul':
                    $result .= '0';
                    break;
                case 'een':
                    $result .= '1';
                    break;
                case 'twee':
                    $result .= '2';
                    break;
                case 'drie':
                    $result .= '3';
                    break;
                case 'vier':
                    $result .= '4';
                    break;
                case 'vijf':
                    $result .= '5';
                    break;
                case 'zes':
                    $result .= '6';
                    break;
                case 'zeven':
                    $result .= '7';
                    break;
                case 'acht':
                    $result .= '8';
                    break;
                case 'negen':
                    $result .= '9';
                    break;
            }
        }

        return intval($result);
    }

    ?>
    <p>convertTextToNumbers('een;drie;nul;vijf') => <?= convertTextToNumbers('een;drie;nul;vijf') ?></p>
</div>


<div id="oef18">
    <h3>Oefening 18</h3>
    <?php

    function fibb($n)
    {
        if ($n === 0) return 0;
        if ($n === 1) return 1;

        $fibb = [0, 1];
        for ($i = 1; $i < ($n - 1); $i++) {
            $fibb[] = $fibb[$i] + $fibb[$i - 1];
        }

        foreach ($fibb as $term)
            echo $term . ' ';
    }

    ?>
    <p>fibb(6) => <?= fibb(6) ?></p>
</div>






<div id="oef19">
    <h3>Oefening 19</h3>
    <?php
    function veelvoud2($testVeelvoud){
        $grens = 2;
        $machtvantwee = 1;
        if ($testVeelvoud !== 0 ) {
            while ($grens  < $testVeelvoud) {
                $grens *= 2;
                $machtvantwee += 1;
            }
            echoVeelvoud($testVeelvoud, $machtvantwee);
        } else {
            echoVeelvoud($testVeelvoud, 0);
        }
    }
    function echoVeelvoud($testVeelvoud, $machtvantwee)
    {
        if ($testVeelvoud % 2 === 0) {
            echoVeelvoud($testVeelvoud, $machtvantwee);
        } else {
            $onderliggendeMacht = pow(2,($machtvantwee-1));
            $bovenliggendeMacht = pow(2, $machtvantwee);
            onderOfBoven($testVeelvoud, $onderliggendeMacht, $bovenliggendeMacht, $machtvantwee);
        }
    }
    function onderOfBoven($testVeelvoud, $onderliggendeMacht, $bovenliggendeMacht, $machtvantwee)
    {
        if ($testVeelvoud - $onderliggendeMacht > $bovenliggendeMacht - $testVeelvoud) {
            echo $testVeelvoud . ' is geen veelvoud van 2, het dichtste veelvoud is 2^' . $machtvantwee . ' = ' . $bovenliggendeMacht;
        } else {
            echo $testVeelvoud . ' is geen veelvoud van 2, het dichtste veelvoud is 2^' . ($machtvantwee - 1) . ' = ' . $onderliggendeMacht;
        }
    }

    ?>

    <p>veelvoud2(64) => <?= veelvoud2(64) ?></p>
    <p>veelvoud2(13) => <?= veelvoud2(13) ?></p>
    <p>veelvoud2(11) => <?= veelvoud2(11) ?></p>
    <p>veelvoud2(0) => <?= veelvoud2(0) ?></p>
<!--    <p>veelvoud2(-2) => --><?//= veelvoud2(-2) ?><!--</p>-->
    <p>veelvoud2(2) => <?= veelvoud2(2) ?></p>
    <p>veelvoud2(1) => <?= veelvoud2(1) ?></p>
</div>




<div id="oef20">
    <h3>Oefening 19 volgens cursus</h3>
    <?php

    function veelvoud($x)
    {
        // var om veelvoud van twee te zoeken, start met 2^j
        $i = 2;
        $j = 1;

        $next = true;

        while ($next) {
            // eerste veelvoud > 0 * 2
            if ($x == 0 ) {
                echo $x . ' is een veelvoud van 2, 2^0';
                $next = false;
            }
            // tweede veelvoud van 2 > 1 * 2
            else if ($x == $i) {
                echo $x . ' is een veelvoud van 2, 2^' . $j;
                $next = false;
            } else {
                // zet controlevaiabelen op volgend veelvoud van 2
                $i *= 2;
                $j++;

                if ($x < $i) {

                    if (($i - $x) < ($x - ($i / 2))) {
                        echo $x . ' is geen veelvoud van 2, het dichtste veelvoud is ' . $i . ' 2^' . $j;
                    } else {
                        echo $x . ' is geen veelvoud van 2, het dichtste veelvoud is ' . ($i / 2) . ' 2^' . ($j - 1);
                    }

                    $next = false;
                }

            }

        }
    }

    ?>

    <p>veelvoud(64) => <?= veelvoud(64) ?></p>
    <p>veelvoud(13) => <?= veelvoud(13) ?></p>
    <p>veelvoud(0) => <?= veelvoud(0) ?></p>
    <p>veelvoud(0) => <?= veelvoud(-2) ?></p>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
