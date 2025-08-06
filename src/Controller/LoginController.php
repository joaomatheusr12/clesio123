<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;

class LoginController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            $username = $this->request->getData('username');
            $password = $this->request->getData('password');

            if ($username === 'adm123' && $password === 'adm123') {
                // Redireciona para a página de início
                return $this->redirect(['controller' => 'Inicio', 'action' => 'index']);

            } else {
                $this->Flash->error('Usuário ou senha inválidos.');
            }
        }
    }
}
