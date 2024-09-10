<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface ProductInterface
{
    public function list(Model $model);
    public function findById(Model $model, int $postId);
    public function create(Model $model, array $details);
    public function update(Model $model, int $postId, array $details);
    public function delete(Model $model, int $postId);
}

