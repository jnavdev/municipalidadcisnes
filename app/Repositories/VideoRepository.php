<?php

namespace App\Repositories;

use App\Models\Video;

class VideoRepository
{
    public function getModel()
    {
        return new Video();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateVideos()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->select(['id', 'url', 'title', 'active']);
    }

    public function storeVideo(Video $video, $url, $title, $active)
    {
        $video->url = $url;
        $video->title = $title;
        $video->active = $active;
        $video->save();

        return $video;
    }

    public function updateVideo(Video $video, $url, $title, $active)
    {
        $video->url = $url;
        $video->title = $title;
        $video->active = $active;
        $video->save();

        return $video;
    }

    public function destroyVideo($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }
}
