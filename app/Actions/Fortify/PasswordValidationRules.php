<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        $pass = new Password;
     //   $pass->requireUppercase();
     //   $pass->requireNumeric();
     //   $pass->requireSpecialCharacter();

        return ['required', 'string',  $pass, 'confirmed'];
    }
}
