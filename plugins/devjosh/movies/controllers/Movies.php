<?php namespace Devjosh\Movies\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Movies extends Controller
{
    public $implement = [        
    	'Backend\Behaviors\ListController',        
    	'Backend\Behaviors\FormController',        
    	'Backend\Behaviors\ReorderController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Devjosh.Movies', 'main-menu-item');
    }

    // public function beforeSave()
    // {
    //     if (empty($this->sort_order)) {
    //         $this->sort_order = DB::table('orders')->max('sort_order') + 1;
    //     }
    // }
}
