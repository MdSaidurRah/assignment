<?php

namespace App\Repositories;

use App\Models\Products;
use App\Interfaces\ProductInterface;


class ProductsRepository implements ProductInterface
{
    public function list($model)
    {
        return $model::all();
    }

    public function findById($model, int $postId)
    {
        return $model::query()->findOrFail($postId);
    }

    public function create($model, array $details)
    {
        return $model::create($details);
    }

    public function update($model, int $postId, array $details)
    {
        return $model::query()->where('id', $postId)->update($details);
    }

    public function delete($model, int $postId)
    {
        return $model::query()->where('id', $postId)->delete();
    }

}
