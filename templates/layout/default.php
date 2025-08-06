<?php
$cakeDescription = ''; 
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css('cards') ?>
    <?= $this->Html->css('menu') ?>

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>  
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <style>
        body {
            margin: 0;
            padding-top: 60px; /* Espaço reservado para o menu fixo */
        }
        .fixed-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #cce4ff; /* Azul bem clarinho */
            padding: 10px 20px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu-links {
            display: flex;
            gap: 20px;
        }
        .menu-links a {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        .menu-links a:hover {
            text-decoration: underline;
        }
        .logout-link {
            color: red;
            font-weight: bold;
            text-decoration: none;
        }
        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title" style="display:none;">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
    </nav>

    <?php if ($this->getRequest()->getParam('controller') !== 'Login'): ?>
    <nav class="fixed-menu">
        <div class="menu-links">
            <a href="/inicio">Início</a>
            <a href="/consultas/add">Adicionar Consulta</a>
            <a href="/medicos/add">Adicionar Médico</a>
            <a href="/pacientes/add">Adicionar Paciente</a>
        </div>
        <div>
            <a href="/login" class="logout-link">Sair</a>
        </div>
    </nav>
    <?php endif; ?>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <footer>
    </footer>
</body>
</html>
