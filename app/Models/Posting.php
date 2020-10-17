<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Filters\PostingSearch;


class Posting extends Model
{
    public function getPostingsBySearch(Request $request) : Builder
    {
        $builder = (new PostingSearch())->apply($request);
        return $builder;
    }
}
