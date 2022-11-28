<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-success" role="alert"></div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" class="btn btn-primary" 
            data-toggle="modal" data-target="#addnewrole">Add New Role</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope=row><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/'). $r['id'] ?>" class="badge badge-warning ">Access</a>
                                <a href="#" class="badge badge-success" data-toggle="modal"data-popup="tooltip"data-placement="top" title="edit"data-target="#exampleModalmenuedit<?= $r['id']; ?>">Edit</a>
                                <a onclick="hapusRole('<?= base_url('admin/hapusrole/'). $r['id'] ?>')" class="badge badge-danger badge-sm tombol-hapus">Delete</a> 
                            <!--    id="tombol-hapus-role" class="badge badge-danger tombol-hapus">Delete</button> -->
                            <!-- <button href="<?= base_url('admin/hapusrole/'); ?><?= $r['id'] ?>" class="badge badge-danger" onclick="return confirm('yakin akan dihapus?')">"Delete</a>" -->
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="addnewrole" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="role" id="role" placeholder="Role Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="exampleModalmenuedit<?= $r['id'] ?>" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit Role</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/roleedit'); ?>" method="POST">

                    <input type="hidden" class="form-control"
                    readonly value="<?= $r['id']; ?>" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="role" id="role"  placeholder="Menu name" value="<?= $r['role'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $r['id'] ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php endforeach; ?>