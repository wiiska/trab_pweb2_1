<?php

namespace App\Http\Controllers;

use App\Models\Skin;
use Illuminate\Http\Request;
use PgSql\Lob;

class SkinController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Skin::all();

        // dd($dados);

        return view("skin.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("skin.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'raridade' => "required|max:100",
            'cor' => "required|max:16",
            'float' => "nullable"
        ], [
            'raridade.required' => "O :attribute é obrigatório",
            'raridade.max' => "Só é permitido 100 caracteres",
            'cor.required' => "O :attribute é obrigatório",
            'cor.max' => "Só é permitido 16 caracteres",
        ]);

        Skin::create(
            [
                'raridade' => $request->raridade,
                'float' => $request->float,
                'cor' => $request->cor,
            ]
        );
        return redirect('skin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dado = Skin::findOrFail($id);


        return view("skin.form", [
            'dado' => $dado,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //app/http/Controller

        $request->validate([
            'raridade' => "required|max:100",
            'cor' => "required|max:16",
            'float' => "nullable"
        ], [
            'raridade.required' => "O :attribute é obrigatório",
            'raridade.max' => "Só é permitido 100 caracteres",
            'cor.required' => "O :attribute é obrigatório",
            'cor.max' => "Só é permitido 16 caracteres",
        ]);

        Skin::updateOrCreate(
            ['id' => $request->id],
            [
                'raridade' => $request->raridade,
                'float' => $request->float,
                'cor' => $request->cor,
            ]
        );

        return redirect('skin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Skin::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('skin');
    }

    public function search(Request $request)
    {
        if (!empty($request->raridade)) {
            $dados = Skin::where(
                "raridade",
                "like",
                "%" . $request->raridade . "%"
            )->get();
        } else {
            $dados = Skin::all();
        }
        // dd($dados);

        return view("skin.list", ["dados" => $dados]);
    }
}
