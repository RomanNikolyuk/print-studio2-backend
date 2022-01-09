<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PriceRequest;
use App\Models\ModelPrice;
use App\Models\Models;
use App\Models\Price;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \Illuminate\Http\Request;

/**
 * Class PriceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PriceCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Price::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/price');
        CRUD::setEntityNameStrings('price', 'Заправка/відновлення/обслуговування');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('model')->label('Модель детальніше');
        CRUD::column('cartridge')->label('Картридж');
        CRUD::column('refill')->label('Ціна перезаправки');
        CRUD::column('repairing')->label('Ціна відновлення');
        CRUD::column('eternal_cartridge')->label('Ціна вічного картриджу');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    public function store(PriceRequest $request)
    {
        $this->crud->validateRequest();
        $manufacturer = $request->input('manufacturer');

        $item = $this->crud->create($this->crud->getStrippedSaveRequest());

        $model = Models::where('name', $manufacturer)->first();

        if (!$model) {
            $model = Models::create(['name' => $manufacturer]);
        }

        ModelPrice::create(['models_id' => $model->id, 'price_id' => $item->id]);

        \Alert::success('Дані успішно додано!')->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($item->getKey());
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PriceRequest::class);


        $this->crud->field('manufacturer')->label('Модель');
        $this->crud->field('model')->label('Модель детальніше');
        $this->crud->field('cartridge')->label('Модель картриджу');
        $this->crud->field('refill')->label('Ціна перезаправки');
        $this->crud->field('repairing')->label('Ціна відновлення');
        $this->crud->field('eternal_cartridge')->label('Ціна вічного картриджу');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->crud->field('manufacturer')->default(Price::find($this->crud->getCurrentEntryId())->modelName()->first()->name)->label('Модель');
        $this->setupCreateOperation();
    }

    public function update(PriceRequest $request)
    {
        $this->crud->validateRequest();
        $manufacturer = $request->input('manufacturer');

        $item = $this->crud->update($request->get($this->crud->model->getKeyName()),
            $this->crud->getStrippedSaveRequest());

        $model = Models::where('name', $manufacturer)->first();

        if (!$model) {
            $model = Models::create(['name' => $manufacturer]);
            ModelPrice::create(['models_id' => $model->id, 'price_id' => $item->id]);
        }

        \Alert::success('Дані оновлено')->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($item->getKey());
    }

    public function destroy($id)
    {
        $id = $this->crud->getCurrentEntryId() ?? $id;

        ModelPrice::where('price_id', $id)->delete();

        return $this->crud->delete($id);
    }
}
