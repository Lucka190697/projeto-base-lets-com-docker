<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function createHash($data)
    {
        $data['password'] = Hash::make($data['password']);
        return $data;
    }
}
