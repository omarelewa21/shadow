<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HomeSliderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HomeSliderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HomeSliderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\HomeSlider::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/home-slider');
        CRUD::setEntityNameStrings('home slider', 'home sliders');
        $this->setupImagesFields();
        $this->setupSummerNoteFields();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(HomeSliderRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
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
        $this->setupCreateOperation();
    }

    private function setupImagesFields()
    {
        CRUD::field('background_image1')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
        CRUD::field('background_image2')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
    }

    private function setupSummerNoteFields()
    {
        CRUD::field('title')->type('summernote');
        CRUD::field('description')->type('summernote');
    }
}
