<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProyectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'project' => new Project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProyectRequest $request)
    {
        # En esta linea se optienen los  que se envian desde el formulario
        $proyecto = new Project($request->validated());
        # En esta linea se concatena la informacion de la imagen
        $proyecto->image = $request->file('image')->store('images');
        #  Aca se guada la informacion en la db
        $proyecto->save();

        # Optimizar imagen
        // Image::make(storage_path('app/public/images'.  $project->image));
        $image = Image::make(Storage::get($project->image));
        $image->widen(600)->limitColors(255)->encode();

        Storage::put($project->image, (string) $image);

        return redirect()->route('projects.index')->with('status', 'El proyecto se almaceno con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // return $id;
        // $proyectos = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, CreateProyectRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');

            $project->save();
            # Optimizar imagen
            // Image::make(storage_path('app/public/images'.  $project->image));
            $image = Image::make(Storage::get($project->image));
            $image->widen(600)->limitColors(255)->encode();
            Storage::put($project->image, (string) $image);
        } else {
            $project->update(array_filter($request->validated()));
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }
}
