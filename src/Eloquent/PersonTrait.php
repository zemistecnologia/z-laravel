<?php
namespace Zemis\ZLaravel\Eloquent;

use Illuminate\Database\Schema\Blueprint;

trait PersonTrait
{
    public function addColumnsPerson(Blueprint $table)
    {
        $table->char('person_type', 2);
        $table->string('fullname'); //Nome / Razao Social
        $table->string('nickname'); //Apelido / Nome Fantasia

        $table->string('father_name')->nullable();
        $table->string('mother_name')->nullable();
        $table->string('nationality')->nullable();
        $table->string('naturalness')->nullable();

        $table->string('cpf_cnpj_number', 20)->nullable();
        $table->string('id_number')->nullable(); // RG
        $table->char('id_state', 2)->nullable(); // RG
        $table->date('id_date')->nullable();

        $table->date('date_of_birth');

        $table->string('cellphone_number')->nullable();
        $table->string('phone_number')->nullable();
        $table->string('email')->nullable();

        $table->string('responsible_name')->nullable();

        $table->unsignedInteger('marital_status_id')->nullable();
        $table->unsignedInteger('gender_id')->nullable();
        $table->unsignedInteger('degree_of_instruction_id')->nullable();
        $table->unsignedInteger('user_id')->nullable();


    }
}
