<?php
namespace App\Services;

use App\Import\UserImport;
use App\Models\User;
use Bpjs\Framework\Helpers\Hash;
use Bpjs\Framework\Helpers\Validator;

class UserService
{
    public function create(array $data)
    {
        Validator::make($data, [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->username = $data['username'];
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->role = $data['role'] ?? 'user';
        $user->save();

        return [
            'status' => true,
            'statusCode' => 201,
            'message' => 'success create user',
            'data' => $user->toArray()
        ];
    }

    public function import(array $data)
    {
        if (!$data['file']) {
            return [
                'status' => false, 
                'statusCode' => 500,
                'message' => 'File tidak ada'
            ];
        }
        $validateType = $data['file'];
        $allowedTypes = ['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel'];
        if($data['file'] && !in_array($validateType,$allowedTypes)){
            $errors = ['file' => ['File must be a valid excel file']];
        }
        if(!empty($errors)){
            return [
                'status' => false,
                'statusCode' => 500,
                'message' => $errors
            ];
        }
        $path = storage_path('user/');
        if (!is_dir($path)) mkdir($path, 0777, true);
        $file = $data['file'];
        $filename = uniqid('import_user_') . '.' . $data['file'];
        $filePath = $path . $filename;
        store($file['tmp_name'],$path, $filename);

        $import = new UserImport($filePath,[
            'hasHeader' => true,
            'sheetName' => 'Sheet1'
        ]);
        $results = $import->import();
        return [
            'status' => true,
            'statusCode' => 201,
            'message' => 'Import selesai',
            'results' => $results,
        ];
    }

    public function update(array $data, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $data['name'];
        if($data['password']){
            $user->password = $data['password'];
        }
        $user->role = $data['role'];
        $user->save();
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'success update user',
            'data' => $user->toArray()
        ];
    }

    public function destroy($id)
    {
        $user = User::deleteWhere(['id'=>$id]);
        if($user){
            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'success delete user'
            ];
        }
    }
}
