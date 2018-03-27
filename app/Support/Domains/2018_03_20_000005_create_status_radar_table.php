<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusRadarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'status_radar';

    /**
     * Run the migrations.
     * @table status_radar
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('radar_id');
            $table->string('status', 45);
            $table->string('canal_a', 45);
            $table->string('canal_b', 45);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->index(["radar_id"], 'fk_radares_has_sistemas_centros_radares1_idx');
            $table->softDeletes();


            $table->foreign('radar_id', 'fk_radares_has_sistemas_centros_radares1_idx')
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
