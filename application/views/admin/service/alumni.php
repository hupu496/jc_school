<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Alumni List</h5>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAlumniModal">
            <i class="fas fa-plus"></i> Add New Alumni
        </button>
    </div>
    <div class="card-body">
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> <?php echo $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle"></i> <?php echo $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover display" id="alumniTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Alumini IDs</th>
                        
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Graduation Year</th>
                        <th>Profession</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                    foreach($alumni_list as $alumni):
                    $i++; ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo 'JCHS-'.$alumni['id']; ?></td>
                        <td><?php echo $alumni['name']; ?></td>
                        <td><?php echo $alumni['email']; ?></td>
                        <td><?php echo $alumni['phone_no']; ?></td>
                        <td><?php echo $alumni['batch']; ?></td>
                        <td><?php echo $alumni['profession']; ?></td>
                        <td><?php echo $alumni['address']; ?></td>
                        <td><?php echo $alumni['city']; ?></td>
                        <td><?php echo $alumni['state']; ?></td>
                        <td><?php echo date('Y-m-d', strtotime($alumni['added_on'])); ?></td>
                        <td>
                            <button class="btn btn-sm btn-info" onclick="editAlumni(<?php echo $alumni['id']; ?>)">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteAlumni(<?php echo $alumni['id']; ?>, '<?php echo $alumni['name']; ?>')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Alumni Modal -->
<div class="modal fade" id="addAlumniModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?php echo base_url('admin/add_alumni'); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Alumni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Full Name *</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Graduation Year *</label>
                            <select name="graduation_year" class="form-control" required>
                                <?php for($year = date('Y'); $year >= 1980; $year--): ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Degree</label>
                            <input type="text" name="degree" class="form-control" placeholder="e.g., B.Tech, M.Tech, MBA">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Branch</label>
                            <input type="text" name="branch" class="form-control" placeholder="e.g., Computer Science">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Current Company</label>
                            <input type="text" name="current_company" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Designation</label>
                            <input type="text" name="designation" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>LinkedIn URL</label>
                            <input type="url" name="linkedin_url" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Alumni</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="deleteName"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="deleteLink" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<script>
    var dataTableInitialized = true;
    
    function editAlumni(id) {
        window.location.href = '<?php echo base_url("admin/edit_alumni/"); ?>' + id;
    }
    
    function deleteAlumni(id, name) {
        $('#deleteName').text(name);
        $('#deleteLink').attr('href', '<?php echo base_url("admin/delete_alumni/"); ?>' + id);
        $('#deleteModal').modal('show');
    }
</script>

<?php $dataTable = true; ?>