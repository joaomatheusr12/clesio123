<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ConsultasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('consultas');
        $this->setPrimaryKey('id');

        $this->belongsTo('Medicos', [
            'foreignKey' => 'medico_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('medico_id')
            ->requirePresence('medico_id', 'create')
            ->notEmptyString('medico_id');

        $validator
            ->integer('paciente_id')
            ->requirePresence('paciente_id', 'create')
            ->notEmptyString('paciente_id');

        $validator
            ->dateTime('data_hora')
            ->requirePresence('data_hora', 'create')
            ->notEmptyDateTime('data_hora', 'Data e hora são obrigatórias.');

        return $validator;
    }
}
