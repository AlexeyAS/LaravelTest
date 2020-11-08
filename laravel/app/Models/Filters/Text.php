<?php

namespace App\Models\Filters;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

//фильтр имени пользователя, неточные совпадения
class Text implements Filterable
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('message', 'LIKE','%'.$value.'%');
    }
}