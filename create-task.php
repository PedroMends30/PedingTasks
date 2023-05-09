<?php
include('php/connection.php');

if () {

}else{

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie Atividade | Tarefas Pendentes IFPA</title>

    <link rel="stylesheet" href="style.css">
    <script scr="scripts.js"></script>
</head>

<body style="background-color: #F7F7F7; min-height: 100vh;display: flex;justify-content: center; margin-bottom: 50px;">
    <div class="body-style" style="width: 500px;">

        <div class="Login-header">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <div class="title-header">
                    <a href="dashboard.html" class="extrabold" style="margin-bottom: 6px;"><img src="src/Seta (sair).svg"> Criar Tarefa</a>
                </div>
            </div>

            <form action="create-task.php" method="post" autocomplete="on">
                <div class="login-div" style="margin-top: 40px;">
                    <span class="title-section">Título</span>
                    <input type="text" name="titulo" id="titulo" class="input-text no-icon" required placeholder="Digite o título da tarefa">
                </div>

                <div class="login-div">
                    <span class="title-section">Matéria</span>
                    <input type="text" name="materia" id="materia" class="input-text no-icon" required placeholder="Escolha a Matéria" list="listmat">
                </div>

                <div class="login-div">
                    <span class="title-section">Descrição</span>
                    <textarea class="input-text no-icon descripition" id="descricao" maxlength="700" overflow="auto" placeholder="Adicione uma descrição para a tarefa..." style="resize: none;"></textarea>
                    <div class="subtitle">Limite de Caracteres: 700</span>
                    </div>
                    <!--
                <div style="display: flex; flex-direction: row;">
                        
                    <div class="login-div" style="margin-right: 16px">
                        <span class="title-section">Entrega</span>
                        <input type="date" class= "input-data" required min="today" max="2023-12-31" placeholder="20/02/2023">
                    </div>

                    <div class="login-div" >
                        <span class="title-section">Horário</span>
                        <input type="time" name="materia" class= "input-text no-icon" required placeholder="Nivel de Prioridade" list="listprior">
                    </div>
                </div>
                -->
                    <div class="login-div">
                        <span class="title-section">Prioridade</span>
                        <select name="materia" class="input-text no-icon" required placeholder="Nivel de Prioridade" id="prioridade" list="listprior">
                            <datalist id="listprior">
                                <option selected id="list-1" value="Básico">Básico (Verde)</option>
                                <option id="list-2" value="Intermediário"> Intermediário (Amarelo)</option>
                                <option id="list-3" value="Urgente"> Urgente (Vermelho)</option>
                            </datalist></select>

                    </div>

                    <a href="dashboard.php" class="login-div" style="margin-top: 0px;">
                        <label for="input" class="label" style="top: 0px; left: auto; margin-left: 60%; box-sizing: border-box;"><img src="src/Seta (Entrar).svg" alt="Entrar Agora"></label>
                        <input type="submit" class="input-submit" value="Criar Tarefa">
                    </a>
            </form>
        </div>
    </div>


    </div>
    </div>
</body>

</html>