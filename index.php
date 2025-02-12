<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tarefas Pendentes IFPA</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/3/3d/Instituto_Federal_do_Par%C3%A1_-_Marca_Vertical_2015.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #F7F7F7; min-height: 100vh;display: flex;justify-content: center; margin-bottom: 50px;">
    <div class="body-style" style="width: 500px;">

            <div class="logo-text" style="display: flex; flex-direction: column; align-items: center; margin-top: 40px; margin-bottom: 40px;"> 
                <div class="logo-bold" style="font-size: 16px; font-weight: 800;"> &lt <span class="logo-text" style="color:#2BB673;">Tarefas </span>Pendentes &gt</div>
                <div class="logo-slim" style="font-size: 10px; font-weight: 500; color: #8d8d8d;">IFPA 2023</div>
            </div>

            <div class="Login-header">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <div class="title-header">
                        <span class="extrabold" style="margin-bottom: 6px;"> Bem-vindo de Volta!</span></span>
                        <span class="subtitle">Entre com seu <span class="subtitle-bold"> email </span> e <span class="subtitle-bold">senha</span> cadastrados para acessar suas Tarefas</span>
                    </div>
                </div>
            
            <form action="#" method="post" autocomplete="on">

                <div class="login-div" id="iemail" style="margin-top: 40px;">
                    <span class="title-section">Email</span>

                    <label for="input" class="label"><img src="src/Email.svg" alt="Email"></label>                    
                    <input type="email" name="email" class= "input-text" required placeholder="Digite seu email">
                    
                    <span class="input-error" style="display: flex;"> <img src="src/Error.svg" style="margin-right: 3px;"> Este email não está Cadastrado! <a class="input-error-link" href="create-profile.html" alt="Criar uma Conta" style="margin-left: 3px ;"> Crie uma Conta</a></div></span>
                

                    <div class="login-div" id="isenha">
                        <span class="title-section">Senha</span>

                        <label for="input" class="label" style="top: 42px;"><img src="src/Chave.svg" alt="Senha"></label>

                        <label for="input" class="label" style="left: auto; top: 44px; right: 10px; padding: 0px 6px ;"><img id="ver" src="src/Olho  ( Desabilitado).svg" alt="Ver Senha"></label>

                        <label for="input" class="label" style="left: auto; top: 44px; right: 10px; padding: 0px 6px ;"><img id="esc" src="src/Olho (habilitado).svg" style="display: none;" alt="Ver Senha"></label>

                        <input type="password" name="senha" class="senha input-text" minlength="6" maxlength="14" required placeholder="Digite sua senha">
                                                
                        <span class="input-error" style="display: flex;"> <img src="src/Error.svg" style="margin-right: 3px;"> Ops! Sua senha está incorreta</span>

                </div>
                
                <div class="login-div" id="isub" style="margin-top: 0px;">

                    <label for="input" class="label" style="top: 36px; left: auto;  margin-left: 63%; box-sizing: border-box;"><img src="src/Seta (Entrar).svg" alt="Entrar Agora"></label>

                    <input type="submit" class="input-submit" value="Entrar Agora"> 
                </div>
            </form>

            <div class="paragrapher" style="margin-top: 16px; display: flex;
            justify-content: center;">Novo por aqui? <a class="paragrapher link"href="create-profile.html" alt="Criar uma Conta" style="margin-left: 3px ;"> Crie uma Conta</a></div>

            <a class="paragrapher link" href="dashboard.php" alt="Criar uma Conta" style="margin-left: 3px ;"> Ver Dashboard</a>
        </div>
        </div>
             
    <script src="scripts.js"></script>   
</body>
</html>
