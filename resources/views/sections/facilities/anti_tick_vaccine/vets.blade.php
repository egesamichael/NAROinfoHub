@extends('layouts.app')

@section('content')
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
</style>

<div class="page-breadcrumb">
    <div class="container">
        <a href="{{ route('facilities.anti_tick_vaccine') }}" class="text-decoration-none text-primary">
            <i class="bi bi-arrow-left"></i> Back to Anti-Tick Vaccine
        </a>
    </div>
</div>

<div class="container">
    <div class="page-title-section">
        <h1 class="display-5 mb-2">Vets - Anti-Tick Vaccine</h1>
        <p class="text-muted mb-0">Information for Veterinarians</p>
    </div>

    <!-- Information Section -->
    <div class="content-section">
        <h2 class="section-heading">Information for Veterinarians</h2>
        <p class="mb-4">
            This section provides comprehensive information for veterinarians about the anti-tick vaccine.
        </p>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <h3 class="h5 fw-bold mb-3">Key Information:</h3>
                <ul class="info-list">
                    <li>Dosage and administration guidelines</li>
                    <li>Contraindications and precautions</li>
                    <li>Clinical efficacy data</li>
                    <li>Post-vaccination monitoring</li>
                    <li>Adverse reaction management</li>
                </ul>
            </div>
            
            <div class="col-md-6 mb-4">
                <h3 class="h5 fw-bold mb-3">Professional Resources:</h3>
                <p>
                    Access training materials, clinical protocols, and continuing education resources for veterinary professionals.
                </p>
            </div>
        </div>
    </div>

    <!-- Vaccination Data Section -->
    <div class="content-section">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h2 class="section-heading mb-0">Vaccination Data</h2>
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

        <!-- Table View -->
        <div id="tableView" class="table-container">
            <table class="table table-striped table-hover" id="vaccinationTable">
                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Vet Name</th>
                        <th>District</th>
                        <th>Animals Vaccinated</th>
                        <th>Cattle</th>
                        <th>Goats</th>
                        <th>Sheep</th>
                        <th>Efficacy Rate (%)</th>
                        <th>Adverse Reactions</th>
                    </tr>
                </thead>
                <tbody id="dataTableBody">
                    <!-- Data will be populated by JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Chart View -->
        <div id="chartView" class="chart-container">
            <canvas id="vaccinationChart"></canvas>
        </div>
    </div>
</div>

<div class="mb-5"></div>

<script>
    // Data will be fetched from MySQL via API
    let vaccinationData = [];

    // Fetch data from API
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

    // Populate table
    function populateTable() {
        const tbody = document.getElementById('dataTableBody');
        tbody.innerHTML = '';
        
        vaccinationData.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${row.date}</td>
                <td>${row.vet}</td>
                <td>${row.district}</td>
                <td>${row.total}</td>
                <td>${row.cattle}</td>
                <td>${row.goats}</td>
                <td>${row.sheep}</td>
                <td>${row.efficacy}%</td>
                <td>${row.reactions}</td>
            `;
            tbody.appendChild(tr);
        });
    }

    // Initialize chart
    let vaccinationChart = null;
    function initChart() {
        const ctx = document.getElementById('vaccinationChart').getContext('2d');
        
        vaccinationChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: vaccinationData.map(d => d.district),
                datasets: [
                    {
                        label: 'Cattle',
                        data: vaccinationData.map(d => d.cattle),
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Goats',
                        data: vaccinationData.map(d => d.goats),
                        backgroundColor: 'rgba(255, 206, 86, 0.7)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Sheep',
                        data: vaccinationData.map(d => d.sheep),
                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
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
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Vaccinations by District and Animal Type'
                    }
                }
            }
        });
    }

    // Switch between table and chart view
    function switchView(view) {
        const tableView = document.getElementById('tableView');
        const chartView = document.getElementById('chartView');
        const tableBtn = document.getElementById('tableViewBtn');
        const chartBtn = document.getElementById('chartViewBtn');

        if (view === 'table') {
            tableView.style.display = 'block';
            chartView.classList.remove('active');
            tableBtn.classList.add('active');
            chartBtn.classList.remove('active');
        } else {
            tableView.style.display = 'none';
            chartView.classList.add('active');
            tableBtn.classList.remove('active');
            chartBtn.classList.add('active');
        }
    }

    // Export data to CSV
    function exportData() {
        let csv = 'Date,Vet Name,District,Total Animals,Cattle,Goats,Sheep,Efficacy Rate (%),Adverse Reactions\n';
        
        vaccinationData.forEach(row => {
            csv += `${row.date},${row.vet},${row.district},${row.total},${row.cattle},${row.goats},${row.sheep},${row.efficacy},${row.reactions}\n`;
        });

        const blob = new Blob([csv], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `vaccination_data_${new Date().toISOString().split('T')[0]}.csv`;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        fetchVaccinationData();
    });
</script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
