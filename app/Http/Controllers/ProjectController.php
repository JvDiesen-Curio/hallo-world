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


    public function show(project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function edit(project $project)
    {
        return view('projects.edit', [
            "project" => $project,
            "categories" => categorie::all()
        ]);
    }

    public function update(project $project)
    {

        $data = request()->validate([
            'naam' => ['required', 'min:3'],
            'omschrijving' => ['required'],
            'categorie_id' => ['required']
        ]);

        $project->update($data);


        return redirect('/projects');
    }

    public function delete(project $project)
    {

        return view('projects.delete', [
            "project" => $project
        ]);
    }

    public function deleteProject(project $project)
    {

        $project->delete();

        return redirect('/projects');
    }
}
