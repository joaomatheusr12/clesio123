<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medico $medico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Medico'), ['action' => 'edit', $medico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Medico'), ['action' => 'delete', $medico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Medicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Medico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="medicos view content">
            <h3><?= h($medico->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($medico->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Especialidade') ?></th>
                    <td><?= h($medico->especialidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Crm') ?></th>
                    <td><?= h($medico->crm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($medico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($medico->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($medico->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Consultas') ?></h4>
                <?php if (!empty($medico->consultas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Paciente Id') ?></th>
                            <th><?= __('Medico Id') ?></th>
                            <th><?= __('Data Hora') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($medico->consultas as $consulta) : ?>
                        <tr>
                            <td><?= h($consulta->id) ?></td>
                            <td><?= h($consulta->paciente_id) ?></td>
                            <td><?= h($consulta->medico_id) ?></td>
                            <td><?= h($consulta->data_hora) ?></td>
                            <td><?= h($consulta->status) ?></td>
                            <td><?= h($consulta->created) ?></td>
                            <td><?= h($consulta->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Consultas', 'action' => 'view', $consulta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Consultas', 'action' => 'edit', $consulta->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Consultas', 'action' => 'delete', $consulta->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $consulta->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<style>
  /* Fundo da página */
  body {
    background-color: #007bff;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    margin: 0;
    padding: 20px;
    min-height: 100vh;
  }

  /* Layout da página - row */
  .row {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
  }

  /* Sidebar */
  aside.column {
    flex: 1 1 180px;
    background-color: rgba(10, 10, 70, 0.9);
    border-radius: 10px;
    padding: 20px;
    box-sizing: border-box;
    min-width: 180px;
  }

  .side-nav h4.heading {
    margin-top: 0;
    margin-bottom: 15px;
    font-weight: 700;
    font-size: 1.2rem;
    border-bottom: 2px solid rgba(75, 232, 135, 0.8);
    padding-bottom: 8px;
    color: rgba(75, 232, 135, 0.9);
  }

  .side-nav-item {
    display: block;
    margin-bottom: 10px;
    color: rgba(75, 232, 135, 0.8);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
    cursor: pointer;
  }

  .side-nav-item:hover {
    color: #4ce887;
    text-decoration: underline;
  }

  /* Conteúdo principal */
  .column-80 {
    flex: 4 1 600px;
  }

  /* Título principal */
  .medicos.view.content h3 {
    margin-top: 0;
    margin-bottom: 20px;
    color: rgba(75, 232, 135, 0.9);
  }

  /* Tabelas */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
    background-color: rgba(10, 10, 70, 0.9);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(0,0,0,0.6);
  }

  table th,
  table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid rgba(75, 232, 135, 0.3);
    color: rgba(75, 232, 135, 0.9);
  }

  table th {
    background-color: rgba(75, 232, 135, 0.2);
    font-weight: 700;
  }

  table tr:last-child td {
    border-bottom: none;
  }

  /* Links ações dentro da tabela */
  .actions a,
  .actions form {
    margin-right: 10px;
    color: rgba(75, 232, 135, 0.8);
    font-weight: 600;
    text-decoration: none;
  }

  .actions a:hover {
    color: #4ce887;
    text-decoration: underline;
  }

  /* Container related consultas */
  .related h4 {
    color: rgba(75, 232, 135, 0.9);
    margin-bottom: 15px;
  }

  /* Responsividade para tabela */
  .table-responsive {
    overflow-x: auto;
  }
</style>
