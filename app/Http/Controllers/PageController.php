<?php

namespace App\Http\Controllers;

use app\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage($id) {
        return Page::find($id);
    }

    public function alterPage($id, $title, $subtitle, $template) {
        $page = Page::find($id);
        $page->title = $title;
        $page->subtitle = $subtitle;
        $page->template = $template;
        return $page->save();
    }

    public function deletePage($id) {
        return Page::destroy($id);
    }

    public function createPage($title, $subtitle, $template) {
        return Page::create([
            'title' => $title,
            'subtitle' => $subtitle,
            'template' => $template
        ]);
    }
}
