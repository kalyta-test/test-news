<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class News
 *
 * @property integer id
 * @property string header
 * @property string text
 * @property integer publicationDate
 * @property integer status
 * @property string previewImage
 * @property integer category_id
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 *  @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null find($id, $columns=[])
 *  @method static Builder|static|static[] where($field, $operator, $value = null)
 *
 */

class News extends Model
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public function Category(): BelongsTo
    {
        return $this->belongsTo('App/Models/Category');
    }

}
