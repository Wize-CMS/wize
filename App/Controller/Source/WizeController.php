<?php

namespace Source;

use App\Interfaces\Controller\IController;

abstract class WizeController implements IController
{
    public function render(string $path, ?array $data = []): string
    {
        return 'ola mundo';
    }
}
