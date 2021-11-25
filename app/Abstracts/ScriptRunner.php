<?php
namespace App\Abstracts;

use App\Interfaces\RunnerInterface;

abstract  class ScriptRunner implements RunnerInterface
{
    abstract public function Run();
}
