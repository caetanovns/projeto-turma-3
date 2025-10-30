<?php

namespace App\Interfaces;

interface Selectable
{
    public function getSelectLabel(): string;
    public function getSelectId(): int;
}
