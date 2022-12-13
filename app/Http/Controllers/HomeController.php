<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __invoke(): array
    {
        return [
            'success' => true,
            'message' => 'Welcome to Laravel API Rest',
            'data' => [
                'service' => 'Laravel API Rest',
                'version' => '1.0',
                'message' => 'Welcome to Laravel API Rest',
                'language' => app()->getLocale(),
                'suport' => 'antonio@3w.agency'
            ]
        ];
    }
}
