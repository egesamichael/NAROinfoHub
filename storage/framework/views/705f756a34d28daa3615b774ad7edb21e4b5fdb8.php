<?php $__env->startSection('content'); ?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .page-breadcrumb {
        padding: 1rem 0;
        background-color: #f8f9fa;
    }
    .page-title-section {
        padding: 2rem 0;
        border-bottom: 3px solid #0d6efd;
        margin-bottom: 2rem;
    }
    .content-section {
        background: #ffffff;
        border-radius: 8px;
        padding: 2rem;
        margin-bottom: 2rem;
        border: 1px solid #e0e0e0;
    }
    .section-heading {
        font-size: 1.5rem;
        font-weight: 600;
        color: #212529;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #0d6efd;
    }
    .info-list {
        list-style: none;
        padding-left: 0;
    }
    .info-list li {
        padding: 0.5rem 0;
        padding-left: 1.8rem;
        position: relative;
        line-height: 1.6;
    }
    .info-list li:before {
        content: "•";
        position: absolute;
        left: 0.5rem;
        color: #0d6efd;
        font-size: 1.5rem;
        line-height: 1.6;
    }
    .view-toggle {
        display: inline-flex;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        overflow: hidden;
    }
    .view-toggle button {
        padding: 0.5rem 1.25rem;
        border: none;
        background-color: white;
        color: #495057;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 0.9rem;
    }
    .view-toggle button.active {
        background-color: #0d6efd;
        color: white;
    }
    .view-toggle button:hover:not(.active) {
        background-color: #f8f9fa;
    }
    .export-btn {
        padding: 0.5rem 1.25rem;
        background-color: #198754;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s;
        font-size: 0.9rem;
    }
    .export-btn:hover {
        background-color: #157347;
    }
    .table-container {
        overflow-x: auto;
    }
    .chart-container {
        display: none;
        max-width: 100%;
        height: 400px;
    }
    .chart-container.active {
        display: block;
    }
    .chart-type-selector {
        margin-bottom: 15px;
    }
    .chart-type-selector button {
        margin-right: 10px;
        padding: 0.4rem 1rem;
        border: 1px solid #dee2e6;
        background-color: white;
        color: #495057;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 0.85rem;
    }
    .chart-type-selector button.active {
        background-color: #0d6efd;
        color: white;
        border-color: #0d6efd;
    }
    .chart-type-selector button:hover:not(.active) {
        background-color: #f8f9fa;
    }
</style>

<div class="page-breadcrumb">
    <div class="container">
        <a href="<?php echo e(route('facilities.anti_tick_vaccine')); ?>" class="text-decoration-none text-primary">
            <i class="bi bi-arrow-left"></i> Back to Anti-Tick Vaccine
        </a>
    </div>
</div>

<div class="container">
    <div class="page-title-section">
        <h1 class="display-5 mb-2">Farmers - Anti-Tick Vaccine</h1>
        <p class="text-muted mb-0">Resources for Farmers</p>
    </div>

    <!-- Information Section -->
    <div class="content-section">
        <h2 class="section-heading">Resources for Farmers</h2>
        <p class="mb-4">
            This section provides essential guidance for farmers on using the anti-tick vaccine to protect their livestock.
        </p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="h5 fw-bold mb-3">Benefits:</h3>
                <ul class="info-list">
                    <li>Reduced tick infestations</li>
                    <li>Lower livestock mortality rates</li>
                    <li>Decreased acaricide usage</li>
                    <li>Improved animal health and productivity</li>
                    <li>Cost-effective tick control solution</li>
                </ul>
            </div>
            
            <div class="col-md-6 mb-4">
                <h3 class="h5 fw-bold mb-3">How to Get Started:</h3>
                <p>
                    Contact your local veterinary office or NARO representative to learn more about accessing the anti-tick vaccine for your herd.
                </p>
            </div>
        </div>
    </div>

    <!-- Farmer Adoption Data Section -->
    <div class="content-section">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h2 class="section-heading mb-0">Farmer Adoption & Impact Data</h2>
            <div class="d-flex gap-2 flex-wrap">
                <div class="view-toggle">
                    <button id="tableViewBtn" class="active" onclick="switchView('table')">
                        <i class="bi bi-table"></i> Table
                    </button>
                    <button id="chartViewBtn" onclick="switchView('chart')">
                        <i class="bi bi-bar-chart"></i> Graph
                    </button>
                </div>
                <button class="export-btn" onclick="exportData()">
                    <i class="bi bi-download"></i> Export CSV
                </button>
            </div>
        </div>

        <!-- Chart Type Selector (only visible in chart view) -->
        <div id="chartTypeSelector" class="chart-type-selector" style="display: none;">
            <button id="lineChartBtn" class="active" onclick="changeChartType('line')">Line Chart</button>
            <button id="pieChartBtn" onclick="changeChartType('pie')">Pie Chart</button>
            <button id="doughnutChartBtn" onclick="changeChartType('doughnut')">Doughnut Chart</button>
            <button id="radarChartBtn" onclick="changeChartType('radar')">Radar Chart</button>
        </div>

        <!-- Table View -->
        <div id="tableView" class="table-container">
            <table class="table table-striped table-hover" id="farmerTable">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Farmer Name</th>
                        <th>District</th>
                        <th>Herd Size</th>
                        <th>Vaccinated</th>
                        <th>Cost (UGX)</th>
                        <th>Tick Reduction (%)</th>
                        <th>Productivity Increase (%)</th>
                        <th>Satisfaction</th>
                    </tr>
                </thead>
                <tbody id="dataTableBody">
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Chart View -->
        <div id="chartView" class="chart-container">
            <canvas id="farmerChart"></canvas>
        </div>
    </div>
