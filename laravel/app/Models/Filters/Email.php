<?php

namespace App\Models\Filters;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

//фильтр имэйла, точные совпадения
class Email implements Filterable
{
    public static function apply(Builder $builder, $value)
    {
        return $builder->where('email', $value);
    }

}