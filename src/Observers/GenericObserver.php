<?php
/**
 * Created by PhpStorm.
 * User: marciomoreira
 * Date: 2019-03-18
 * Time: 16:03
 */

namespace Zemis\ZLaravel\Observers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class GenericObserver
{
    public function created(Model $model)
    {
        $user = Auth::user();

    }

    public function updated(Model $model)
    {
        $user = Auth::user();
    }

    public function deleted(Model $model)
    {
        $user = Auth::user();
    }
}
