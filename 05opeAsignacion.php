<?php
    $saldoCuentaBancariaDolares = 10000;
    $saldoActual = $saldoCuentaBancariaDolares;

    // Modifique y muestre el saldo actual si hay una Transferencia por pago de quincena 600 $
    // Forma 1
        // $saldoActual = $saldoActual+600;
    // Forma 2
        $saldoActual+=600;
    echo "El saldo actual de su cuenta es: $saldoActual <br>";
    
    // Modifique y muestre el saldo actual si hay una deducción de dinero por compra de mercado semanal por 100 $ a que el Chino.
    $saldoActual-=100;
    echo "El saldo actual de su cuenta es: $saldoActual ";


?>