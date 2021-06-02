<?php

namespace App\Http\Controllers;

use app\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function getPageContent($id) {
        return PageContent::find($id);
    }

    public function alterPageContent($id, $text1, $text2, $img_url1, $img_url2, $banner_text, $banner_img_url) {
        $content = PageContent::find($id);
        $content->text1 = $text1;
        $content->text2 = $text2;
        $content->img_url1 = $img_url1;
        $content->img_url2 = $img_url2;
        $content->banner_text = $banner_text;
        $content->banner_img_url = $banner_img_url;
        return $content->save();
    }

    public function createPageContent($page_id, $text1, $text2, $img_url1, $img_url2, $banner_text, $banner_img_url) {
        return PageContent::create([
            'page_id' => $page_id,
            'text1' => $text1,
            'text2' => $text2,
            'img_url1' => $img_url1,
            'img_url2' => $img_url2,
            'banner_text' => $banner_text,
            'banner_img_url' => $banner_img_url
        ]);
    }
}