</div>

<div class="mb-5"></div>

<script>
    // Data will be fetched from MySQL via API
    let farmerData = [];

    // Fetch data from API
    async function fetchFarmerData() {
        try {
            const response = await fetch('/api/farmer-adoptions');
            if (!response.ok) {
                throw new Error('Failed to fetch data');
            }
            farmerData = await response.json();
            populateTable();
            createChart('line');
        } catch (error) {
            console.error('Error fetching farmer data:', error);
            alert('Failed to load farmer data. Please try again later.');
        }
    }

    // Populate table
    function populateTable() {
        const tbody = document.getElementById('dataTableBody');
        tbody.innerHTML = '';
        
        farmerData.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.date}</td>
                <td>${row.farmer}</td>
                <td>${row.district}</td>
                <td>${row.herdSize}</td>
                <td>${row.vaccinated}</td>
                <td>${row.cost.toLocaleString()}</td>
                <td>${row.tickReduction}%</td>
                <td>${row.productivity}%</td>
                <td><span class="badge bg-${row.satisfaction === 'Excellent' ? 'success' : 'info'}">${row.satisfaction}</span></td>
            `;
            tbody.appendChild(tr);
        });
    }

    // Initialize chart
    let farmerChart = null;
    let currentChartType = 'line';

    function createChart(type) {
        const ctx = document.getElementById('farmerChart').getContext('2d');
        
        // Destroy existing chart if it exists
        if (farmerChart) {
            farmerChart.destroy();
        }

        let chartConfig = {};

        if (type === 'line') {
            chartConfig = {
                type: 'line',
                data: {
                    labels: farmerData.map(d => d.district),
                    datasets: [
                        {
                            label: 'Tick Reduction (%)',
                            data: farmerData.map(d => d.tickReduction),
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            tension: 0.4,
                            fill: true
                        },
                        {
                            label: 'Productivity Increase (%)',
                            data: farmerData.map(d => d.productivity),
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            tension: 0.4,
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Tick Reduction vs Productivity Increase by District'
                        },
                        legend: {
                            position: 'top'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Percentage (%)'
                            }
                        }
                    }
                }
            };
        } else if (type === 'pie' || type === 'doughnut') {
            const districtTotals = {};
            farmerData.forEach(d => {
                districtTotals[d.district] = (districtTotals[d.district] || 0) + d.vaccinated;
            });

            chartConfig = {
                type: type,
                data: {
                    labels: Object.keys(districtTotals),
                    datasets: [{
                        label: 'Animals Vaccinated',
                        data: Object.values(districtTotals),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(255, 159, 64, 0.7)',
                            'rgba(199, 199, 199, 0.7)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(199, 199, 199, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Total Animals Vaccinated by District'
                        },
                        legend: {
                            position: 'right'
                        }
                    }
                }
            };
        } else if (type === 'radar') {
            chartConfig = {
                type: 'radar',
                data: {
                    labels: farmerData.map(d => d.district),
                    datasets: [
                        {
                            label: 'Tick Reduction (%)',
                            data: farmerData.map(d => d.tickReduction),
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                            pointBorderColor: '#fff'
                        },
                        {
                            label: 'Productivity Increase (%)',
                            data: farmerData.map(d => d.productivity),
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                            pointBorderColor: '#fff'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Performance Metrics by District'
                        },
                        legend: {
                            position: 'top'
                        }
                    },
                    scales: {
                        r: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            };
        }
        
        farmerChart = new Chart(ctx, chartConfig);
    }

    function changeChartType(type) {
        currentChartType = type;
        createChart(type);
        
        // Update button states
        document.querySelectorAll('.chart-type-selector button').forEach(btn => {
            btn.classList.remove('active');
        });
        document.getElementById(`${type}ChartBtn`).classList.add('active');
    }

    // Switch between table and chart view
    function switchView(view) {
        const tableView = document.getElementById('tableView');
        const chartView = document.getElementById('chartView');
        const chartTypeSelector = document.getElementById('chartTypeSelector');
        const tableBtn = document.getElementById('tableViewBtn');
        const chartBtn = document.getElementById('chartViewBtn');

        if (view === 'table') {
            tableView.style.display = 'block';
            chartView.classList.remove('active');
            chartTypeSelector.style.display = 'none';
            tableBtn.classList.add('active');
            chartBtn.classList.remove('active');
        } else {
            tableView.style.display = 'none';
            chartView.classList.add('active');
            chartTypeSelector.style.display = 'block';
            tableBtn.classList.remove('active');
            chartBtn.classList.add('active');
        }
    }

    // Export data to CSV
    function exportData() {
        let csv = 'Date,Farmer Name,District,Herd Size,Vaccinated,Cost (UGX),Tick Reduction (%),Productivity Increase (%),Satisfaction\n';
        
        farmerData.forEach(row => {
            csv += `${row.date},${row.farmer},${row.district},${row.herdSize},${row.vaccinated},${row.cost},${row.tickReduction},${row.productivity},${row.satisfaction}\n`;
        });

        const blob = new Blob([csv], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `farmer_data_${new Date().toISOString().split('T')[0]}.csv`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        fetchFarmerData();
    });
</script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/NAROinfoHub/resources/views/sections/facilities/anti_tick_vaccine/farmers.blade.php ENDPATH**/ ?>