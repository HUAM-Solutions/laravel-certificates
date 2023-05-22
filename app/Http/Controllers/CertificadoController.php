<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificado;
use App\Models\Curso;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificados = Certificado::all();
        return view('certificados.index', compact('certificados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('certificados.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $certificado = Certificado::create($request->all());
        return redirect()->route('certificados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificado $certificado)
    {
        return view('certificados.show', compact('certificado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificado $certificado)
    {
        $cursos = Curso::all();
        return view('certificados.edit', compact('certificado', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificado $certificado)
    {
        $certificado->update($request->all());
        return redirect()->route('certificados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificado $certificado)
    {
        $certificado->delete();
        return redirect()->route('certificados.index');
    }
}
