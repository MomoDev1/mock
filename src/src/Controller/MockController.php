<?php


namespace App\Controller;


use App\Core\Controller;
use App\Core\Router\Route;


class MockController extends Controller
{
    #[Route('/', method: 'get')]
    public function index(): string
    {
        return 'Hi I \'m basic API';
    }

    #[Route('/{type}', method: 'post')]
    public function filterConfig(string $type): string
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/mock/' . $type . '.json');
    }
}