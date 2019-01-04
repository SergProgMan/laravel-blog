<?php 
class Cms5c2e47fba085f431823256_a3c33d63138007a436a6bac5503fe094Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
