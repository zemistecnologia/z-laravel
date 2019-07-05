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

    }

    public function addForeignHistory(Blueprint $table)
    {
        $table->foreign('created_by')
            ->references('id')
            ->on('users')->onDelete('cascade')
        ;

        $table->foreign('updated_by')
            ->references('id')
            ->on('users')->onDelete('cascade')
        ;

        $table->foreign('deleted_by')
            ->references('id')
            ->on('users')->onDelete('cascade')
        ;
    }
}
