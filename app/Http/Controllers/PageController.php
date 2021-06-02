<?php

namespace App\Http\Controllers;

use app\Page;
use app\PageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage($id) {
        return Page::find($id);
    }

    public function alterPage($id, $title, $subtitle, $url, $template) {
        $page = Page::find($id);
        $page->title = $title;
        $page->subtitle = $subtitle;
        $page->url = $url;
        $page->template = $template;
        return $page->save();
    }

    public function deletePage($id) {
        return Page::destroy($id) && PageContent::where('page_id', '=', $id)->delete();
    }

    public function createPage($title, $subtitle, $url, $template) {
        return Page::create([
            'title' => $title,
            'subtitle' => $subtitle,
            'url' => $url,
            'template' => $template
        ]);
    }
}
