<?php
declare(strict_types=1);

namespace App\Controller;

class ConsultasController extends AppController
{
    public function add()
    {
        $consulta = $this->Consultas->newEmptyEntity();

        if ($this->request->is('post')) {
            // Junta data e hora do formulário e seta no campo data_hora
            $data = $this->request->getData('data');
            $hora = $this->request->getData('hora');

            if (!empty($data) && !empty($hora)) {
                $this->request = $this->request->withData('data_hora', $data . ' ' . $hora);
            }

            $consulta = $this->Consultas->patchEntity($consulta, $this->request->getData());

            if ($this->Consultas->save($consulta)) {
                $this->Flash->success(__('Consulta salva com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Erro ao salvar consulta.'));
        }

        // Carrega os médicos e pacientes para os selects
        $medicos = $this->Consultas->Medicos->find('list')->toArray();
        $pacientes = $this->Consultas->Pacientes->find('list')->toArray();

        $this->set(compact('consulta', 'medicos', 'pacientes'));
    }

    public function index()
    {
        $consultas = $this->Consultas
            ->find('all')
            ->contain(['Medicos', 'Pacientes']) // carrega as associações
            ->toArray();

        $this->set(compact('consultas'));
    }

    public function edit($id = null)
    {
        $consulta = $this->Consultas->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $consulta = $this->Consultas->patchEntity($consulta, $this->request->getData());
            if ($this->Consultas->save($consulta)) {
                $this->Flash->success('Paciente vinculado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erro ao vincular paciente.');
        }

        $pacientes = $this->Consultas->Pacientes->find('list');
        $this->set(compact('consulta', 'pacientes'));
    }
}
