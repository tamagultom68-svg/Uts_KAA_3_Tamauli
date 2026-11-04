<?php

class Controller
{
    protected function render(string $page, array $data = [], string $title = 'Kelontong Store'): void
    {
        extract($data);

        ob_start();
        require __DIR__ . '/../../views/pages/' . $page . '.php';
        $content = ob_get_clean();

        require __DIR__ . '/../../views/layouts/main.php';
    }
}