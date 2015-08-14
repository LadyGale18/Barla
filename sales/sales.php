<?php include '../prices/Prices.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h2>Menú de Ventas </h2>
            <ul>
                <li><a href="Tonico.php">Tónico $<?php echo $_SESSION['Prices']['Tonico']; ?></a></li>
                <li><a href="Jabon.php">Jabón $<?php echo $_SESSION['Prices']['Aceite']; ?></a></li>
                <li><a href="Aceite.php">Aceite $<?php echo $_SESSION['Prices']['Jabon']; ?></a></li>
                <li><a href="Tratamiento.php">Tratamiento $<?php echo $_SESSION['Prices']['Tratamiento']; ?></a></li>
                <li><a href="Pack.php">Pack $<?php echo $_SESSION['Prices']['Pack']; ?></a></li>
                <li><a href="../main/MainMenu.php">Cancelar</a></li>
            </ul>
        </div>
    </body>
</html>
