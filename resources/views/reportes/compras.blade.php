<x-app-layout>
    <script src="{{ asset('js/loadBefore.js') }}"></script>
    <div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center"  id="exportPdf">
                    <h1 class="font-bold">REPORTE COMPARATIVO ANUAL DE COMPRAS</h1>
                    <div class="text-left p-5 rounded-md shadow-sm" id="exportButton">
                        <button id="exportButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" onclick="generatePdf()">Exportar PDF</button>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <div id="container">
                                        <canvas id="canvas" width="500" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="/js/html2pdf.bundle.js" defer></script>
<script>
    const ctx = document.getElementById('canvas').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:{!! $graficoLabel !!} ,
            datasets: [{
                label: 'Valor Compras',
                data: {!! $graficoData !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //Export to Pdf
    function generatePdf(){
    document.getElementById("exportButton").style.display = 'none';

    const element = document.getElementById("exportPdf");

    var opt = {
        margin:0,
        filename:'Reporte Anual de Compras.pdf',
        image:{ type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 1 },
        jsPDF:{ unit: 'in', format: 'ledger', orientation: 'landscape' }
    };

    html2pdf()
    .set(opt)
    .from(element)
    .save();
}
</script>
