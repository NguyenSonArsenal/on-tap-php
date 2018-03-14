<?php

interface Interviewer
{
    public function askQuestions();
}

// ================================

class Developer implements Interviewer
{
    public function askQuestions()
    {
        // TODO: Implement askQuestions() method.
        echo 'Asking about design parttern!';
    }
}

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        // TODO: Implement askQuestions() method.
        echo 'Asking about community building';
    }
}

// ================================

abstract class HiringManager
{
    // Factory method
    abstract protected function makeInterviewer();

    public function takeInterviewer()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}

// ================================

class DevelopmenManager extends HiringManager
{
    protected function makeInterviewer()
    {
        // TODO: Implement makeInterviewer() method.
        return new Developer();
    }
}

class MaketingManager extends HiringManager
{
    protected function makeInterviewer()
    {
        // TODO: Implement makeInterviewer() method.
        return new CommunityExecutive();
    }
}

// ================================

$dev = new DevelopmenManager();
$dev->takeInterviewer();

$maketing = new MaketingManager();
$maketing->takeInterviewer();