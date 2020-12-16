<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Barryvdh\DomPDF\Facade as PDF;

class PDFViewController extends Controller
{

    private $model;
    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data['model'] = $this->model->all();
        return PDF::loadView('relatorio', $data)
            ->stream();
    }
}
