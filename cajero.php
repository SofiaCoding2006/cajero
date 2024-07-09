<?php

$saldo=0;

echo "1. Agregar dinero \n";
echo "2. Consultar saldo \n";
echo "3. Retirar dinero \n";
echo "4. Salir\n";


while(true){
    $opcion = (int)readline("Selccione una opcion");

switch($opcion){
    case 1:
        $Cantidad = (float)readline("¿Cuánto dinero desea agregar a su cuenta? ");
        if ($Cantidad > 0) {
            $saldo += $Cantidad;
            echo "Dinero agregado exitosamente: $Cantidad\n";
        } else {
            echo "Cantidad no válida. Ingrese un monto el cual pueda retirar.\n";
        }
        break;
    
    case 2:
        echo "Tu saldo hasta el momento es: $saldo\n";
        break;
    
    case 3:
        $RetirarCantidad = (float)readline("¿Cuánto dinero deseas retirar? ");
        if ($RetirarCantidad > 0 && $RetirarCantidad <= $saldo) {
            $saldo -= $RetirarCantidad;
            echo "Retiro de $RetirarCantidad exitoso\n";
        } elseif ($RetirarCantidad > $saldo) {
            echo "No tienes suficiente saldo para realizar el retiro.\n";
        } else {
            echo "Cantidad no válida. Ingrese un monto positivo.\n";
        }
        break;
    
    case 0:
        echo "Gracias por utilizar nuestro cajero.\n";
        exit;
    
    default:
        echo "Opción no válida.\n";
        break;
    }
}
