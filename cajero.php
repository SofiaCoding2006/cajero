<?php

$saldo=0;

echo "1. Agregar dinero";
echo "2. Consultar saldo";
echo "3. consignar dinero";
echo "4. Retirar dinero";
echo "5. Salir";


while(true){
    $opcion = (int)readline("selccione una opcion");

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
        echo "Tu dinero hasta el momento es: $saldo\n";
        break;
    
    case 4:
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
