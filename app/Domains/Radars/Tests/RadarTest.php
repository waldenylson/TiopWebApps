<?php namespace TIOp\Domains\Radars\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use TIOp\Domains\Radars\Repositories\RadarRepository;
use TIOp\Units\Radars\Controllers\RadarController;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

class RadarTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    private $data = [
        'id' => null,
        'nome' => 'TesteRadarInsertController',
        'localidade' => 'teste',
        'equipamento' => 'teste',
        'canalizacao' => 'teste',
        'protocolo' => 'teste',
        'sic' => 'teste',
        'tipo' => 'teste',
        'canal_a' => '123456',
        'canal_b' => '123456',
        'lat' => 123,
        'long' => 456,
    ];

    public function test_create_new_radar()
    {
        $this->beginDatabaseTransaction();

        $request = new StoreRadarsPostRequest($this->data);

        $controller = new RadarController(new RadarRepository());

        $controller->store($request);

        $this->assertDatabaseHas('radares', [
            'nome' => 'TesteRadarInsertController'
        ]);
    }

    public function test_update_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteRadarUpdateController';

        $request = new StoreRadarsPostRequest($this->data);

        $controller = new RadarController(new RadarRepository());

        $controller->store($request);

        $controller->update($request, 1);

        $this->assertDatabaseHas('radares', [
            'id'   => 1,
            'nome' => 'TesteRadarUpdateController'
        ]);
    }

    public function test_destroy_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteRadarDestroyController';

        $request = new StoreRadarsPostRequest($this->data);

        $controller = new RadarController(new RadarRepository());

        $controller->store($request);

        $controller->destroy(1);

        $this->assertDatabaseMissing('radares', [
            'id'   => 1
        ]);
    }

}