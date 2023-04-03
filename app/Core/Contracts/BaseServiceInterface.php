<?php

namespace App\Core\Contracts;

interface BaseServiceInterface
{
    public function delete(int $id): void;

    public function findAll(array $filter = [], string $sort = null, array $columns = ['*']): \Illuminate\Database\Eloquent\Collection;

    public function findAllPaginated(\Illuminate\Http\Request $request, array $columns = ['*']): \Illuminate\Pagination\LengthAwarePaginator;

    public function findById(int $id);

    public function findRandom(): \Illuminate\Database\Eloquent\Model;

    public function findRandoms(int $records = 1): \Illuminate\Database\Eloquent\Collection;
}
