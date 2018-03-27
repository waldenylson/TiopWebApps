<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParadasRadarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'paradas_radar';

    /**
     * Run the migrations.
     * @table paradas_radar
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('radar_id');
            $table->timestamp('data_prevista');
            $table->string('descricao_motivo');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->index(["radar_id"], 'fk_padas_radar_radares1_idx');
            $table->softDeletes();


            $table->foreign('radar_id', 'fk_padas_radar_radares1_idx')
                ->references('id')->on('radares')
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
