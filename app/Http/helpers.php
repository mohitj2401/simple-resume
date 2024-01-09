<?php

use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;

function getCategoriesType(): array
{
    return [
        'project' => 'Project',
        'contract' => 'Contract',
        'expense' => 'Expense',
        'invoice' => 'Invoice',
        'lead' => 'Lead',
        'ticket' => 'Ticket',
        'knowledgebase' => 'Knowledgebase',
        'estimate' => 'Estimate',
    ];
}

if (!function_exists('checkPermission')) {
    function checkPermission($permission)
    {
        try {

            if (Permission::where('name', $permission)->exists()) {
                if (auth()->user()->can($permission)) {
                    return true;
                }
            } else {
                return true;
            }

            return false;
        } catch (\Exception $th) {


            return false;
        }
    }
}
