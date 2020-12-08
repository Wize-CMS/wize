<?php

namespace Controller;

interface iController {
    public function render(string $path, ?array $data = []): string;
};
