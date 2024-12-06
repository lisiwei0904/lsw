<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class FileController extends Controller
{
    public function download($id)
    {
        // 根据 ID 获取上传记录
        $upload = Upload::find($id);

        // 如果记录不存在，返回 404 错误
        if (!$upload) {
            abort(404, 'File record not found.');
        }

        // 获取公开路径
        $publicPath = public_path('storage/' . $upload->path);

        // 检查文件是否存在
        if (!file_exists($publicPath)) {
            abort(404, 'File not found.');
        }

        // 返回文件下载响应
        return response()->download($publicPath);
    }
}
