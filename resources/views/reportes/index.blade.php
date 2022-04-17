<x-app-layout>
    <div class="container text-center pt-5">
        <button onclick="window.location='{{ url('reportes/kardex') }}'" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-5 px-4 p-5 rounded">Movimientos de Inventario</button>
        <button onclick="window.location='{{ url('reportes/compras') }}'" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-5 px-4 p-5 rounded">Reporte de Compras</button>
        <button onclick="window.location='{{ url('reportes/ventas') }}'" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-5 px-4 p-5 rounded">Reporte de Ventas</button>
    </div>
</x-app-layout>
