<?php

namespace App\Import;

use App\Models\User;
use Bpjs\Framework\Helpers\Hash;
use Bpjs\Framework\Helpers\Importer;

class UserImport extends Importer
{
    // Import logic here
    public function handle(array $mappedRow, int $index): mixed
    {
        $user = User::query()->where('username','=',$mappedRow['username'])->first();
        if ($user) {
            return [
                'row' => $index + 1,
                'status' => 'skipped',
                'username' => $mappedRow['username'] ?? null,
                'message' => 'username sudah ada.'
            ];
        }
        User::create([
            'username' => $mappedRow['username'],
            'name' => $mappedRow['name'],
            'password' => Hash::make($mappedRow['password']),
            'role' => $mappedRow['role'],
            'is_active' => 1
        ]);

        return [
            'row' => $index + 1,
            'status' => 'success',
            'username' => $mappedRow['username'] ?? null,
            'message' => 'Berhasil import user.'
        ];
    }
}
