<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User as UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper('form');

        return view('login/index');
    }

    public function store()
    {
        $request = $this->request->getPost([
            'name'
        ]);

        $rules = [
            'name' => [
                'label' => 'Nome',
                'rules' => 'required|max_length[40]|min_length[3]'
            ]
        ];

        $valid = $this->validateData($request, $rules);

        if(!$valid) {
            return redirect()->back()->withInput();
        }

        $data = (object) $this->validator->getValidated();
        $model = new UserModel();
        $model->save($data);

        $user = $model->find($model->getInsertId());

        $session = session();
        $session->set([
            'user_id' => $user->id,
            'user_name' => $user->name
        ]);

        return redirect()->to('comentarios');
    }
}
