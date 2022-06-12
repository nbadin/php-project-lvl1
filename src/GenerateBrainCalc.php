<?php

namespace BrainGames\GenerateBrainCalc;

function sum(int $a, int $b): int
{
    return $a + $b;
}

function diff(int $a, int $b): int
{
    return $a - $b;
}

function mul(int $a, int $b): int
{
    return $a * $b;
}

const MATH_OPERATIONS = ['+', '-', '*'];

function calc(string $operator, int $firstNum, int $secondNum)
{
    switch ($operator) {
        case '+':
            return sum($firstNum, $secondNum);
        case '-':
            return diff($firstNum, $secondNum);
        case '*':
            return mul($firstNum, $secondNum);
    }
}

function generateRounds(int $roundsCount = 3): array
{
    $rules = 'What is the result of the expression?';
    $roundsData = [];
    for ($i = 0; $i < $roundsCount; $i += 1) {
        $firstNum = rand(1, 50);
        $secondNum = rand(1, 50);
        $operator = MATH_OPERATIONS[array_rand(MATH_OPERATIONS)];
        $question = "{$firstNum} {$operator} {$secondNum}";
        $answer = (string) calc($operator, $firstNum, $secondNum);
        $roundsData[] = [$question, $answer];
    }
    return [$rules, $roundsData];
}
