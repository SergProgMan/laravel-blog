<?php 
class Cms5c2dd9de0f334078482577_1c1b1bb22746b9c92ebcbe6ff6456841Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
