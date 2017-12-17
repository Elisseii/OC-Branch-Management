<?php namespace Elisseiidev\BranchManagement\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Groups extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_groups' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Elisseiidev.BranchManagement', 'branch-management', 'groups');
    }
}