<?php namespace TIOp\Domains\Centros\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use TIOp\Domains\Centros\Repositories\CentrosRepository;
use TIOp\Units\Centros\Controllers\CentrosController;
use TIOp\Units\Centros\Requests\StoreCentrosPostRequest;

class CentrosTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    private $data = [
        'id' => null,
        'nome' => 'TesteCentroInsertController',
        'acronimo' => 'ACC-RE',
        'localidade' => 'RECIFE',
        'descricao' => 'loren ipsum',
    ];

    public function test_create_new_sistema()
    {
        $this->beginDatabaseTransaction();

        $request = new StoreCentrosPostRequest($this->data);

        $controller = new CentrosController(new CentrosRepository());

        $controller->store($request);

        $this->assertDatabaseHas('centros', [
            'nome' => 'TesteCentroInsertController'
        ]);
    }

    public function test_update_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteCentroUpdateController';

        $request = new StoreCentrosPostRequest($this->data);

        $controller = new CentrosController(new CentrosRepository());

        $controller->store($request);

        $controller->update($request, 1);

        $this->assertDatabaseHas('centros', [
            'id'   => 1,
            'nome' => 'TesteCentroUpdateController'
        ]);
    }

    public function test_destroy_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteCentroDestroyController';

        $request = new StoreCentrosPostRequest($this->data);

        $controller = new CentrosController(new CentrosRepository());

        $controller->store($request);

        $controller->destroy(1);

        $this->assertDatabaseMissing('centros', [
            'id'   => 1
        ]);
    }

}