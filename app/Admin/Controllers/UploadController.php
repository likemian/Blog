<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->file('editormd-image-file')) {
            $save_src = $request->file('editormd-image-file')->store('article' . '/' . date('Y-m-d'), 'admin');

            if ($save_src) {
                $save_src = 'upload/' . $save_src;
                $result   = array(
                    'success' => 1,
                    'message' => '上传成功',
                    'url'     => asset($save_src)
                );
            } else {
                $result = array(
                    'success' => 0,
                    'message' => '上传失败'
                );
            }
        }

        return json_encode($result);
    }
}