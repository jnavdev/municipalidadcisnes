<?php

namespace App\Repositories;

use App\Models\Information;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class InformationRepository
{
    public function getModel()
    {
        return new Information();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateInformations()
    {
        return $this->getModel()->orderBy('poster_order', 'DESC')->orderBy('id', 'DESC')->select(['id', 'image', 'title', 'url', 'is_poster', 'poster_order']);
    }

    public function storeInformation(Information $information, $image, $title, $url)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/informations/' . $fileName;
        Image::make($file)->save($path, 85);

        $information->image = $fileName;
        $information->title = $title;
        if ($url) {
            $information->url = $url;
        } else {
            $information->url = null;
        }
        $information->slug = Str::slug($title);
        $information->save();

        return $information;
    }

    public function updateInformation(Information $information, $image, $title, $url)
    {
        $information->title = $title;
        if ($url) {
            $information->url = $url;
        } else {
            $information->url = null;
        }
        $information->slug = Str::slug($title);
        $information->save();

        if ($image) {
            $this->deleteImage($information->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/informations/' . $fileName;
            Image::make($file)->save($path, 85);

            $information->image = $fileName;
        }

        $information->save();

        return $information;
    }

    public function destroyInformation($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/informations/' . $imageName);
    }
}
