<h1>Consultas Agendadas</h1>

<style>
    body {
    margin: 0;
    background-color: #004aad; /* Azul escuro */
    font-family: Arial, sans-serif;
    color: white; /* Texto branco para contraste */
    min-height: 100vh;
    padding: 20px;
    box-sizing: border-box;
    }

    /* Título principal */
    h1 {
    text-align: center;
    margin-bottom: 30px;
    font-weight: 700;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
    }

    /* Container flexível para os cards */
    .cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    }

    /* Estilo dos cards */
    .card {
    background-color: #0058d9; /* Azul mais claro que o fundo */
    width: 260px;
    border-radius: 12px;
    padding: 15px 20px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
    }

    /* Efeito hover nos cards */
    .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.45);
    }

    /* Imagem do card */
    .card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

    /* Título dentro do card */
    .card h3 {
    margin: 10px 0 12px;
    font-weight: 700;
    font-size: 20px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
    }

    /* Parágrafos do card */
    .card p {
    margin: 6px 0;
    font-size: 15px;
    font-weight: 500;
    color: #e0e7ff;
    }

    /* Botão estilizado */
    .card button {
    margin-top: 15px;
    background-color: rgba(75, 232, 135, 0.8) /* Laranja vibrante para contraste */
    border: none;
    color: white;
    padding: 10px 22px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 10px rgba(75, 232, 135, 0.8);
    }

    /* Hover no botão */
    .card button:hover,
    .card button:focus {
    background-color: rgba(75, 232, 135, 0.8);
    outline: none;
    box-shadow: 0 6px 14px rgba(75, 232, 135, 0.8);
    }

    /* Responsividade para telas menores */
    @media (max-width: 600px) {
    .cards-container {
        flex-direction: column;
        align-items: center;
    }
    }
</style>

<div class="cards-container">
    <?php foreach ($consultas as $consulta): ?>
        <div class="card">
            <!-- Imagem base64 que você enviou -->
            <img src="data:image/jpeg;base64,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" alt="Imagem agendar" />

            <h3>Consulta ID: <?= $consulta->id ?></h3>
            <p><strong>Médico ID:</strong> <?= $consulta->medico_id ?></p>
            <p><strong>Data:</strong> <?= h($consulta->data ? $consulta->data->format('d/m/Y') : '---') ?></p>
            <p><strong>Hora:</strong> <?= h($consulta->hora ? $consulta->hora->format('H:i') : '---') ?></p>
            <p><strong>Paciente:</strong> <?= $consulta->paciente_id ?? 'Não atribuído' ?></p>

            <button onclick="location.href='<?= $this->Url->build(['controller' => 'Consultas', 'action' => 'edit', $consulta->id]) ?>'">Agendar</button>
        </div>
    <?php endforeach; ?>
</div>
