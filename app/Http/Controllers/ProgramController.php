<?php

namespace App\Http\Controllers;

use App\Models\Program;

class ProgramController extends Controller
{
    public function insert()
    {
        Program::create([
            'title' => 'Web Development Bootcamp',
            'description' => 'Belajar fullstack dengan Laravel dan Vue.js',
            'duration' => '12 weeks'
        ]);

        return "Data program berhasil disimpan!";
    }

   public function all()
{
    $programs = Program::all();
    dump($programs);
}

}
