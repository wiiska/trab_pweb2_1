<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use PgSql\Lob;

class PedidoController extends Controller
{
    public function index()
    {
        //app/http/Controller
        $dados = Pedido::all();

        // dd($dados);

        return view("pedido.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("pedido.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //app/http/Controller

        $request->validate([
            'cliente' => "required|max:100",
            'quantidade' => "required|max:16",
            'contato' => "nullable"
        ], [
            'cliente.required' => "O :attribute é obrigatório",
            'cliente.max' => "Só é permitido 100 caracteres",
            'quantidade.required' => "O :attribute é obrigatório",
            'quantidade.max' => "Só é permitido 16 caracteres",
        ]);

        Pedido::create(
            [
                'cliente' => $request->cliente,
                'contato' => $request->contato,
                'quantidade' => $request->quantidade,
            ]
        );
        return redirect('pedido');
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
        $dado = Pedido::findOrFail($id);

        return view("pedido.form", [
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
            'cliente' => "required|max:100",
            'quantidade' => "required|max:16",
            'contato' => "nullable"
        ], [
            'cliente.required' => "O :attribute é obrigatório",
            'cliente.max' => "Só é permitido 100 caracteres",
            'quantidade.required' => "O :attribute é obrigatório",
            'quantidade.max' => "Só é permitido 16 caracteres",
        ]);

        Pedido::updateOrCreate(
            ['id' => $request->id],
            [
                'cliente' => $request->cliente,
                'contato' => $request->contato,
                'quantidade' => $request->quantidade,
            ]
        );

        return redirect('pedido');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dado = Pedido::findOrFail($id);
        // dd($dado);
        $dado->delete();

        return redirect('pedido');
    }

    public function search(Request $request)
    {
        if (!empty($request->cliente)) {
            $dados = Pedido::where(
                "cliente",
                "like",
                "%" . $request->cliente . "%"
            )->get();
        } else {
            $dados = Pedido::all();
        }
        // dd($dados);

        return view("pedido.list", ["dados" => $dados]);
    }
}
