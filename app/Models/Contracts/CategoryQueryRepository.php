<?php
namespace App\Models\Contracts;

use App\Contracts\QueryRepository;

interface CategoryQueryRepository extends QueryRepository
{
    public function getListParentNames();
    public function getArrayCategories();
    public function displayCategories(array $arrayCategories, $parent_id=0, $dem=0);
}
