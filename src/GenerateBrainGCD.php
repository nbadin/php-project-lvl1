<?php

namespace BrainGames\GenerateBrainGCD;

function getGCD($firstNum, $secondNum)
{
    $divider = min($firstNum, $secondNum);
    while ($divider > 0) {
        if ($firstNum % $divider === 0 && $secondNum % $divider === 0) {
            return $divider;
        }
        $divider -= 1;
    }
}

function generateRounds($roundsCount = 3): array
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $roundsData = [];
    for ($i = 0; $i < $roundsCount; $i += 1) {
        $firstNum = rand(1, 50);
        $secondNum = rand(1, 50);
        $question = "{$firstNum} {$secondNum}";
        $answer = (string) getGCD($firstNum, $secondNum);
        $roundsData[] = [$question, $answer];
    }
    return [$rules, $roundsData];
}
