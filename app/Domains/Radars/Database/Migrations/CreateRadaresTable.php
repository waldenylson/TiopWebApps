<?php namespace TIOp\Domains\Radars\Database\Migrations;

use Codecasts\Support\Domain\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRadaresTable extends Migration
{
    /**
     * Run the migrations.
     * @table radares
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('radares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('localidade', 45);
            $table->string('equipamento', 45);
            $table->string('canalizacao', 45);
            $table->string('protocolo', 45);
            $table->string('sic', 45);
            $table->string('tipo', 45)->nullable();
            $table->float('lat');
            $table->float('long');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       $this->schema->drop('radares');
     }
}
