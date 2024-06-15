<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    //Task Model
    protected $table = 'tasks';
    protected $allowedFields = ['title', 'description', 'due_date', 'status', 'priority', 'user_id'];
    protected $useTimestamps = true;
}
