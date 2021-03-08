<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{
    /**
     * add
     * @param model
     */

    public function add($model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->add($model);
    }
    /**
     * save
     * @param model
     */

    public function edit($model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->edit($model);
    }
    /**
     * get
     * @param model
     */
    public function get($id)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->get($id);
    }
    /**
     * delete
     * @param model
     */
    public function delete($model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->delete($model);
    }
    /**
     * getAll
     * @param model
     */
    public function getAll()
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->getAll();
    }
}