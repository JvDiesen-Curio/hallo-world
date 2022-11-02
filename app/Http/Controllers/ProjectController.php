<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{



    public function index()
    {

        $data = project::all();

        return view('projects.index', [
            'projects' => $data
        ]);
    }

    public function create()
    {
        $categories = categorie::all();
        return view('projects.create', [
            'categories' => $categories
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'naam' => ['required', 'min:3'],
            'omschrijving' => ['required'],
            'categorie_id' => ['required']
        ]);

        project::create($data);

        return redirect('/projects');
    }
}
