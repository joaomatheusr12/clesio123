<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Consulta extends Entity
{
    
    protected array $_accessible = [
        'medico_id' => true,
        'paciente_id' => true,
        'data_hora' => true,
        'medico' => true,
        'paciente' => true,
    ];
}
