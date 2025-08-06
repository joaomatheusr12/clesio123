<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Paciente> $pacientes
 */
?>
<div class="pacientes index content">
    <?= $this->Html->link(__('New Paciente'), ['action' => 'add'], ['class' => 'button new-paciente-button']) ?>
    <h3><?= __('Pacientes') ?></h3>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= $this->Number->format($paciente->id) ?></td>
                    <td><?= h($paciente->nome) ?></td>
                    <td><?= h($paciente->cpf) ?></td>
                    <td><?= h($paciente->data_nascimento) ?></td>
                    <td><?= h($paciente->created) ?></td>
                    <td><?= h($paciente->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id], ['class' => 'action-link view']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id], ['class' => 'action-link edit']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $paciente->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $paciente->id),
                                'class' => 'action-link delete'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
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

  /* Container geral da lista */
  .pacientes.index.content {
    max-width: 1100px;
    margin: 0 auto;
    background-color: rgba(0, 0, 50, 0.85); /* Azul escuro translúcido */
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 0 25px rgba(0,0,0,0.6);
  }

  /* Título */
  .pacientes.index.content h3 {
    color: rgba(75, 232, 135, 0.9);
    font-weight: 700;
    font-size: 2rem;
    margin-bottom: 25px;
  }

  /* Botão novo paciente */
  .button.new-paciente-button {
    background-color: rgba(75, 232, 135, 0.8);
    color: white !important;
    padding: 12px 20px;
    font-weight: 700;
    border-radius: 10px;
    float: right;
    margin-bottom: 20px;
    text-decoration: none;
    box-shadow: 0 5px 15px rgba(75, 232, 135, 0.6);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .button.new-paciente-button:hover,
  .button.new-paciente-button:focus {
    background-color: rgba(40, 150, 80, 0.9);
    box-shadow: 0 7px 20px rgba(40, 150, 80, 0.8);
    outline: none;
  }

  /* Tabela responsiva */
  .table-responsive {
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    color: white;
  }

  thead tr {
    background-color: rgba(40, 150, 80, 0.8);
  }

  thead th {
    padding: 12px 15px;
    text-align: left;
    font-weight: 700;
    border-bottom: 2px solid rgba(75, 232, 135, 0.8);
  }

  tbody tr:nth-child(even) {
    background-color: rgba(0, 0, 50, 0.5);
  }

  tbody tr:hover {
    background-color: rgba(75, 232, 135, 0.15);
  }

  tbody td {
    padding: 12px 15px;
    vertical-align: middle;
  }

  /* Actions na tabela */
  td.actions {
    white-space: nowrap;
  }

  .action-link {
    margin-right: 12px;
    font-weight: 600;
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 6px;
    transition: background-color 0.3s ease;
  }

  .action-link.view {
    color: #4ce887;
    background-color: rgba(0, 0, 0, 0.15);
  }

  .action-link.view:hover {
    background-color: rgba(75, 232, 135, 0.3);
  }

  .action-link.edit {
    color: #f0db4f;
    background-color: rgba(0, 0, 0, 0.15);
  }

  .action-link.edit:hover {
    background-color: rgba(240, 219, 79, 0.3);
  }

  .action-link.delete {
    color: #ff6b6b;
    background-color: rgba(0, 0, 0, 0.15);
  }

  .action-link.delete:hover {
    background-color: rgba(255, 107, 107, 0.3);
  }

  /* Paginação */
  .paginator {
    margin-top: 25px;
    text-align: center;
  }

  .pagination {
    list-style: none;
    padding: 0;
    display: inline-flex;
    gap: 10px;
  }

  .pagination li a,
  .pagination li span {
    display: block;
    padding: 8px 14px;
    color: rgba(75, 232, 135, 0.9);
    background-color: rgba(0, 0, 50, 0.8);
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: background-color 0.3s ease;
  }

  .pagination li a:hover {
    background-color: rgba(40, 150, 80, 0.9);
    color: white;
  }

  .pagination li.active span {
    background-color: rgba(75, 232, 135, 0.9);
    color: #003300;
    cursor: default;
  }

  /* Texto do contador */
  .paginator p {
    margin-top: 12px;
    font-weight: 600;
    color: rgba(75, 232, 135, 0.8);
  }
</style>
