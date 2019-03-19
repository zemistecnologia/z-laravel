<?php

namespace Zemis\ZLaravel\Eloquent;

use Illuminate\Database\Schema\Blueprint;

trait HistoryDataTrait
{
    public function addColumnsHistory(Blueprint $table)
    {
        $table->timestamps();
        $table->softDeletes();
        $table->unsignedInteger('created_by')->nullable();
        $table->unsignedInteger('updated_by')->nullable();
        $table->unsignedInteger('deleted_by')->nullable();

        $table->foreign('created_by')
            ->refereces('id')
            ->on('users')->onDelete('cascade')
        ;

        $table->foreign('updated_by')
            ->refereces('id')
            ->on('users')->onDelete('cascade')
        ;

        $table->foreign('deleted_by')
            ->refereces('id')
            ->on('users')->onDelete('cascade')
        ;
    }
}
