<?php

namespace App\Services;

use App\Models\Detail;

class UserService
{
  public function saveUserDetails($user)
  {
    // Save the user's full name
    $fullName = $user->firstname . ' ' . $user->middlename . ' ' . $user->lastname;

    // Save the middle initial (from the middle name)
    $middleInitial = strtoupper(substr($user->middlename, 0, 1));

    // Gender (based on prefix name)
    $gender = in_array($user->prefixname, ['Mr.', 'Sir']) ? 'Male' : 'Female';

    // Create details for the user
    Detail::create([
      'key' => 'full_name',
      'value' => $fullName,
      'user_id' => $user->id,
    ]);

    Detail::create([
      'key' => 'middle_initial',
      'value' => $middleInitial,
      'user_id' => $user->id,
    ]);

    Detail::create([
      'key' => 'gender',
      'value' => $gender,
      'user_id' => $user->id,
    ]);

    if ($user->photo) {
      Detail::create([
        'key' => 'avatar',
        'value' => $user->photo,
        'user_id' => $user->id,
      ]);
    }
  }
}
