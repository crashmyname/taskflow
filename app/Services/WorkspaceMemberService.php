<?php

namespace App\Services;
use App\Models\WorkspaceMembers;
use Bpjs\Framework\Helpers\Validator;

class WorkspaceMemberService
{
    // Service logic here
    private function sessionUser()
    {
        return auth()->user();
    }
    public function getMember()
    {

    }

    public function create(array $data)
    {
        $member = WorkspaceMembers::create([
            'workspace_id' => $data['workspace_id'],
            'user_id' => $this->sessionUser()->id,
            'role' => $data['role']
        ]);
        if($member){
            return [
                'status' => true,
                'statusCode' => 201,
                'message' => 'success create members',
                'data' => $member->toArray()
            ];
        }
    }

    public function update(array $data, $id)
    {
        $member = WorkspaceMembers::findOrFail($id);
        if($member){
            $member->workspace_id = $data['workspace_id'];
            $member->user_id = $data['user_id'];
            $member->role = $data['role'];
            $member->save();

            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'success update members',
                'data' => $member->toArray()
            ];
        }
    }

    public function destroy($id)
    {
        $member = WorkspaceMembers::deleteWhere(['id'=>$id]);
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'success delete members'
        ];
    }
}
