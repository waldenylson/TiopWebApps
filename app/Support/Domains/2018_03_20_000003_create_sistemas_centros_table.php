<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSistemasCentrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sistemas_centros';

    /**
     * Run the migrations.
     * @table sistemas_centros
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('sistema_id');
            $table->integer('centro_id');
            $table->string('versao_sistema', 45);
            $table->timestamp('data_atualizacao');
            $table->boolean('producao');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->index(["sistema_id"], 'fk_sistemas_has_centros_sistemas1_idx');

            $table->index(["centro_id"], 'fk_sistemas_has_centros_centros1_idx');
            $table->softDeletes();


            $table->foreign('sistema_id', 'fk_sistemas_has_centros_sistemas1_idx')
                ->references('id')->on('sistemas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('centro_id', 'fk_sistemas_has_centros_centros1_idx')
                ->references('id')->on('centros')
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
