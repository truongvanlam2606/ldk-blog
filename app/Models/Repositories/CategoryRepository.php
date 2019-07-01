<?php

namespace App\Models\Repositories;

use App\Models\Entities\Category;
use App\Repositories\EloquentRepository;
use App\Models\Contracts\CategoryQueryRepository;

class CategoryRepository extends EloquentRepository implements CategoryQueryRepository
{
    public function __construct()
    {
        $this->setModel();
    }
    
    public function getModel()
    {
        return Category::class;
    }

    public function getListParentNames()
    {
        return $this->model->getListParentNames();
    }
    public function getArrayCategories()
    {
        return $this ->model->getArrayCategories();
    }
    public function displayCategories()
    {
        return $this ->model->displayCategories();
    }
}
