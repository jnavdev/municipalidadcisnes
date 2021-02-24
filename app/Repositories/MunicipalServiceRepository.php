<?php

namespace App\Repositories;

use App\Models\MunicipalService;
use App\Models\MunicipalServiceImage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class MunicipalServiceRepository
{
    public function getModel()
    {
        return new MunicipalService();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateMunicipalServices()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->select(['id', 'image', 'title', 'body']);
    }

    public function storeMunicipalService(MunicipalService $municipalService, $image, $title, $body, $images, $text, $url)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/municipalservices/' . $fileName;
        Image::make($file)->fit(789, 591)->save($path, 85);

        $municipalService->image = $fileName;
        $municipalService->title = $title;
        $municipalService->body = $body;
        $municipalService->slug = Str::slug($title);
        $municipalService->text = $text;
        $municipalService->url = $url;
        $municipalService->save();

        $this->uploadMultipleImages($municipalService, $images);

        return $municipalService;
    }

    public function updateMunicipalService(MunicipalService $municipalService, $image, $title, $body, $text, $url)
    {
        $municipalService->title = $title;
        $municipalService->slug = Str::slug($title);
        $municipalService->body = $body;
        $municipalService->text = $text;
        $municipalService->url = $url;
        $municipalService->save();

        if ($image) {
            $this->deleteImage($municipalService->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/municipalservices/' . $fileName;
            Image::make($file)->fit(789, 591)->save($path, 85);

            $municipalService->image = $fileName;
        }

        $municipalService->save();

        return $municipalService;
    }

    public function destroyMunicipalService($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/municipalservices/' . $imageName);
    }

    public function uploadMultipleImages(MunicipalService $municipalService, $images)
    {
        foreach ($images as $image) {
            $fileName = time() . '-' . $image->getClientOriginalName();
            $path = public_path() . '/uploads/municipalservices/' . $fileName;
            Image::make($image)->fit(789, 591)->save($path, 85);

            MunicipalServiceImage::create([
                'image' => $fileName,
                'municipal_service_id' => $municipalService->id
            ]);
        }
    }

    public function deleteMunicipalServiceImage($id)
    {
        $municipalServiceImage = MunicipalServiceImage::findOrFail($id);
        $municipalService = MunicipalService::findOrFail($municipalServiceImage->municipal_service_id);

        if ($municipalService->images->count() > 1) {
            File::delete(public_path() . '/uploads/municipalservices/' . $articleImage->image);
            $articleImage->delete();
            return 'Imágen eliminada exitosamente!';
        } else {
            return 'El servicio municipal debe tener al menos 1 imágen!';
        }
    }
}
