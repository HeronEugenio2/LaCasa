<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class ItemController extends Controller
{
//CONTRUTOR QUE RECEBE DADOS DA MODEL E COLOCA NO OBJETO
    private $oitem;
    public function __construct(item $oitem)
    {
        $this->oitem=$oitem;
    }

//CARREGA A LISTA NA VIEW DESEJADA
    public function index()
    {
        $titulo='Itens';
        $VaiPraView=$this->oitem->all();
        return view('Itens', compact('VaiPraView', 'titulo'));
    }
//INSERE UM OBJETO NOVO NO BANCO
    public function create()
    {
        $titulo = 'Cadastrar Itens';
        return view('create', compact('titulo'));
    }

    public function store(Request $request)
    {
        //PEGA DADOS DO TEXTBOX EXCETO O TOKEN
        $dataform=$request->except('_token');
        
        //VALIDA DADPS(usar "oitem")
        $this->validate($request, $this->oitem->rules);
        
        //CADASTRA
        $insert=$this->oitem->insert($dataform);

        //INSERIU MUDA PAGINA
        if($insert){
            return redirect()->route('itens.index');
        }

        //NAO INSERIU CONTINUA NA PAG
        else{
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }
//RECEBE O OBJETO QUE VAI SER EDITADO E RETORNA ELE
    public function edit($id)
    {
        $titulo="editar";
        $encontroRV=$this->oitem->find($id);

        return view('create', compact('titulo','encontroRV'));
    }
//RECEBE OBJETO PELA ID E FAZ UPDATE O BANCO
    public function update(Request $request, $id)
    {
        $dataform=$request->all();
        $oitem=$this->oitem->find($id);
        $update=$oitem->update($dataform);
        if($update)
        {
            return redirect()->route('itens.index');
        }
        else
        {
            return redirect()->route('itens.edit', $id);
        }
    }
//DELETA UM OBJETO DO BANCO
    public function destroy($id)
    {
        $item=$this->oitem->find($id);
        $deleta=$item->delete();
            return redirect()->route('itens.index');
    }

}
