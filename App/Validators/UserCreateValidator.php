<?php

namespace App\Validators;

class UserCreateValidator extends BaseValidator {

    public static function validate($data)
    {
        if (!$data) return 'Please provide valid data';
        if (!isset($data->first_name) || !strlen($data->first_name)) return 'Please provide a valid first name';
        if (!isset($data->last_name) || !strlen($data->last_name)) return 'Please provide a valid last name';
        if (!isset($data->email) || !strlen($data->email) || !filter_var($data->email, FILTER_VALIDATE_EMAIL)) return 'Please provide a valid email';
        if (!isset($data->role) || !strlen($data->role) || !in_array($data->role, ['employee', 'supervisor'])) return 'Please provide a valid role';
        
        return true;
    }
}