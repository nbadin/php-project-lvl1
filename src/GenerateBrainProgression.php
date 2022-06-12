<?php

namespace BrainGames\GenerateBrainProgression;

function generateProgression(int $start, int $step, int $stepsCount): array
{
    $progression = [$start];
    for ($i = 1; $i < $stepsCount; $i += 1) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}

function generateRounds(int $roundsCount = 3): array
{
    $rules = 'What number is missing in the progression?';
    $roundsData = [];
    for ($i = 0; $i < $roundsCount; $i += 1) {
        $start = rand(1, 20);
        $step = rand(1, 20);
        $stepsCount = rand(5, 10);
        $progression = generateProgression($start, $step, $stepsCount);
        $indexOfHiddenItem = array_rand($progression);
        $answer = (string) $progression[$indexOfHiddenItem];
        $progression[$indexOfHiddenItem] = '..';
        $question = implode(' ', $progression);
        $roundsData[] = [$question, $answer];
    }
    return [$rules, $roundsData];
}
