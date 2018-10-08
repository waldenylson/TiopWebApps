<?php namespace TIOp\Domains\SistemasCentros\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\SistemasCentros\Requests\StoreSistemasCentrosPostRequest;

/**
 *  User Interface Contracts
 */
interface SistemasCentrosRepository extends CrudRepository
{
    public function listSistemasCentros();
    public function infSistemas();
    public function store(StoreSistemasCentrosPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreSistemasCentrosPostRequest $request, $id);
    public function destroy($id);
    public function getAllSistemasCentrosForSelect();
    public function getSistemasCentrosRelacionados($id);
    public function getSistemasCentrosRelacionadosBDS($id);
}
