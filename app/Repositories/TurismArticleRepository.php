<?php

namespace App\Repositories;

use App\Models\TurismArticle;
use App\Models\TurismArticleImage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class TurismArticleRepository
{
    public function getModel()
    {
        return new TurismArticle();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateTurismArticles()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->get();
    }

    public function storeTurismArticle(TurismArticle $turismArticle, $image, $title, $body, $images)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/turismarticles/' . $fileName;
        Image::make($file)->fit(770, 525)->save($path, 85);

        $turismArticle->image = $fileName;
        $turismArticle->title = $title;
        $turismArticle->body = $body;
        $turismArticle->slug = Str::slug($title);
        $turismArticle->save();

        $this->uploadMultipleImages($turismArticle, $images);

        return $turismArticle;
    }

    public function updateTurismArticle(TurismArticle $turismArticle, $image, $title, $body)
    {
        $turismArticle->title = $title;
        $turismArticle->body = $body;
        $turismArticle->slug = Str::slug($title);
        $turismArticle->save();

        if ($image) {
            $this->deleteImage($turismArticle->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/turismarticles/' . $fileName;
            Image::make($file)->fit(770, 525)->save($path, 85);

            $turismArticle->image = $fileName;
        }

        $turismArticle->save();

        return $turismArticle;
    }

    public function destroyTurismArticle($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/turismarticles/' . $imageName);
    }

    public function uploadMultipleImages(TurismArticle $turismArticle, $images)
    {
        foreach ($images as $image) {
            $fileName = time() . '-' . $image->getClientOriginalName();
            $path = public_path() . '/uploads/turismarticles/' . $fileName;
            Image::make($image)->fit(770, 525)->save($path, 85);

            TurismArticleImage::create([
                'image' => $fileName,
                'turism_article_id' => $turismArticle->id
            ]);
        }
    }

    public function deleteTurismArticleImage($id)
    {
        $turismArticleImage = TurismArticleImage::findOrFail($id);
        $turismArticle = TurismArticle::findOrFail($turismArticleImage->turism_article_id);

        if ($turismArticle->images->count() > 1) {
            File::delete(public_path() . '/uploads/turismarticles/' . $turismArticleImage->image);
            $turismArticleImage->delete();
            return 'Imágen eliminada exitosamente!';
        } else {
            return 'El registro debe tener al menos 1 imágen!';
        }
    }
}
