<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<h4>Users Management</h4>
<hr class="mb-5">
<div class="table-responsive mb-4">
    <table class="table table-striped" id="datatables-users">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>