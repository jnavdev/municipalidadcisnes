<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Models\User;
use App\Models\Permission;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('admin.front.users.index');
    }

    public function getData()
    {
        $users = $this->userRepository->paginateUsers();

        return Datatables::of($users)
            ->addColumn('edit', function ($user) {
                return '<a class="btn btn-sm btn-primary" href="/admin/users/' . $user->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($user) {
                return '<button data-id="'.$user->id.'" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->addColumn('created_at', function ($user) {
                return date('d-m-Y', strtotime($user->created_at));
            })->rawColumns(['edit', 'destroy'])->make(true);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.front.users.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $this->userRepository->storeUser(
            new User,
            $request->name,
            $request->email,
            $request->password,
            $request->permissions
        );

        return redirect()->route('users.index')->with('message', 'Usuario registrado exitosamente!');
    }

    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        $permissions = Permission::all();
        return view('admin.front.users.edit', compact('user', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'min:6|confirmed'
        ]);

        $user = $this->userRepository->find($id);

        $this->userRepository->updateUser(
            $user,
            $request->name,
            $request->email,
            $request->password,
            $request->permissions
        );

        return redirect()->route('users.index')->with('message', 'Usuario actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->userRepository->destroyUser($id);
        return redirect()->route('users.index')->with('message', 'Usuario eliminado exitosamente!');
    }
}
