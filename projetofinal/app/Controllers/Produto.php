<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use CodeIgniter\HTTP\ResponseInterface;

class Produto extends BaseController
{
    private $produtoModel;
    public function __construct()
    {
        helper(['form', 'url']); // Carrega o helper de formulário
        $this->produtoModel = new ProdutoModel();
    }

    public function index()
    {
        return view ('produtos', [
            'produtos'=>$this->produtoModel->paginate(10),
            'pager'=>$this->produtoModel->pager
        ]);
    }
    public function create()
     {
        return view('formProduto');
     }

     public function store()
     {
         if ($this->produtoModel->save($this->request->getPost())){
             return view("messages", [
                 'message'=> 'Produto salvo com sucesso'
             ]);
 
         } else {
             echo "Ocorreu um erro";
         }
     }

     public function edit($id)
     {
        return view('formProduto', [
            'produto'=> $this->produtoModel->find($id)
        ]);
     }
     public function delete($id)
     {
        if ($this->produtoModel->delete($id)){
            echo view('messages',[
               'message' => 'Produto excluído com sucesso'
            ]);
        } else {
            echo 'Erro.';
        }
     }
}
