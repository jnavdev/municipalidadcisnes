<?php

namespace App\Repositories;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as InterventionImage;

class AlbumRepository
{
    public function getModel()
    {
        return new Album();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateAlbums()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->select(['id', 'name']);
    }

    public function storeAlbum($name, $images)
    {
        $album = Album::create([
            'name' => $name,
            'slug' => Str::slug($name)
        ]);

        foreach ($images as $image) {
            $fileName = time() . '-' . $image->getClientOriginalName();
            $path = public_path() . '/uploads/images/' . $fileName;
            InterventionImage::make($image)->fit(770, 525)->save($path, 90);

            Image::create([
                'name' => $fileName,
                'album_id' => $album->id
            ]);
        }

        return $album;
    }

    public function destroyAlbum($id)
    {
        $album = $this->getModel()->findOrFail($id);
        $this->deleteImages($album);
        $album->delete();
    }

    public function deleteImages(Album $album)
    {
        foreach ($album->images as $image) {
            File::delete(public_path() . '/uploads/images/' . $image->name);
        }

        return $album;
    }
}
