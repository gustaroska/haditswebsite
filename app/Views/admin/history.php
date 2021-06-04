<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>
<h4>Log History</h4>
<hr class="mb-5">
<div class="table-responsive mb-4">
     <table class="table table-striped" id="datatables-logs">
          <thead>
               <tr>
                    <th scope="col">Date & Time</th>
                    <th scope="col">User</th>
                    <th scope="col">Log History</th>
               </tr>
          </thead>
          <tbody>
          </tbody>
     </table>
</div>
<?= $this->endSection(); ?>