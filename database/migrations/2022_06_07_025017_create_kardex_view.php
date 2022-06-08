<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW kardex_view
        AS
        SELECT
        'Ingreso' AS tipo,
        ingresos.fecha_ingreso AS fecha,
        proveedores.nombre,
        ingresos.ingreso_no AS transaccion,
        ingresos.factura,
        ingresos.id_producto AS id,
        productos.codigo,
        productos.nombre AS producto,
        ingresos.cantidad,
        ingresos.costo,
        ingresos.total
    FROM
        ingresos
        LEFT JOIN productos ON ingresos.id_producto = productos.id
        LEFT JOIN proveedores ON ingresos.id_proveedor = proveedores.id
    UNION
    SELECT
        'Egreso' AS tipo,
        egresos.fecha_egreso AS fecha,
        clientes.nombre,
        egresos.egreso_no AS transaccion,
        egresos.factura,
        egresos.id_producto AS id,
        productos.codigo,
        productos.nombre AS producto,
        egresos.cantidad * -1 AS cantidad,
        egresos.costo * -1 AS costo,
        egresos.total *-1 AS total
    FROM
        egresos
        LEFT JOIN productos ON egresos.id_producto = productos.id
        LEFT JOIN clientes ON egresos.id_cliente = clientes.id
    ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW kardex_view");
    }
};
