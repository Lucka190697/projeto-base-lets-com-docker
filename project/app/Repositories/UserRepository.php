<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository
{
    protected function getClass()
    {
        return User::class;
    }

    public function passwordVerification($request, $id)
    {
        $data = $request->validated();
        if(isset($request->validated()->password))
            return $data;
        else{
            $current = User::find($id);
            $data['password'] = $current['password'];
            return $data;
        }
    }
}
