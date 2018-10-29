<?php

class Task
{
    public $description;

    public $completed;


    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function getDescription()
    {
        return $this->description;
    }
}