<?php
helper('user_helper');
?>
<div class="container">
    <div class="row justify-content-center align-items-center pt-5">
        <div class="col-md-6 col-sm-12">
            <div class="card p-5">
                <h2>View Task</h2>

                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="col">User Name</th>
                            <td><?= get_user_name($task['user_id']) ?></td>

                        </tr>
                        <tr>
                            <th scope="col">Title</th>
                            <td><?= $task['title'] ?></td>

                        </tr>
                        <tr>
                            <th scope="col">Description</th>
                            <td><?= $task['description'] ?></td>

                        </tr>
                        <tr>
                            <th scope="col">Due Date</th>
                            <td><?= $task['due_date'] ?></td>

                        </tr>
                        <tr>
                            <th scope="col">Priority</th>
                            <td><?php if($task['priority']=="low") {
                                echo '<span class="badge text-bg-light">Low</span>';
                            } else if($task['priority']=="medium"){
                                echo '<span class="badge text-bg-info">Medium</span>';
                            }else{
                                echo '<span class="badge text-bg-danger">High</span>';
                            } ?></td>

                        </tr>
                        <th scope="col">Status</th>
                        <td><?php if($task['status']=="pending"){
                                echo '<span class="badge text-bg-warning">Pending</span>';
                            } else{
                                echo '<span class="badge text-bg-success">Complete</span>';
                            }  ?></td>

                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>