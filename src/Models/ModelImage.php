<?php

namespace Barrydevt\Imagepal\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ModelImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return MorphTo
     */
    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
