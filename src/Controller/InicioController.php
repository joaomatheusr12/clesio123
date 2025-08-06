<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;  // Importante

class InicioController extends AppController
{
    public function index()
    {
        // Use o TableRegistry para pegar o model
        $consultasTable = TableRegistry::getTableLocator()->get('Consultas');
        $consultas = $consultasTable->find('all')->toArray();

        $this->set(compact('consultas'));
    }
}
