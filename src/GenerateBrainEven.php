<?php

namespace BrainGames\GenerateBrainEven;

function isEven(int $num)
{
    return $num % 2 === 0;
}

function generateRounds(int $roundsCount = 3): array
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $roundsData = [];
    for ($i = 0; $i < $roundsCount; $i += 1) {
        $question = rand();
        $answer = isEven($question) ? 'yes' : 'no';
        $roundsData[] = [$question, $answer];
    }
    return [$rules, $roundsData];
}
