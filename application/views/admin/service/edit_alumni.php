<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Edit Alumni</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('admin/edit_alumni/' . $alumni['id']); ?>" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Full Name *</label>
                    <input type="text" name="full_name" class="form-control" value="<?php echo $alumni['full_name']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Email *</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $alumni['email']; ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $alumni['phone']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Male" <?php echo ($alumni['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo ($alumni['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                        <option value="Other" <?php echo ($alumni['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" value="<?php echo $alumni['date_of_birth']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Graduation Year *</label>
                    <select name="graduation_year" class="form-control" required>
                        <?php for($year = date('Y'); $year >= 1980; $year--): ?>
                        <option value="<?php echo $year; ?>" <?php echo ($alumni['graduation_year'] == $year) ? 'selected' : ''; ?>>
                            <?php echo $year; ?>
                        </option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Degree</label>
                    <input type="text" name="degree" class="form-control" value="<?php echo $alumni['degree']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Branch</label>
                    <input type="text" name="branch" class="form-control" value="<?php echo $alumni['branch']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Current Company</label>
                    <input type="text" name="current_company" class="form-control" value="<?php echo $alumni['current_company']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Designation</label>
                    <input type="text" name="designation" class="form-control" value="<?php echo $alumni['designation']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="<?php echo $alumni['city']; ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" value="<?php echo $alumni['state']; ?>">
                </div>
                <div class="col-md-12 mb-3">
                    <label>LinkedIn URL</label>
                    <input type="url" name="linkedin_url" class="form-control" value="<?php echo $alumni['linkedin_url']; ?>">
                </div>
            </div>
            <div class="mt-3">
                <a href="<?php echo base_url('admin/alumni'); ?>" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Alumni</button>
            </div>
        </form>
    </div>
</div>