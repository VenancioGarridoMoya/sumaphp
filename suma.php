<!DOCTYPE html>
<html lang="es-ES">
    <head>
	    <meta charset="UTF-8">
	    <title>Suma de 2 números en PHP</title>
    </head>
    <body>
        <h2>Suma de 2 números en PHP</h2>
        <form action="suma.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="numero1">Número 1:</label>
                        <input type="text" id="numero1" name="numero1" placeholder="Escribe un número">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="numero2">Número 2:</label>
                        <input type="text" id="numero2" name="numero2" placeholder="Escribe un número">
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" value=" Sumar "> </td>
                </tr>
            </table>
        </form>
        <?php
            if($_POST){	
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $suma = $numero1 + $numero2;
                echo "La suma de ".$numero1." y ".$numero2." es ".$suma; 
            }
        ?>
    </body>
</html>
