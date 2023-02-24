<?php
include_once('connection.php');
$conn = connect();
$id_login = 1;
$sql = 'SELECT `pending_task`.`task`,`pending_task`.`subject`,`pending_task`.`description`,`pending_task`.`priority` FROM `pending_task` INNER JOIN `login` ON `login`.`id_login` = :id AND `pending_task`.`id_login` = :id ORDER BY `pending_task`.`priority` DESC';
global $stmt;
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_login);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>
<div class="pendente-task task-div">
    <div class="drop-title" id="droptitle-1">
        <span class="title-section drop">Tarefas Pendentes: <i><?= count($result) ?></i> </span>
        <span id="dropimg-1" class="subtitle bold">Ver Tarefas <img id="rotateimg-1" src="src/Drop.svg" alt="Ver Tarefas"></span>
    </div>
    <div class="drop-task " id="droptask-1">
        <?php foreach ($result as $row):?>
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