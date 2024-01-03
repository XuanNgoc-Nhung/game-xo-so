<?php

namespace App\Http\Controllers;

use App\loMotPhut;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function ketQuaLoMotPhut(Request $request){

        $req = $request->all();
        $last_result = loMotPhut::orderBy('id','DESC')->first();
        $list = loMotPhut::orderBy('id', 'DESC')->where('id','<',$last_result->id);
        if (isset($req['key'])) {
            $list = $list->where('id', $req['key']);
        }
        $total = $list->count();
        $data = $list->orderBy('id', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        if (count($data)) {
            $res = [
                'rc' => '0',
                'data' => $data,
                'total' => $total,
                'last_result'=>$last_result
            ];
        } else {
            $res = [
                'rc' => '1',
                'rd' => 'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
}
