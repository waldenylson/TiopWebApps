<?php namespace TIOp\Domains\Radars\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use TIOp\Domains\Radars\Repositories\ApiRadarRepository;
use TIOp\Domains\Radars\Repositories\RadarRepository;
use TIOp\Domains\Radars\StatusRadar;
use TIOp\Units\Radars\Controllers\RadarController;
use TIOp\Units\Radars\Controllers\StatusRadarController;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

class RadarTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    private $statusRadar = StatusRadar::class;

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
        'canal_b' => '123457',
        'lat' => 123,
        'long' => 456,
        'observacoes' => 'Varejão muito chato!'
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

    public function test_update_status_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id']   = 1;
        $this->data['nome'] = 'TesteRadarUpdateStatusTable';

        $request = new StoreRadarsPostRequest($this->data);

        $controller = new RadarController(new RadarRepository());

        $controller->store($request);

        $controller->update($request, 1);

        $statusRadarcontroller = new StatusRadarController(new ApiRadarRepository());

        $statusRadarcontroller->updateStatus(3, 123456, 1);
        $statusRadarcontroller->updateStatus($this->data['sic'], 123457, 0);

        $this->assertDatabaseHas('status_radar', [
            'radar_id'   => 1,
            'canal_a' => 'ope',
            'canal_b' => 'ino',
        ]);
    }

}