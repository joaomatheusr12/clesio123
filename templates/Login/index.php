<style>
  body, html {
    height: 100%;
    margin: 0;
    background-color: #001a4d;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 20px;
  }

  h1.title {
    margin-top: 40px;
    margin-bottom: 30px;
    font-weight: 800;
    font-size: 2.5rem;
    color: #4ce887;
    text-shadow: 0 0 5px rgba(76, 232, 135, 0.7);
  }

  .login-container {
    max-width: 400px;
    width: 100%;
    padding: 30px 35px;
    background-color: #99c2ff;
    box-shadow: 0 4px 15px rgba(0, 90, 180, 0.3);
    color: black;
    border: 3px solid #007bff;
    border-radius: 15px; /* Arredondado */
    box-sizing: border-box;
  }

  .login-container input {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 2px solid #ccc;
    font-size: 16px;
    box-sizing: border-box;
    outline: none;
    transition: box-shadow 0.3s ease, border-color 0.3s ease;
    color: black;
    background-color: #fff;
  }

  .login-container input:focus {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    border-color: #007bff;
    border-radius: 10px; /* Arredondado */
    background-color: #fff;
  }

  .loginbutton {
    text-align: center;
  }

  .loginbutton button {
    background-color: rgba(75, 232, 135, 0.8);
    border: none;
    padding: 14px 0;
    border-radius: 10px;
    color: white;
    font-weight: 700;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    box-shadow: 0 5px 15px rgba(75, 232, 135, 0.6);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .loginbutton button:hover,
  .loginbutton button:focus {
    background-color: rgba(40, 150, 80, 0.9);
    box-shadow: 0 7px 20px rgba(40, 150, 80, 0.8);
    outline: none;
  }

  /* Para qualquer elemento com borda azul, garantir bordas arredondadas */
  * {
    border-radius: 0; /* zera tudo */
  }

  *[style*="#007bff"],
  *[style*="border-color: #007bff"],
  .border-azul {
    border-radius: 10px !important;
  }

</style>

<h1 class="title">Agendamento Médico</h1>

<?= $this->Flash->render() ?>

<div class="login-container">
  <?= $this->Form->create() ?>
    <div style="margin-bottom: 15px;">
        <?= $this->Form->control('username', ['label' => 'Usuário', 'required' => true]) ?>
    </div>
    <div style="margin-bottom: 15px;">
        <?= $this->Form->control('password', ['label' => 'Senha', 'required' => true]) ?>
    </div>
    <div class="loginbutton">
        <?= $this->Form->button('Entrar') ?>
    </div>
  <?= $this->Form->end() ?>
</div>
