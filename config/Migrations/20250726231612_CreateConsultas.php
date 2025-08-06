<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateConsultas extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('consultas');
        $table->addColumn('paciente_id', 'integer', ['null' => false])
            ->addColumn('medico_id', 'integer', ['null' => false])
            ->addColumn('data_hora', 'datetime', ['null' => false])
            ->addColumn('status', 'string', ['limit' => 20, 'default' => 'agendada'])
            ->addTimestamps();

        $table->addForeignKey('paciente_id', 'pacientes', 'id', [
                    'delete' => 'CASCADE',
                    'update' => 'NO_ACTION'
                ])
            ->addForeignKey('medico_id', 'medicos', 'id', [
                    'delete' => 'CASCADE',
                    'update' => 'NO_ACTION'
                ]);

        $table->create();
    }

}
