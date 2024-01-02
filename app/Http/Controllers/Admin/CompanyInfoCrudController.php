<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyInfoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CompanyInfoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CompanyInfoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\CompanyInfo::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/company-info');
        CRUD::setEntityNameStrings('company info', 'company infos');
        $this->setupImagesFields();
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
        CRUD::setValidation(CompanyInfoRequest::class);
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
        CRUD::field('company_logo')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
        CRUD::field('tab_icon')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
        CRUD::field('home_page_service_image')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
        CRUD::field('preloader_page_animation')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'uploads', // the path inside the disk where file will be stored
        ]);
    }
}
