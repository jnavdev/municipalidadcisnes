<?php

namespace App\Repositories;

use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\ArticleAudio;
use App\Models\ArticleVideo;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ArticleRepository
{
    public function getModel()
    {
        return new Article();
    }

    public function find($id)
    {
        return $this->getModel()->findOrFail($id);
    }

    public function paginateArticles()
    {
        return $this->getModel()->orderBy('created_at', 'DESC')->select(['id', 'image', 'title', 'body', 'on_slider']);
    }

    public function storeArticle(Article $article, $image, $title, $subtitle, $body, $on_slider, $images, $audios, $videos)
    {
        $file = $image;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $path = public_path() . '/uploads/articles/' . $fileName;
        Image::make($file)->fit(770, 525)->save($path, 85);

        $article->image = $fileName;
        $article->title = $title;
        $article->subtitle = $subtitle;
        $article->body = $body;
        $article->on_slider = $on_slider;
        $article->slug = Str::slug($title);
        $article->save();

        $this->uploadMultipleImages($article, $images);
        $this->uploadMultipleAudios($article, $audios);
        $this->uploadMultipleVideos($article, $videos);

        return $article;
    }

    public function updateArticle(Article $article, $image, $title, $subtitle, $body, $on_slider)
    {
        $article->title = $title;
        $article->subtitle = $subtitle;
        $article->body = $body;
        $article->on_slider = $on_slider;
        $article->slug = Str::slug($title);
        $article->save();

        if ($image) {
            $this->deleteImage($article->image);

            $file = $image;
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/articles/' . $fileName;
            Image::make($file)->fit(770, 525)->save($path, 85);

            $article->image = $fileName;
        }

        $article->save();

        return $article;
    }

    public function destroyArticle($id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    public function deleteImage($imageName)
    {
        return File::delete(public_path() . '/uploads/articles/' . $imageName);
    }

    public function uploadMultipleImages(Article $article, $images)
    {
        foreach ($images as $image) {
            $fileName = time() . '-' . $image->getClientOriginalName();
            $path = public_path() . '/uploads/articles/' . $fileName;
            Image::make($image)->fit(770, 525)->save($path, 85);

            ArticleImage::create([
                'image' => $fileName,
                'article_id' => $article->id
            ]);
        }
    }

    public function uploadMultipleAudios(Article $article, $audios)
    {
        if ($audios) {
            for ($i = 0; $i < count($audios); $i ++) {
                ArticleAudio::create([
                    'url' => $audios[$i],
                    'article_id' => $article->id
                ]);
            }
        }
    }

    public function uploadMultipleVideos(Article $article, $videos)
    {
        if ($videos) {
            for ($i = 0; $i < count($videos); $i ++) {
                $url = str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $videos[$i]);
                ArticleVideo::create([
                    'url' => $url,
                    'article_id' => $article->id
                ]);
            }
        }
    }

    public function deleteArticleImage($id)
    {
        $articleImage = ArticleImage::findOrFail($id);
        $article = Article::findOrFail($articleImage->article_id);

        if ($article->images->count() > 1) {
            File::delete(public_path() . '/uploads/articles/' . $articleImage->image);
            $articleImage->delete();
            return 'Imágen eliminada exitosamente!';
        } else {
            return 'La noticia debe tener al menos 1 imágen!';
        }
    }

    public function deleteArticleAudio($id)
    {
        $articleAudio = ArticleAudio::findOrFail($id);
        $articleAudio->delete();
        return 'Audio eliminado exitosamente!';
    }

    public function deleteArticleVideo($id)
    {
        $articleVideo = ArticleVideo::findOrFail($id);
        $articleVideo->delete();
        return 'Video eliminado exitosamente!';
    }
}
