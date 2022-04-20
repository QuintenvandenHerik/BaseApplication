<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('modules/dashboard', compact('modules'));
    }

    public function create()
    {
        return view('modules/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image_url' => 'required',
            'status' => 'required',
        ]);

        Module::create($request->all());

        return redirect()->route('dashboard')
            ->with('success','Module created successfully.');
    }

    public function show(Module $module)
    {
        $module = Module::findOrFail($module);

        return view('modules.show', compact('module'));
    }

    public function edit(Module $module)
    {
        $module = Module::findOrFail($module);

        return view('modules.show', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image_url' => 'required',
            'status' => 'required',
        ]);

        $module->update($request->all());

        return redirect()->route('dashboard')
            ->with('success','Module updated successfully.');
    }

    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('dashboard')
            ->with('success','Post deleted successfully');
    }
}
