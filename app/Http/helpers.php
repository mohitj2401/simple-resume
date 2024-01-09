<?php

use Illuminate\Support\Facades\File;
use Spatie\Permission\Models\Permission;

function getSkillsType(): array
{
    return [
        0 => 'Language',
        1 => 'Framework',
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
