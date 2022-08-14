<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index()
    {
        $data['show_phrase'] = true;
        $data['first_phrase'] = 'Frase do meu projeto';
        $data['another_phrase'] = 'Outra frase do meu projeto';
        $data['loop_products'] = [
            0 => 'Desodorante',
            1 => 'Refrigerante',
            2 => 'Sabonete',
            3 => 'Carne de Soja',
        ];
        return view('home', $data);
    }

    public function form()
    {
        $form_data = [
            'name' => 'Joao',
            'email' => 'joao@ribeiro.com',
            'telephone' => '132423425',
            'address' => 'Rua Joanito, 24'
        ];
        return view('form', $form_data);
    }

    public function shop()
    {
        $uuid = '893h49h47br87fggewiffsdwe7fhe7f';
        $data_shop = [
            'id' => $uuid,
            'product' => 'laço',
            'price' => 234.67,
            'quantity' => 45,
            'isPromo' => false,
            'isDiscount' => true,
        ];
        return view('shop', $data_shop);
    }
}
