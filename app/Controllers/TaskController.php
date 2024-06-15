<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    //check task role wise and user wise
    public function index()
    {
        echo view('common/header');
        $model = new TaskModel();
        if(session()->get('role') == "admin")
        {
            $data['tasks'] = $model->paginate(10);
        }else{
            $data['tasks'] = $model->where('user_id',session()->get('user_id'))->paginate(10);
        }
        
        $data['pager'] = $model->pager;
        echo view('tasks/index', $data);
        echo view('common/footer');
      
    }

    //create task by admin & user alse
    public function create()
    {
        echo view('common/header');
        $model = new UserModel();
        $data['users'] = $model->where('role','user')->findAll();
  
        echo view('tasks/create',$data);
        echo view('common/footer');
    }

    //store data task by admin & user alse
    public function store()
    {
        $model = new TaskModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'due_date' => $this->request->getVar('due_date'),
            'priority' => $this->request->getVar('priority'),
            'status' => $this->request->getVar('status'),
            'user_id' => $this->request->getVar('user_id'),
        ];
        $model->save($data);
        return redirect()->to(base_url("tasks"));
    }

    //view task by admin & user alse
    public function view($id)
    {
        echo view('common/header');
        $model = new TaskModel();
        $data['task'] = $model->find($id);
        echo view('tasks/view', $data);
        echo view('common/footer');
    }

    //edit task by admin & user alse
    public function edit($id)
    {
        echo view('common/header');
        $model = new TaskModel();
        $data['task'] = $model->find($id);
        $model = new UserModel();
        $data['users'] = $model->where('role','user')->findAll();
        echo view('tasks/edit', $data);
        echo view('common/footer');
    }

    //update task by admin & user alse
    public function update()
    {
        $model = new TaskModel();
        $id = $this->request->getVar('id');
        $data = [
            'title' => $this->request->getVar('title'),
            'description' => $this->request->getVar('description'),
            'due_date' => $this->request->getVar('due_date'),
            'priority' => $this->request->getVar('priority'),
            'status' => $this->request->getVar('status'),
            'user_id' => $this->request->getVar('user_id'),
        ];
        $model->update($id, $data);
        return redirect()->to(base_url("tasks"));
    }

    //delete task by admin & user alse
    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to(base_url("tasks"));
    }
}
