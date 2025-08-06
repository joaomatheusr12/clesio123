<h1>Lista de Consultas</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Médico</th>
            <th>Paciente</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consultas as $consulta): ?>
            <tr>
                <td><?= $consulta->id ?></td>
                <td><?= h($consulta->medico_id) ?></td>
                <td><?= h($consulta->paciente_id) ?></td>
                <td><?= h($consulta->data) ?></td>
                <td><?= h($consulta->hora) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
