<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->DosenModel = new DosenModel();
    }
    public function index()
    {
        $data = [
            'guru' => $this->DosenModel->allData(),
        ];
        return view('v_dosen', $data);
    }
    public function detail($id_guru)
    {
        $data = [
            'guru' => $this->DosenModel->detailData($id_guru),
        ];
        return view('v_dosen', $data);
    }
}
