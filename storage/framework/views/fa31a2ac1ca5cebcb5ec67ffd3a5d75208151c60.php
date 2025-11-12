

<?php $__env->startSection('title', 'Vets | Anti-Tick Vaccine | NARO Infohub'); ?>

<?php $__env->startPush('styles'); ?>
<style>
.infohub-tabs button {
    background:transparent;
    border:none;
    font-size:0.95rem;
    font-weight:700;
    color:#0E5DAA;
    padding:0.35rem 0;
    margin-left:1.5rem;
    border-bottom:3px solid transparent;
    transition:color 0.2s ease,border-color 0.2s ease;
}
.infohub-tabs button:first-child {
    margin-left:0;
}
.infohub-tabs button.active {
    color:#0B497E;
    border-color:#0B497E;
}
.infohub-quick-link {
    display:block;
    width:100%;
    padding:0.85rem 1rem;
    margin:0 0.5rem;
    background:#0E5DAA;
    border-bottom:4px solid #0B497E;
    color:#fff;
    font-weight:600;
    text-align:left;
    text-decoration:none;
    transition:background 0.2s ease;
}
.infohub-quick-link:hover {
    background:#0B497E;
    color:#fff;
    text-decoration:none;
}
.infohub-table thead th {
    background:#0E5DAA;
    color:#fff;
    font-weight:600;
}
.infohub-table tbody tr:nth-child(even){
    background:#f8fafc;
}
.infohub-table tbody tr:nth-child(odd){
    background:#f1f5f9;
}
.infohub-table tbody tr:hover {
    background:#e2e8f0;
}
.chart-container {
    display:none;
    height:420px;
}
.chart-container.active {
    display:block;
}
.infohub-layout {
    display:flex;
    flex-direction:column;
    gap:2rem;
}
.infohub-visual {
    display:flex;
    flex-direction:column;
    gap:1.5rem;
}
@media (min-width:768px){
    .infohub-layout {
        flex-direction:row;
        align-items:stretch;
    }
    .infohub-links {
        flex:0 0 30%;
        max-width:30%;
    }
    .infohub-visual {
        flex:0 0 70%;
        max-width:70%;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="max-w-6xl mx-auto px-16 py-22 space-y-8">
    <div class="flex items-center text-sm text-[#0E5DAA]">
        <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="flex items-center font-semibold hover:text-[#0B497E]">
            <span class="mr-2 text-lg">←</span>
            Back to Anti-Tick Vaccine
        </a>
    </div>

    <div class="bg-white border border-gray-200 shadow-sm rounded-xl p-18 space-y-6">
        <div class="flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-semibold text-[#0B497E]">Vets and animal health workers portal</h1>
                <p class="text-gray-600">Tools, protocols, and data visualisations supporting professional deployment of the NARO anti-tick vaccine.</p>
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:gap-6">
                <div class="infohub-tabs flex items-center">
                    <button id="chartTab" class="active" type="button" onclick="switchView('chart')">Data visualisation</button>
                    <button id="tableTab" type="button" onclick="switchView('table')">Table view</button>
                </div>
                <button type="button" class="inline-flex items-center justify-center px-5 py-2 font-semibold text-white bg-[#19b34a] hover:bg-[#158c3a] transition" onclick="exportData()">Export CSV</button>
            </div>
        </div>

        <div class="infohub-layout">
            <div class="infohub-links bg-[#f3f7ff] border border-[#c6d7f5] rounded-lg p-4 flex flex-col gap-4 shadow-sm h-full">
                <a href="#" class="infohub-quick-link">Step-by-step</a>
                <a href="#" class="infohub-quick-link">Vaccine use and handling</a>
                <a href="#" class="infohub-quick-link">Vaccine user manual</a>
                <a href="#" class="infohub-quick-link">Fact sheet</a>
            </div>

            <div class="infohub-visual bg-[#eff6ff] border border-[#0E5DAA]/20 rounded-xl p-6 h-full flex flex-col">
                <div id="chartView" class="chart-container active bg-white border border-gray-200 rounded-lg shadow-sm p-6 w-full">
                    <canvas id="vaccinationChart"></canvas>
                </div>
                <div id="tableView" class="hidden bg-white border border-gray-200 rounded-lg shadow-sm p-4 overflow-x-auto w-full">
                    <table class="infohub-table min-w-full text-left" id="vaccinationTable">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Date</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Vet Name</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">District</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Animals Vaccinated</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Cattle</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Goats</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Sheep</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Efficacy Rate (%)</th>
                                <th class="px-4 py-3 text-sm uppercase tracking-wide">Adverse Reactions</th>
                            </tr>
                        </thead>
                        <tbody id="dataTableBody" class="divide-y divide-gray-200 text-gray-700">
                            <!-- Populated dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const chartScriptReady = () => typeof Chart !== 'undefined';

    const init = () => {
        if (!chartScriptReady()) {
            setTimeout(init, 100);
            return;
        }
        fetchVaccinationData();
    };

    init();
});

