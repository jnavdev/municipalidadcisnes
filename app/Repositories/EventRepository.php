<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class EventRepository
{
    public function getModel()
    {
        return new Event();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateEvents()
    {
        return $this->getModel()->select(['id', 'image', 'title', 'date']);
    }

    public function storeEvent(Event $event, $image, $title, $date)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/events/' . $fileName;
        Image::make($file)->fit(770, 525)->save($path, 85);

        $event->image = $fileName;
        $event->title = $title;
        $event->date = $date;
        $event->slug = Str::slug($title);
        $event->save();

        return $event;
    }

    public function updateEvent(Event $event, $image, $title, $date)
    {
        $event->title = $title;
        $event->date = $date;
        $event->slug = Str::slug($title);
        $event->save();

        if ($image) {
            $this->deleteImage($event->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/events/' . $fileName;
            Image::make($file)->fit(770, 525)->save($path, 85);

            $event->image = $fileName;
        }

        $event->save();

        return $event;
    }

    public function destroyEvent($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/events/' . $imageName);
    }
}
