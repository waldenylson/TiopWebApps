<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRplTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'rpl';

    /**
     * Run the migrations.
     * @table rpl
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('bds_id');
            $table->string('numero', 45);
            $table->dateTime('data_prev_carga');
            $table->dateTime('validade');
            $table->boolean('difusao')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->index(["bds_id"], 'fk_rpl_bds1_idx');
            $table->softDeletes();


            $table->foreign('bds_id', 'fk_rpl_bds1_idx')
                ->references('id')->on('bds')
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
