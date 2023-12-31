<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['first_name'],
            'middle_name' => $row['middle_name'],
            'last_name' => $row['last_name'],
            'email'=>$row['email'],
            'password'=>Hash::make('Password'),
            'mobile'=>$row['mobile_number'],
            'state'=>$row['state'],
            'city'=>$row['city'],
            'address'=>$row['address'],
            'profile_pic'=>$row['profile_photo'],
        ]);
    }
}
