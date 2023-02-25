<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas Pendentes IFPA</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #F7F7F7;">
    <div class="body-style" >
                
        <div class="dashboard-header">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <img class="profile-photo" src="https://s2.glbimg.com/z4E7d9iXw5XeEzcIsSTw-lYiuDM=/0x0:3840x2560/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_63b422c2caee4269b8b34177e8876b93/internal_photos/bs/2023/O/7/7y8qEjTVOy9RJCjr11IQ/24daf6411fb6466eb810e45060c65eda-0-428a2069115f48a787ae9ae9cb26105a.jpg" >

                <div class="title-header" style= "margin-left: 8px;">
                <span><span>Olá,</span><span class="extrabold"> Lulinha</span></span>
                <span class="subtitle">Desenvolvimento de Sistemas III</span></div>
            </div>

            <img class="search" src="src/Pesquisa.svg" style="margin-right: 3px;">
        </div>

        <div class="dashboard-body" style="display: flex; flex-direction: column;">

            <div class="bar">
                <span class="task-title">Você tem ## Tarefas Pendentes </span>

                <div> 
                    <div class="progress-bar"></div>
                    <div class="progress-bar top-bar"></div>
                </div>

                <span class="subtitle" style="float: right;">72% azul</span>
            </div>
            <?php include("php/urgent_tasks.php")?>
            <?php include('php/task.php')?>
            <?php include('php/finished_task.php')?>
            
        </div>
        <!--Botão Fixo Criar Task-->    
        <a href="create-task.html" class="create-task-button">
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
