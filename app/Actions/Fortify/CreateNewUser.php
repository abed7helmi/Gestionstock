<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *|^[A-Z]{3}[0-9]{5}$
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'statut' => ['string'],
            'prenom' => ['required', 'string', 'max:255'],
            'cp' => [ 'required',
                'string',
                'min:8','max:9',
                'regex:/^[0-9]{7}[A-Z]{1}$/',
                Rule::unique(User::class),

            
        ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'prenom'=>$input['prenom'],
            'email' => $input['email'],
            'cp' =>$input['cp'],
            'statut'=>$input['statut'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
