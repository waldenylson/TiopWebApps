<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'bds';

    /**
     * Run the migrations.
     * @table bds
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sistema_centro_id');
            $table->string('versao', 45);
            $table->timestamp('last_update')->nullable();
            $table->timestamp('next_update')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->index(["sistema_centro_id"], 'fk_bds_sistemas_centros1_idx');
            $table->softDeletes();


            $table->foreign('sistema_centro_id', 'fk_bds_sistemas_centros1_idx')
                ->references('id')->on('sistemas_centros')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
