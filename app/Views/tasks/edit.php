<div class="container">
    <div class="row justify-content-center align-items-center pt-5">
        <div class="col-md-6 col-sm-12">
            <div class="card p-5">
                <h2>Edit Task</h2>
                
                <form action="<?= base_url("task/update/") ?><?= $task['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <div class="mb-3">
                        <label for="exampleInputUser" class="form-label">User</label>
                        <select name="user_id" required id="exampleInputUser" class="form-control">
                            <?php
                            foreach ($users  as $user) {
                                if ($task['user_id'] == $user['id']) {
                            ?>
                                    <option value="<?= $user['id'] ?>" selected><?= $user['name'] ?></option>
                                <?php } else { ?>
                                    <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                            <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTitle" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputTitle" value="<?= $task['title'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Description</label>
                        <textarea name="description" id="exampleInputDescription" class="form-control"><?= $task['description'] ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputDueDate" class="form-label">Due Date</label>
                        <input type="date" name="due_date" class="form-control" id="exampleInputDueDate" value="<?= $task['due_date'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPriority" class="form-label">Priority</label>
                        <select name="priority" required id="exampleInputPriority" class="form-control">
                            <?php
                            if ($task['priority'] == "low") {
                            ?>
                                <option value="low" selected>Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            <?php } else if ($task['priority'] == "medium") { ?>
                                <option value="low">Low</option>
                                <option value="medium" selected>Medium</option>
                                <option value="high">High</option>
                            <?php } else if ($task['priority'] == "high") {
                            ?>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high" selected>High</option>
                            <?php
                            } else {
                            ?>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            <?php
                            } ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputStatus" class="form-label">Status</label>
                        <select name="status" required id="exampleInputStatus" class="form-control">
                            <?php
                            if ($task['status'] == "pending") {
                            ?>
                                <option value="pending" selected>Pending</option>
                                <option value="completed">Completed</option>
                            <?php } else if ($task['status'] == "completed") { ?>
                                <option value="pending">Pending</option>
                                <option value="completed" selected>Completed</option>
                            <?php } else {
                            ?>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            <?php } ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>
    </div>
</div>