<?php

$saldo=0;

function mostrarMenu(){
echo "1. Agregar dinero \n";
echo "2. Consultar saldo \n";
echo "3. Retirar dinero \n";
echo "4. Salir\n";
}

function agregarDinero($saldo){
    $Cantidad = (int)readline("¿Cuánto dinero deseas ingresar a tu cuenta? ");
    if ($Cantidad > 0) {
            $saldo += $Cantidad;
            echo "El dinero fue agregado exitosamente: $Cantidad\n";
        } else {
            echo "Cantidad no válida. Ingrese un monto el cual pueda retirar.\n";
        }
function consultarSaldo($saldo){
    echo "Tu saldo en este momento es: $saldo\n";
    
function retirarDinero($saldo){
    echo "¿Cuánto dinero deseas retirar?";
    $cantidad;
    if ($RetirarCantidad > 0 && $RetirarCantidad <= $saldo) {
            $saldo -= $RetirarCantidad;
            echo "Retiro de $RetirarCantidad exitoso\n";
        } elseif ($RetirarCantidad > $saldo) {
            echo "No tienes suficiente saldo para realizar el retiro.\n";
        } else {
            echo "Cantidad no válida. Ingrese un monto que sea valido.\n";
        }

    
while(true){
    $opcion = (int)readline("Selccione una opcion");

switch($opcion){
    case 1:
        agregarDinero ($saldo)
        break;
    
    case 2:
        consultarDinero ($saldo)
        break;
    
    case 3:
       retirarDinero ($saldo)
        break;
        
    case 0:
        echo "Gracias por utilizar este cajero.\n";
        exit;
    
    default:
        echo "Opción no válida.\n";
        break;
    }
}
