<h1>Vincular Paciente à Consulta</h1>

<?= $this->Form->create($consulta) ?>
    <div>
        <?= $this->Form->control('paciente_id', [
            'label' => 'Paciente',
            'options' => $pacientes
        ]) ?>
    </div>
    <div class="button">
        <?= $this->Form->button('Salvar', ['class' => 'btn-salvar']) ?>
    </div>

    <style>
        .btn-salvar {
            background-color: #28a745; /* verde */
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-salvar:hover {
            background-color: #218838; /* verde mais escuro ao passar o mouse */
        }
    </style>
<?= $this->Form->end() ?>
