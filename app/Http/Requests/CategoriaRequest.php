<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class CategoriaRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function validar(Request $request)
    {
        $v = \Validator::make($request->all(), [
            'titulo' => 'required',
        ]);

        if ($v->fails())
        {
            return response()->json(['errors'=>array(['code'=>422,'message'=> $v->errors()->all()])],422);
        }
    }
}
