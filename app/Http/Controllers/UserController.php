<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile.profile');
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if (!empty($data['password'])){
            if ($data['password'] === $data['confirm_senha']) 
                $data['password'] = bcrypt($data['password']);
            else
                return redirect()
                        ->back()
                        ->with('error', 'Os campos Senha e Confirmar Senha tem que ser iguais.');
        }
        else
            unset($data['password']);

        $update = auth()->user()->update($data);

        if ($update)
            return redirect()
                        ->route('profile.edit')
                        ->with('success', 'Atualizado com sucesso!');

        return redirect()
                        ->back()
                        ->with('error', 'Erro ao atualizar o perfil.');
        

    }
}
