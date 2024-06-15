<?php
helper('user_helper');
?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-12 col-sm-12">
            <div class="card p-5">
                <div class="d-flex justify-content-between">
                <h2>Tasks</h2>
                <a href="<?= base_url("task/create") ?>" class="btn btn-primary">Add</a>
                </div>
                
                <hr />
                <table class="table">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tasks as $key=> $task): ?>
                        <tr>
                            <th scope="row"><?= $key+1; ?></th>
                            <td><?= get_user_name($task['user_id']) ?></td>
                            <td><?= $task['title'] ?></td>
                            <td><?= $task['due_date'] ?></td>
                            <td><?php if($task['status']=="pending"){
                                echo '<span class="badge text-bg-warning">Pending</span>';
                            } else{
                                echo '<span class="badge text-bg-success">Complete</span>';
                            }  ?></td>
                            <td><?php if($task['priority']=="low") {
                                echo '<span class="badge text-bg-light">Low</span>';
                            } else if($task['priority']=="medium"){
                                echo '<span class="badge text-bg-info">Medium</span>';
                            }else{
                                echo '<span class="badge text-bg-danger">High</span>';
                            } ?></td>
                            <td>
                                <a href="<?= base_url("task/view/") ?><?= $task['id'] ?>" class="btn btn-info"><i class="bi bi-eye"></i></a>
                                <a href="<?= base_url("task/edit/") ?><?= $task['id'] ?>" class="btn btn-success"><i class="bi bi-pen"></i></a>
                                <a href="<?= base_url("task/delete/") ?><?= $task['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</div>
