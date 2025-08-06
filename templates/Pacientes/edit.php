<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paciente $paciente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paciente->id],
                [
                    'confirm' => __('Are you sure you want to delete # {0}?', $paciente->id),
                    'class' => 'side-nav-item delete-link'
                ]
            ) ?>
            <?= $this->Html->link(__('List Pacientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pacientes form content">
            <?= $this->Form->create($paciente) ?>
            <fieldset>
                <legend><?= __('Edit Paciente') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('data_nascimento');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
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

  /* Botão delete vermelho (texto só) */
  .side-nav-item.delete-link {
    color: #ff4c4c;
  }

  .side-nav-item.delete-link:hover {
    color: #ff0000;
    text-decoration: underline;
  }

  /* Conteúdo principal (formulário) */
  .column-80 {
    flex: 4 1 600px;
  }

  /* Caixa azul claro ao redor do formulário */
  .pacientes.form.content {
    background-color: #e0f0ff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    color: black;
  }

  .pacientes.form fieldset {
    border: none;
    margin-bottom: 25px;
  }

  .pacientes.form legend {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #007bff;
  }

  /* Labels visíveis */
  .pacientes.form label {
    color: #007bff;
    font-weight: 600;
  }

  /* Inputs do formulário */
  .pacientes.form input[type="text"],
  .pacientes.form input[type="number"],
  .pacientes.form input[type="date"],
  .pacientes.form select,
  .pacientes.form textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
    box-sizing: border-box;
    outline: none;
    transition: box-shadow 0.3s ease;
  }

  .pacientes.form input[type="text"]:focus,
  .pacientes.form input[type="number"]:focus,
  .pacientes.form input[type="date"]:focus,
  .pacientes.form select:focus,
  .pacientes.form textarea:focus {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
  }

  /* Botão Submit */
  .pacientes.form button {
    background-color: rgba(75, 232, 135, 0.8);
    color: white;
    border: none;
    padding: 14px 0;
    font-size: 18px;
    font-weight: 700;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 5px 15px rgba(75, 232, 135, 0.6);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .pacientes.form button:hover,
  .pacientes.form button:focus {
    background-color: rgba(40, 150, 80, 0.9);
    box-shadow: 0 7px 20px rgba(40, 150, 80, 0.8);
    outline: none;
  }
</style>
