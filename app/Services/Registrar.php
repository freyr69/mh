<?php

namespace Mistress\Services;

use Mistress\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        if (!array_key_exists('submissive', $data)) {
            $data['submissive'] = 'off';
        }

        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'submissive' => (strtolower($data['submissive']) === 'on') ? 1 : 0,
                    'password' => bcrypt($data['password']),
        ]);
    }

}
