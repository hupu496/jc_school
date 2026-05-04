<div class="row">
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Total Alumni</h6>
                    <h2 class="mb-0"><?php echo $total_alumni; ?></h2>
                </div>
                <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                    <i class="fas fa-users fa-2x text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">This Year Graduated</h6>
                    <h2 class="mb-0"><?php echo array_sum(array_column($year_wise, 'count')); ?></h2>
                </div>
                <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                    <i class="fas fa-calendar-alt fa-2x text-success"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Recent Alumni</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Graduation Year</th>
                                <th>Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($recent_alumni as $alumni): ?>
                            <tr>
                                <td><?php echo $alumni['full_name']; ?></td>
                                <td><?php echo $alumni['graduation_year']; ?></td>
                                <td><?php echo $alumni['current_company']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Graduation Year Distribution</h5>
            </div>
            <div class="card-body">
                <canvas id="yearChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('yearChart').getContext('2d');
    var yearData = <?php echo json_encode($year_wise); ?>;
    var years = yearData.map(item => item.graduation_year);
    var counts = yearData.map(item => item.count);
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [{
                label: 'Number of Alumni',
                data: counts,
                backgroundColor: 'rgba(102, 126, 234, 0.5)',
                borderColor: '#667eea',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1 }
                }
            }
        }
    });
</script>