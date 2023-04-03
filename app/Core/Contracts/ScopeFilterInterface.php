<?php

namespace App\Core\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface ScopeFilterInterface
{
    public function scopeFilter(Builder $query, array $params = []): Builder;
}
