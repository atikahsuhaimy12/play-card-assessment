<?php
header("Content-Type: text/plain; charset=UTF-8");

try {

    // Read input
    $numpeople = $_GET['people'] ?? null;

    // Validate input
    if ($numpeople === null || $numpeople === "" || !is_numeric($numpeople)) {
        echo "Input value does not exist or value is invalid";
        exit;
    }

    $people = (int) $numpeople;

    if ($people <= 0) {
        echo "Input value does not exist or value is invalid";
        exit;
    }

    //deck creation
    $suits = ['S', 'H', 'D', 'C'];
    $deck = [];

    foreach ($suits as $suit) {
        for ($rank = 1; $rank <= 13; $rank++) {
            $deck[] = $suit . '-' . convertRank($rank);
        }
    }

    if (count($deck) !== 52) {
        echo "Irregularity occurred";
        exit;
    }

    //shuffle
    if (!shuffle($deck)) {
        echo "Irregularity occurred";
        exit;
    }

    //prepare hand
    $hands = array_fill(0, $people, []);

    //deal
    for ($i = 0; $i < 52; $i++) {
        $index = $i % $people;
        $hands[$index][] = $deck[$i];
    }

    //distribution
    $count = 0;
    foreach ($hands as $hand) {
        $count += count($hand);
    }

    if ($count !== 52) {
        echo "Irregularity occurred";
        exit;
    }

    //Output
    $rows = [];
    foreach ($hands as $hand) {
        $rows[] = implode(",", $hand);
    }

    echo implode("\n", $rows);
    exit;

} catch (Throwable $e) {
    echo "Irregularity occurred";
    exit;
}

function convertRank(int $rank): string
{
    switch ($rank) {
        case 1: return "A";
        case 10: return "X";
        case 11: return "J";
        case 12: return "Q";
        case 13: return "K";
        default: return (string) $rank;
    }
}
