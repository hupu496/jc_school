<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Admin Panel'; ?> - Alumni Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.9);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: rgba(255,255,255,0.2);
            color: white;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        .main-content {
            background: #f8f9fc;
            min-height: 100vh;
        }
        .topbar {
            background: white;
            box-shadow: 0 1px 4px rgba(0,0,0,0.1);
            padding: 15px 20px;
        }
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .dataTables_wrapper .dataTables_length, 
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0 sidebar">
                <div class="text-center py-4">
                    <i class="fas fa-graduation-cap fa-3x text-white"></i>
                    <h5 class="text-white mt-2">Alumni System</h5>
                </div>
                <nav class="nav flex-column px-3">
                    <a class="nav-link <?php echo ($this->uri->segment(2) == 'dashboard') ? 'active' : ''; ?>" href="<?php echo base_url('admin/dashboard'); ?>">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <a class="nav-link <?php echo ($this->uri->segment(2) == 'alumni') ? 'active' : ''; ?>" href="<?php echo base_url('admin/alumni'); ?>">
                        <i class="fas fa-users"></i> Alumni Management
                    </a>
                    <hr class="bg-light">
                    <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </nav>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-10 p-0 main-content">
                <div class="topbar d-flex justify-content-between align-items-center">
                    <h4 class="mb-0"><i class="fas fa-<?php echo ($this->uri->segment(2) == 'dashboard') ? 'tachometer-alt' : 'users'; ?>"></i> <?php echo $title ?? 'Dashboard'; ?></h4>
                    <div>
                        <span class="me-3"><i class="fas fa-user-circle"></i> <?php echo $this->session->userdata('username'); ?></span>
                    </div>
                </div>
                <div class="p-4">