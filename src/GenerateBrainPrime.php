<?php

namespace BrainGames\GenerateBrainPrime;

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    $i = 2;
    while ($i < $num) {
        if ($num % $i === 0) {
            return false;
        }
        $i += 1;
    }
    return true;
}

function generateRounds($roundsCount = 3): array
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $roundsData = [];
    for ($i = 0; $i < $roundsCount; $i += 1) {
        $question = rand(2, 15);
        $answer = isPrime($question) ? 'yes' : 'no';
        $roundsData[] = [$question, $answer];
    }
    return [$rules, $roundsData];
}
