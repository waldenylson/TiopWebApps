<?php namespace TIOp\Domains\Sistemas\Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use TIOp\Domains\Sistemas\Repositories\SistemasRepository;
use TIOp\Units\Sistemas\Controllers\SistemasController;
use TIOp\Units\Sistemas\Requests\StoreSistemasPostRequest;

class SistemasTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    private $data = [
        'id' => null,
        'nome' => 'TesteSistemaInsertController',
        'versao' => '2.2.6.1',
        'data_atualizacao' => '22/05/1987',
    ];

    public function test_create_new_sistema()
    {
        $this->beginDatabaseTransaction();

        $request = new StoreSistemasPostRequest($this->data);

        $controller = new SistemasController(new SistemasRepository());

        $controller->store($request);

        $this->assertDatabaseHas('sistemas', [
            'nome' => 'TesteSistemaInsertController'
        ]);
    }

    public function test_update_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteSistemaUpdateController';

        $request = new StoreSistemasPostRequest($this->data);

        $controller = new SistemasController(new SistemasRepository());

        $controller->store($request);

        $controller->update($request, 1);

        $this->assertDatabaseHas('sistemas', [
            'id'   => 1,
            'nome' => 'TesteSistemaUpdateController'
        ]);
    }

    public function test_destroy_radar()
    {
        $this->beginDatabaseTransaction();

        $this->data['id'] = 1;
        $this->data['nome'] = 'TesteSistemaDestroyController';

        $request = new StoreSistemasPostRequest($this->data);

        $controller = new SistemasController(new SistemasRepository());

        $controller->store($request);

        $controller->destroy(1);

        $this->assertDatabaseMissing('sistemas', [
            'id'   => 1
        ]);
    }

}