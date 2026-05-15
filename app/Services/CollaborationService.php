<?php

namespace App\Services;
use App\Models\TodoAttachment;
use App\Models\TodoComments;
use Bpjs\Framework\Helpers\Validator;

class CollaborationService
{
    // Service logic here
    private function sessionUser()
    {
        return auth()->user();
    }

    public function getComments()
    {
        $comment = TodoComments::query()->paginate(9);
        if($comment){
            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'Comments fetched',
                'data' => $comment
            ];
        }
    }

    public function createComments(array $data)
    {
        $comments = TodoComments::create([
            'todo_id' => $data['todo_id'],
            'user_id' => $this->sessionUser()->id,
            'comment' => $data['comment'],
        ]);
        if($comments){
            return [
                'status' => true,
                'statusCode' => 201,
                'message' => 'Comments created',
                'data' => $comments->toArray()
            ];
        }
    }

    public function updateComments(array $data, $id)
    {
        $comments = TodoComments::findOrFail($id);
        $comments->comment = $data['comment'];
        $comments->save();
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'Comments updated',
            'data' => $comments->toArray()
        ];
    }

    public function destroyComments($id)
    {
        $comment = TodoComments::deleteWhere(['id'=>$id]);
        return [
            'status' => true,
            'statusCode' => 200,
            'message' => 'Comments deleted',
        ];
    }

    public function getAttachment()
    {
        $attachment = TodoAttachment::query()->paginate(9);
        if($attachment){
            return [
                'status' => true,
                'statusCode' => 200,
                'message' => 'attachment fetched',
                'data' => $attachment
            ];
        }
    }

    public function createAttachment(array $data)
    {
        $attachment = TodoAttachment::create([
            'todo_id' => $data['todo_id'],
            'filename' => $data['file']['filename'],
            'path' => $data['file']['path'],
            'mime' => $data['file']['mime'],
            'size' => $data['file']['size'],
            'uploaded_by' => $this->sessionUser()->username
        ]);
        if($attachment){
            return [
                'status' => true,
                'statusCode' => 201,
                'message' => 'Attachment created',
                'data' => $attachment->toArray()
            ];
        }
    }

    public function updateAttachment(array $data, $id)
    {

    }

    public function destroyAttachment($id)
    {

    }

    
}
