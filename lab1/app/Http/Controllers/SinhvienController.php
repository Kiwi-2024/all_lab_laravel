<?php

namespace App\Http\Controllers;

use App\Http\Controllers\listStudentController;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    protected $listStudentController;
    public function __construct(
        listStudentController $listStudentController
    ) {
        $this->listStudentController = $listStudentController;
    }
    public function thongtinsv(int $id)
    {
        $data = $this->listStudentController->listsv();
        foreach ($data as $key => $value) {
            if ($value['id'] == $id) {
                $data = $value;
                break;
            }
        }
        return view('thongtinsv', ['data' => $data]);
    }
    public function listsv()
    {
        $data = $this->listStudentController->listsv();
        return view('listsv', ['data' => $data]);
    }
}
