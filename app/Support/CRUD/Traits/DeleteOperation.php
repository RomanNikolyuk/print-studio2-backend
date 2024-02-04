<?php

namespace App\Support\CRUD\Traits;

use Illuminate\Support\Facades\Route;

trait DeleteOperation
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;


    /**
     * Define which routes are needed for this operation.
     *
     * @param  string  $segment  Name of the current entity (singular). Used as first URL segment.
     * @param  string  $routeName  Prefix of the route name.
     * @param  string  $controller  Name of the current CrudController.
     */
    protected function setupDeleteRoutes($segment, $routeName, $controller): void
    {
        Route::post($segment.'/{id}/destroy', [
            'as'        => $routeName.'.destroy',
            'uses'      => $controller.'@destroy',
            'operation' => 'delete',
        ]);
    }
}
