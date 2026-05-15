<?php

namespace App\Services;
use App\Models\Workspace;
use Bpjs\Framework\Helpers\Validator;

class WorkspaceService
{
    // Service logic here
    private function sessionUser()
    {
        return auth()->user();
    }
    public function getWorkspace(array $data)
    {
        $workspace = Workspace::query()->where('owner_id','=',$this->sessionUser()->id)->paginate(9);
        if(!$workspace){
            return [
                'status' => false,
                'statusCode' => 404,
                'message' => 'Workspace Not Found'
            ];
        }
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'Workspace fetched',
            'data' => $workspace
        ];
    }

    public function create(array $data)
    {
        $workspace = Workspace::create([
            'name' => $data['workspace'],
            'owner_id' => $this->sessionUser()->id
        ]);
        if($workspace){
            return [
                'status' => true,
                'statusCode' => 201,
                'message' => 'Workspace success created',
                'data' => $workspace->toArray()
            ];
        }
    }

    public function update(array $data, $id)
    {
        $workspace = Workspace::find($id);
        $workspace->name = $data['workspace'];
        $workspace->save();
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'Workspace success updated',
            'data' => $workspace->toArray()
        ];
    }

    public function destroy($id)
    {
        $workspace = Workspace::deleteWhere(['id'=>$id]);
        if($workspace){
            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'Workspace success deleted',
            ];
        }
    }
}
