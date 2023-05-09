<?php
include_once('php/connection.php');
$conn = connect();
$id_login = 1;
$sql_tasks = 'SELECT `pending_task`.`task`,`pending_task`.`subject`,`pending_task`.`description`,`pending_task`.`priority` FROM `pending_task` INNER JOIN `login` ON `login`.`id_login` = :id AND `pending_task`.`id_login` = :id AND `pending_task`.`priority` != "azul" ORDER BY `pending_task`.`priority` DESC;';
$sql_finished_tasks = 'SELECT `login`.`id_login`, `pending_task`.`id_login`, `pending_task`.`task`,`pending_task`.`subject` FROM `login`, `pending_task` WHERE `login`.`id_login` = :id AND `pending_task`.`id_login` = :id AND `pending_task`.`priority` = "azul";';
$sql_urgent_tasks = 'SELECT `login`.`id_login`, `pending_task`.`id_login`, `pending_task`.`task`,`pending_task`.`subject` FROM `login`, `pending_task` WHERE `login`.`id_login` = :id AND `pending_task`.`id_login` = :id AND `pending_task`.`priority` = "vermelho";';

/* Preparando a Query da Tarefas Gerais */
$stmt_tasks = $conn->prepare($sql_tasks);
$stmt_tasks->bindParam(':id', $id_login);
$stmt_tasks->execute();
$result_tasks = $stmt_tasks->fetchAll(PDO::FETCH_ASSOC);

/* Preparando a Query da Tarefas Finalizadas */
$stmt_finished_tasks = $conn->prepare($sql_finished_tasks);
$stmt_finished_tasks->bindParam(':id', $id_login);
$stmt_finished_tasks->execute();
$result_finished_tasks = $stmt_finished_tasks->fetchAll(PDO::FETCH_ASSOC);

/* Preparando a Query da Tarefas Urgentes */
$stmt_urgent_tasks = $conn->prepare($sql_urgent_tasks);
$stmt_urgent_tasks->bindParam(':id', $id_login);
$stmt_urgent_tasks->execute();
$result_urgent_tasks = $stmt_urgent_tasks->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas Pendentes IFPA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #F7F7F7;">
    <div class="body-style">

        <div class="dashboard-header">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <img class="profile-photo" src="https://s2.glbimg.com/z4E7d9iXw5XeEzcIsSTw-lYiuDM=/0x0:3840x2560/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_63b422c2caee4269b8b34177e8876b93/internal_photos/bs/2023/O/7/7y8qEjTVOy9RJCjr11IQ/24daf6411fb6466eb810e45060c65eda-0-428a2069115f48a787ae9ae9cb26105a.jpg">

                <div class="title-header" style="margin-left: 8px;">
                    <span><span>Olá,</span><span class="extrabold"> Lulinha</span></span>
                    <span class="subtitle">Desenvolvimento de Sistemas III</span>
                </div>
            </div>

            <img class="search" src="src/Pesquisa.svg" style="margin-right: 3px;">
        </div>

        <div class="dashboard-body" style="display: flex; flex-direction: column;">

            <div class="bar">
                <span class="task-title">Você tem <?= count($result_tasks) ?> <?php echo count($result_tasks) != 1 ? "Tarefas Pendentes" : "Tarefa Pendente"; ?></span>

                <div>
                    <div class="progress-bar"></div>
                    <div class="progress-bar top-bar"></div>
                </div>

                <span class="subtitle" style="float: right;">72% azul</span>
            </div>
            <!-- include("php/urgent_tasks.php") -->
            <div class="urgente-task task-div">
                <span class="title-section">Urgente:
                    <i><?= count($result_urgent_tasks) ?></ i>
                </span>
                <?php foreach ($result_urgent_tasks as $row) : ?>
                    <div class="task" id="task-id">

                        <div class="task-name">
                            <span class="task-title">
                                <?= $row['task'] ?>
                            </span>
                            <span class="subtitle task-materia">
                                <?= $row['subject'] ?>
                            </span>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <span class="subtitle task-date">AMANHÃ <span class="bold" style="margin-left: 3px;">08:40</span></span>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <!-- include('php/task.php') ?> -->
            <div class="pendente-task task-div">
                <div class="drop-title" id="droptitle-1">
                    <span class="title-section drop">Tarefas Pendentes: <i><?= count($result_tasks) ?></i> </span>
                    <span id="dropimg-1" class="subtitle bold">Ver Tarefas <img id="rotateimg-1" src="src/Drop.svg" alt="Ver Tarefas"></span>
                </div>
                <div class="drop-task " id="droptask-1">
                    <?php foreach ($result_tasks as $row) : ?>
                        <div class="task" id="task-id">

                            <div class="task-name">
                                <span class="task-title"><?= $row['task'] ?></span>
                                <span class="subtitle task-materia"><?= $row['subject'] ?></span>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <span class="subtitle task-date">FEV 19 <span class="bold" style="margin-left: 3px;">08:40</span></span>
                                <?php echo '<span class="priority ' . $row['priority'] . '"></span>'; ?>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- include('php/finished_task.php') -->
            <div class="concluded-task task-div">
                <div class="drop-title" id="droptitle-2">
                    <span class="title-section drop">Tarefas Concluídas:
                        <?= count($result_finished_tasks) ?>
                    </span>
                    <span id="dropimg-2" class="subtitle bold">Ver Tarefas <img id="rotateimg-2" src="src/Drop.svg" alt="Ver Tarefas" class="rotate"></span>
                </div>

                <?php foreach ($result_finished_tasks as $row) : ?>
                    <div class="drop-task drop-task-visible" id="droptask-2">
                        <div class="task" id="task-id">

                            <div class="task-name">
                                <span class="task-title disable">
                                    <?= $row['task'] ?>
                                </span>
                                <span class="subtitle task-materia disable">
                                    <?= $row['subject'] ?>
                                </span>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <span class="subtitle task-date disable">FEV 19 <span class="bold disable" style="margin-left: 3px;">08:40</span></span>
                                <img class="priority azul" src="src/Check.svg">

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
    <!--Botão Fixo Criar Task-->
    <a href="create-task.php" class="create-task-button">
        <span class="button-text"> Criar Tarefa</span>
        <img class="create-svg" src="src/Lápis (Adicionar atividade).svg" style="margin-left: 8px;">
    </a>
    </div>

    <!--Scripts Drop Tasks-->
    <script>
        const droptitle1 = document.getElementById('droptitle-1');
        const dropTask1 = document.getElementById('droptask-1');
        const rotateimg1 = document.getElementById('rotateimg-1');

        droptitle1.addEventListener('click', () => {
            dropTask1.classList.toggle('drop-task-visible');
            rotateimg1.classList.toggle('rotate')
        });

        const droptitle2 = document.getElementById('droptitle-2');
        const dropTask2 = document.getElementById('droptask-2');
        const rotateimg2 = document.getElementById('rotateimg-2');


        droptitle2.addEventListener('click', () => {
            dropTask2.classList.toggle('drop-task-visible');
            rotateimg2.classList.toggle('rotate')
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>

</html>