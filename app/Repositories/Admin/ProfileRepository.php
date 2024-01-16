<?php

namespace App\Repositories\Admin;


use App\Models\User;
use Illuminate\Support\Facades\Log;


class ProfileRepository
{







    public function update(User $Profile)
    {
        try {
            $input = request()->all();



            $Profile->update($input);

            if (request()->ajax()) {
                $output = [
                    'success' => true,
                    'data' => '',
                    'path' => '/profile',
                    'msg' => 'Profile Update Successully'
                ];
            } else {
                $output = redirect()->back()->with(['msg' => 'Profile Update Successully', 'success' => true]);
            }
        } catch (\Exception $e) {
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            $output = [
                'success' => false,
                'msg' => 'Something Went Wrong.'
            ];
        }
        return $output;
    }
}
