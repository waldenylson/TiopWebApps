<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemaCentroStatusRadarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sistema_centro_status_radar';

    /**
     * Run the migrations.
     * @table sistema_centro_status_radar
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('sistemas_centros_id');
            $table->integer('status_radar_radar_id');

            $table->index(["sistemas_centros_id"], 'fk_sistemas_centros_has_status_radar_sistemas_centros1_idx');

            $table->index(["status_radar_radar_id"], 'fk_sistemas_centros_has_status_radar_status_radar1_idx');


            $table->foreign('sistemas_centros_id', 'fk_sistemas_centros_has_status_radar_sistemas_centros1_idx')
                ->references('id')->on('sistemas_centros')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('status_radar_radar_id', 'fk_sistemas_centros_has_status_radar_status_radar1_idx')
                ->references('radar_id')->on('status_radar')
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
