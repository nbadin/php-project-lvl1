<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($gameData)
{
    line('Welcome to the Brain Game!');
    $username = prompt('May I have your name?');
    line("Hello, %s!", $username);
    [$rules, $roundsData] = $gameData;
    line("%s", $rules);
    foreach ($roundsData as $round) {
        [$question, $correctAnswer] = $round;
        line("Question: %d", $question);
        $usersAnswer = prompt('Your answer: ');
        if ($usersAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $usersAnswer, $correctAnswer);
            line("Let's try again, %s!", $username);
            exit();
        }
    }
    line("Congratulations, %s!", $username);
}
