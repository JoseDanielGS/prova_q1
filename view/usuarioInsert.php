<html>
    <?php
        if(isset($_REQUEST['secesso']) && $_REQUEST['secesso'] == true)
            echo "Usuario inserido com sucesso";
    ?>
    <h1>Cadastrar Usuario</h1>
    <form action="../index.php?class=Usuarios&method=store" method="POST">
        Nome: <input name="nome"></input><br>
        Email: <input name="email"></input><br>
        Senha: <input name="senha"></input><br>
        <input type="submit"/>
    </form>

    <?php
        if(isset($_REQUEST['secessoAutenticacao']) && $_REQUEST['secessoAutenticacao'] == true)
            echo "Usuario existe no banco";
    ?>
    <h1>Verificar usuario</h1>
    <form action="../index.php?class=Usuarios&method=autenticar" method="POST">
        Email: <input name="email"></input><br>
        Senha: <input name="senha"></input><br>
        <input type="submit"/>
    </form>
</html>