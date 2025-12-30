<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Credential extends Model
{
    protected $fillable = [
        'url',
        'username',
        'password_encrypted',
        'server_name',
    ];

    protected $hidden = [
        'password_encrypted',
    ];

    // Accessor: get decrypted password when accessing password attribute
    public function getPasswordAttribute(): string
    {
        if (empty($this->password_encrypted)) {
            return '';
        }
        try {
            return Crypt::decryptString($this->password_encrypted);
        } catch (\Throwable $e) {
            return '';
        }
    }

    // Mutator: set and encrypt password when assigning password
    public function setPasswordAttribute(string $value): void
    {
        $this->attributes['password_encrypted'] = Crypt::encryptString($value);
    }
}
