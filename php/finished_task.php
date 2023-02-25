<?php
include_once('connection.php');
$conn = connect();
$id_login = 1;
$sql = 'SELECT `login`.`id_login`, `pending_task`.`id_login`, `pending_task`.`task`,`pending_task`.`subject` FROM `login`, `pending_task` WHERE `login`.`id_login` = :id AND `pending_task`.`id_login` = :id AND `pending_task`.`priority` = "azul";';
global $stmt;
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_login);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
<div class="concluded-task task-div">
    <div class="drop-title" id="droptitle-2">
        <span class="title-section drop">Tarefas Concluídas:
            <?= count($result) ?>
        </span>
        <span id="dropimg-2" class="subtitle bold">Ver Tarefas <img id="rotateimg-2" src="src/Drop.svg"
                alt="Ver Tarefas" class="rotate"></span>
    </div>

    <?php foreach ($result as $row): ?>
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
                    <span class="subtitle task-date disable">FEV 19 <span class="bold disable"
                            style="margin-left: 3px;">08:40</span></span>
                    <img class="priority azul" src="src/Check.svg">

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</div>