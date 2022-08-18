<?php

declare(strict_types=1);

namespace NikolayTim\Dumper;

class Dumper
{
    public function dump($param): void
    {
        echo '<pre>';
        var_dump($param);
        echo '</pre>';
    }
}