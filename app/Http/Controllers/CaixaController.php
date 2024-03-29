<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use Illuminate\Http\Request;
use PgSql\Lob;

class CaixaController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Caixa::all();

        // dd($dados);

        return view("caixa.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("caixa.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'nome' => "required|max:100",
            'conteudo' => "required|max:16",
            'preco' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'conteudo.required' => "O :attribute é obrigatório",
            'conteudo.max' => "Só é permitido 16 caracteres",
        ]);

        Caixa::create(
            [
                'nome' => $request->nome,
                'preco' => $request->preco,
                'conteudo' => $request->conteudo,
            ]
        );
        return redirect('caixa');
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
        $dado = Caixa::findOrFail($id);

        return view("caixa.form", [
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
            'nome' => "required|max:100",
            'conteudo' => "required|max:16",
            'preco' => "nullable"
        ], [
            'nome.required' => "O :attribute é obrigatório",
            'nome.max' => "Só é permitido 100 caracteres",
            'conteudo.required' => "O :attribute é obrigatório",
            'conteudo.max' => "Só é permitido 16 caracteres",
        ]);

        Caixa::updateOrCreate(
            ['id' => $request->id],
            [
                'nome' => $request->nome,
                'preco' => $request->preco,
                'conteudo' => $request->conteudo,
            ]
        );

        return redirect('caixa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Caixa::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('caixa');
    }

    public function search(Request $request)
    {
        if (!empty($request->nome)) {
            $dados = Caixa::where(
                "nome",
                "like",
                "%" . $request->nome . "%"
            )->get();
        } else {
            $dados = Caixa::all();
        }
        // dd($dados);

        return view("caixa.list", ["dados" => $dados]);
    }
}
