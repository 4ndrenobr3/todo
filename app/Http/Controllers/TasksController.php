<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = [
            [
                "id" => 1,
                "nome" => "Estudar PHP",
                "complete" => true
            ],
            [
                "id" => 2,
                "nome" => "Estudar Laravel",
                "complete" => false
            ],
            [
                "id" => 3,
                "nome" => "Estudar Vue",
                "complete" => false
            ]
        ];

        return $tasks;
    }

    public function store()
    {
        return "OK";
    }
}
