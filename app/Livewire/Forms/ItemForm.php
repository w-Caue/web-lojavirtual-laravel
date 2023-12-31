<?php

namespace App\Livewire\Forms;

use App\Models\Item;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ItemForm extends Form
{
    #[Rule('required')]
    #[Rule('min:3')]
    #[Rule('unique:itens')]
    public $nome = '';

    #[Rule('required')]
    #[Rule('min:3')]
    public $descricao = '';

    #[Rule('required')]
    #[Rule('numeric')]
    public $preco = '';

    public $marca = '';

    public $grupo = '';

    public function store(){
        $this->validate();

        Item::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'marca_id' => $this->marca,
            'grupo_id' => $this->grupo
        ]);
    }
}
