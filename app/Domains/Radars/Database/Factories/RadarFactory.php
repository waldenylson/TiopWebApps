<?php namespace TIOp\Domains\Radars\Database\Factories;


use Codecasts\Support\Domain\ModelFactory;
use TIOp\Domains\Radars\Radar;

class RadarFactory extends ModelFactory
{
    protected $model = Radar::class;

    public function fields()
    {
        $nome = $this->faker->name;

        return [
            'nome'        => $nome,
            'localidade'  => $this->faker->sentence(10),
            'equipamento' => $this->faker->sentence(10),
            'canalizacao' => $this->faker->sentence(15),
            'protocolo'   => $this->faker->sentence(10),
            'sic'         => $this->faker->sentence(2),
            'tipo'        => $this->faker->sentence(10),
            'latitude'    => $this->faker->randomFloat(),
            'longitude'   => $this->faker->randomFloat(),
        ];
    }

}