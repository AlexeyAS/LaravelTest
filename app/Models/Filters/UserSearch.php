<?php

namespace App\Models\Filters;


use App\Models\User;
use App\Services\Filters\BaseSearch;
use App\Services\Filters\Searchable;

class UserSearch implements Searchable
{
    const MODEL = User::class;
    use BaseSearch;
}