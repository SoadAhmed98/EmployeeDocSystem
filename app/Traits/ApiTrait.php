<?php

namespace App\Traits;

trait ApiTrait {
    public function SuccessMessage(string $message = "",int $code = 200)
    {
        return response()->json(
            [
                'success'=>true,
                'message'=>$message,
                'errors'=>(object)[],
                'data'=>(object)[],
            ],
            $code
        );
    }

    public function ErrorMessage(Array $errors , string $message = "",int $code = 422)
    {
        return response()->json(
            [
                'success'=>false,
                'message'=>$message,
                'errors'=> $errors,
                'data'=>(object)[],
            ],
            $code
        );
    }

    public function Data(Array $data,string $message = "",int $code = 200)
    {
        return response()->json(
            [
                'success'=>true,
                'message'=>$message,
                'errors'=>(object)[],
                'data'=>$data,
            ],
            $code
        );
    }
}