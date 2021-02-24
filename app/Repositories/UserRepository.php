<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getModel()
    {
        return new User();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateUsers()
    {
        return $this->getModel()->where('email', '<>', 'contacto@deltasoft.cl')->orderBy('created_at', 'DESC')->select(['id', 'name', 'email', 'created_at']);
    }

    public function storeUser(User $user, $name, $email, $password, $permissions)
    {
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        if ($permissions) {
            $user->permissions()->sync($permissions);
        } else {
            $user->permissions()->detach();
        }

        return $user;
    }

    public function updateUser(User $user, $name, $email, $password, $permissions)
    {
        $user->name = $name;
        $user->email = $email;
        if ($password) {
            $user->password = bcrypt($password);
        }
        $user->save();

        if ($permissions) {
            $user->permissions()->sync($permissions);
        } else {
            $user->permissions()->detach();
        }

        return $user;
    }

    public function destroyUser($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }
}
