<?php
include_once('connection.php');
$conn = connect();
$id_login = 1;
$sql = 'SELECT `login`.`id_login`, `pending_task`.`id_login` FROM `login`, `pending_task` WHERE `login`.`id_login` = :id AND `pending_task`.`id_login` = :id AND `pending_task`.`priority` = "vermelho";';
global $stmt;
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id_login);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

<div class="urgente-task task-div">
    <span class="title-section">Urgente: <?=count($result)?></span>
    <?php foreach($result as $row):?>
    <div class="task" id="task-id">
        
        <div class="task-name">
            <span class="task-title"><?= $row['task']?></span>
            <span class="subtitle task-materia"><?= $row['subject'] ?></span>
        </div>

        <div style="display: flex; align-items: center;">
            <span class="subtitle task-date">AMANHÃ <span class="bold" style="margin-left: 3px;">08:40</span></span>
            <span class="priority urgente"></span>

        </div>
        
    </div>
    <?php endforeach; ?>
</div>