let vaccinationData = [];
let vaccinationChart = null;

async function fetchVaccinationData() {
    try {
        const response = await fetch('/api/vet-vaccinations');
        if (!response.ok) {
            throw new Error('Failed to fetch data');
        }
        vaccinationData = await response.json();
        populateTable();
        initChart();
    } catch (error) {
        console.error('Error fetching vaccination data:', error);
        alert('Failed to load vaccination data. Please try again later.');
    }
}

function populateTable() {
    const tbody = document.getElementById('dataTableBody');
    tbody.innerHTML = '';

    vaccinationData.forEach(row => {
        const tr = document.createElement('tr');
        tr.className = 'hover:bg-gray-100';
        tr.innerHTML = `
            <td class="px-4 py-3">${row.date}</td>
            <td class="px-4 py-3">${row.vet}</td>
            <td class="px-4 py-3">${row.district}</td>
            <td class="px-4 py-3">${row.total}</td>
            <td class="px-4 py-3">${row.cattle}</td>
            <td class="px-4 py-3">${row.goats}</td>
            <td class="px-4 py-3">${row.sheep}</td>
            <td class="px-4 py-3">${row.efficacy}%</td>
            <td class="px-4 py-3">${row.reactions}</td>
        `;
        tbody.appendChild(tr);
    });
}

function initChart() {
    const ctx = document.getElementById('vaccinationChart');
    if (!ctx) {
        return;
    }

    if (vaccinationChart) {
        vaccinationChart.destroy();
    }

    vaccinationChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: vaccinationData.map(d => d.district),
            datasets: [
                {
                    label: 'Cattle',
                    data: vaccinationData.map(d => d.cattle),
                    backgroundColor: 'rgba(14, 93, 170, 0.75)',
                    borderRadius: 6
                },
                {
                    label: 'Goats',
                    data: vaccinationData.map(d => d.goats),
                    backgroundColor: 'rgba(25, 179, 74, 0.75)',
                    borderRadius: 6
                },
                {
                    label: 'Sheep',
                    data: vaccinationData.map(d => d.sheep),
                    backgroundColor: 'rgba(251, 191, 36, 0.75)',
                    borderRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Animals'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'District'
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Vaccinations by District and Animal Type'
                }
            }
        }
    });
}

function switchView(view) {
    const tableView = document.getElementById('tableView');
    const chartView = document.getElementById('chartView');
    const tableTab = document.getElementById('tableTab');
    const chartTab = document.getElementById('chartTab');

    if (view === 'table') {
        tableView.classList.remove('hidden');
        chartView.classList.remove('active');
        tableTab.classList.add('active');
        chartTab.classList.remove('active');
    } else {
        tableView.classList.add('hidden');
        chartView.classList.add('active');
        tableTab.classList.remove('active');
        chartTab.classList.add('active');
    }
}

function exportData() {
    let csv = 'Date,Vet Name,District,Total Animals,Cattle,Goats,Sheep,Efficacy Rate (%),Adverse Reactions\n';

    vaccinationData.forEach(row => {
        csv += `${row.date},${row.vet},${row.district},${row.total},${row.cattle},${row.goats},${row.sheep},${row.efficacy},${row.reactions}\n`;
    });

    const blob = new Blob([csv], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const anchor = document.createElement('a');
    anchor.href = url;
    anchor.download = `vaccination_data_${new Date().toISOString().split('T')[0]}.csv`;
    document.body.appendChild(anchor);
    anchor.click();
    document.body.removeChild(anchor);
    window.URL.revokeObjectURL(url);
}
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.infohub', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Praise Web Solutions\NAROinfoHub\resources\views/sections/facilities/anti_tick_vaccine/vets.blade.php ENDPATH**/ ?>