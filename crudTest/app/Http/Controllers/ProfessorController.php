<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professor = Professor::all();
        return view('professor.index')->with('professor', $professor);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Professor::create($input);
        return redirect('professor')->with('flash_message', 'Professor Adicionado!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.show')->with('professor', $professor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::find($id);
        return view('professor.edit')->with('professor', $professor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor::find($id);
        $input = $request->all();
        $professor->update($input);
        return redirect('professor')->with('flash_message', 'Professor Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Professor::destroy($id);
        return redirect('professor')->with('flash_message', 'Professor deletado!');  
    }
}
