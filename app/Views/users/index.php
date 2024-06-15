<div class="container">
    <div class="row py-5">
        <div class="col-md-12 col-sm-12">
            <div class="card p-5">
                <div class="d-flex justify-content-between">
                <h2>Users</h2>
                <a href="<?= base_url("register") ?>" class="btn btn-primary">Add</a>
                </div>
                <hr />
                <table class="table">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $key=> $user): ?>
                        <tr>
                            <th scope="row"><?= $key+1; ?></th>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['role'] ?></td>
                            <td>
                            <?php if($user['status']==1){
                                echo '<span class="badge text-bg-success">Active</span>';
                            } else{
                                echo '<span class="badge text-bg-danger">Inactive</span>';
                            }  ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>