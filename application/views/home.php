<div class="container" style="padding-top: 20px;">

    <div class="card" style="max-width: 500px; margin: auto">
        <div class="card-header">
            <b>My Information</b>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Username</label>
                <input type="text" value="<?= $this->session->userdata('username') ?>" disabled class="form-control">
            </div>
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" value="<?= $this->session->userdata('firstname') ?>" disabled class="form-control">
            </div>
            <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" value="<?= $this->session->userdata('middlename') ?>" disabled class="form-control">
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" value="<?= $this->session->userdata('lastname') ?>" disabled class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('user/logout') ?>" class="btn btn-success">Logout</a>
        </div>
    </div>

</div>