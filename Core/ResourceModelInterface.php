<?php

namespace MVC\Core;

interface ResourceModelInterface
{
    /**
     * init
     * @param table
     * @param id
     * @param model
     */
    function _init($table, $id, $model);
    /**
     * add
     * @param model
     */
    function add($model);
    /**
     * edit
     * @param model
     */
    function edit($model);
    /**
     * delete
     * @param model
     */
    function delete($model);
    /**
     * get
     * @param model
     */
    function get($id);
    /**
     * getAll
     * @param model
     */
    function getAll();
}