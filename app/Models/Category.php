<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * Class Category
 *
 * @property integer id
 * @property string name
 * @property integer status
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 *  @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null find($id, $columns=[])
 */

class Category extends Model
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public function News(): HasMany
    {
        return $this->hasMany('App/Models/News');
    }

}

