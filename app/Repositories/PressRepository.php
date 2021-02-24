<?php

namespace App\Repositories;

use App\Models\Press;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PressRepository
{
    public function getModel()
    {
        return new Press();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginatePresses()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->select(['id', 'date', 'image']);
    }

    public function storePress(Press $press, $date, $image)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/presses/' . $fileName;
        Image::make($file)->save($path, 100);

        $press->date = $date;
        $press->image = $fileName;
        $press->save();

        return $press;
    }

    public function updatePress(Press $press, $date, $image)
    {
        if ($image) {
            $this->deleteImage($press->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/presses/' . $fileName;
            Image::make($file)->save($path, 100);

            $press->image = $fileName;
        }

        $press->date = $date;
        $press->save();

        return $press;
    }

    public function destroyPress($id)
    {
        $press = $this->find($id);
        $this->deleteImage($press->image);
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/presses/' . $imageName);
    }
}
