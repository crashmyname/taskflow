<?php

namespace App\Services;
use App\Models\Projects;
use Bpjs\Framework\Helpers\Validator;

class ProjectService
{
    // Service logic here
    public function create(array $data)
    {
        $project = Projects::create([
            'workspace_id' => $data['workspace_id'],
            'name' => $data['project'],
            'description' => $data['description'],
            'color' => $data['color'],
            'status' => $data['status'],
            'created_by' => $data['username']
        ]);
        if($project){
            return [
                'status' => true,
                'statusCode' => 201,
                'message' => 'success create project',
                'data' => $project->toArray()
            ];
        }
    }

    public function update(array $data, $id)
    {
        $project = Projects::findOrFail($id);
        if($project){
            $project->workspace_id = $data['workspace_id'];
            $project->name = $data['project'];
            $project->description = $data['description'];
            $project->color = $data['color'];
            $project->status = $data['status'];
            $project->save();

            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'success update project',
                'data' => $project->toArray()
            ];
        }
    }

    public function destroy($id)
    {
        $project = Projects::deleteWhere(['id'=>$id]);
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'success delete project'
        ];
    }
}
