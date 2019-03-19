<?php

namespace Zemis\ZLaravel\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class BaseModel extends Model
{
    const CREATED_BY = 'created_by';
    const UPDATED_BY = 'updated_by';
    const DELETED_BY = 'deleted_by';

    public static function boot()
    {
        parent::boot();
        $user = Auth::user();

        static::creating(function (Model $model) use ($user) {
            // $model->created_by = $user->
        });
    }
}
