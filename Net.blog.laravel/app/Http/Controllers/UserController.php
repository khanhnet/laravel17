<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Str;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    
    public function index()
    {

        return view('admin.users.list');
    }

    public function getListUser()
    {
        //Lấy tất cả các bài biết trong bảng posts và sắp xếp theo thứ tự giảm dần
        $users = User::orderBy('id', 'desc')->get();
        //dd($users);

        return Datatables::of($users)
        //thêm cột stt tự tăng
        ->addIndexColumn()
        //thêm cột chức năng với các nút thêm sửa xóa
        ->addColumn('action', function ($user) {
            return 
            '<button style="width: 30px; height: 30px" data-id="'.$user->id.'" data-url="'.route('users.edit',$user->id).'"​ class="btn btn-edit btn-xs btn-warning " ><i class="fa fa-pencil"></i></button>
            <button style="width: 30px; height: 30px" data-url="'.route('users.destroy',$user->id).'"​ class="btn btn-xs btn-danger btn-delete" ><i class="fa fa-trash"></i></button>
            ';
        })
        //thêm cột tiêu đề với giá trị là cột title trong bảng posts
        ->editColumn('name', function ($user) {
            return $user->name;
        })
        //thêm cột mô tả với giá trị là cột title trong bảng description
        ->editColumn('email', function ($user) {
            return $user->email;
        })
        //thêm cột hình ảnh với giá trị là cột title trong bảng thumbnail
        ->editColumn('thumbnail', function ($user) {
            return '<img src="' . $user->thumbnail . '" width="100px" height="100px">';
        })
        //những cột có các thẻ html thì thêm vào hàm rawColumns thì các thẻ html này mới hiển thị 
        ->rawColumns(['thumbnail','action'])
        ->make(true);
    }

    public function store(UserRequest $request)
    {
        $path = '';
        $date = date('YmdHis');
        if ($request->thumbnail) {
            $thumbnail = $request->thumbnail->getClientOriginalName();
            $path = $request->file('thumbnail')->storeAs('/images/user', $date . '_' . $thumbnail);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'thumbnail' => env('APP_URL').'storage/'.$path,
        ]);

        return response()->json(['user' => $user], 200);
    }
}
