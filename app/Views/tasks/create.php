<div class="container">
    <div class="row justify-content-center align-items-center pt-5">
    <div class="col-md-6 col-sm-12">
        <div class="card p-5">
            <h2>Create Task</h2>

            <form action="<?= base_url("task/store") ?>" method="post">
            <div class="mb-3">
                    <label for="exampleInputUser" class="form-label">User</label>
                    <select name="user_id" required id="exampleInputUser" class="form-control">
                        <?php
                        foreach($users  as $user){
                        ?>
                        <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputTitle" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Description</label>
                    <textarea name="description" id="exampleInputDescription" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputDueDate" class="form-label">Due Date</label>
                    <input type="date" name="due_date" class="form-control" id="exampleInputDueDate" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPriority" class="form-label">Priority</label>
                    <select name="priority" required id="exampleInputPriority" class="form-control">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputStatus" class="form-label">Status</label>
                    <select name="status" required id="exampleInputStatus" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>
    </div>
</div>