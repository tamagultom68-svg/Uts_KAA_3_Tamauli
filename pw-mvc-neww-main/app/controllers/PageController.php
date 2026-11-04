<?php

require_once __DIR__ . '/Controller.php';

class PageController extends Controller
{
    public function about()
    {
        $this->render('about', [], 'Tentang - MyStore');
    }
}