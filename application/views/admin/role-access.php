<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error(
                'menu',
                 '<div class="alert alert-success" role="alert">
                 </div>'); ?>
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
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope=row><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <input type="checkbox" class="form-check-input" <?= check_access($role['id'],
                                $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id'] ?>"></input>              
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


