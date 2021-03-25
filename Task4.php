<?php


class Task4
{

    public function num(int $int)
    {
        if ($int < 0) {
            return "сообщение 1";
        } elseif ($int == 0) {
            return "сообщение 2";
        } elseif ($int > 0) {
            return "сообщение 3";
        }
    }
}

$task_4 = new Task4();

echo $task_4->num(5);