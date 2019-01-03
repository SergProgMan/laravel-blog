<?php 
class Cms5c2de3edc0016776019534_c71c7427c5ecd4a021961276ca9d06aeClass extends Cms\Classes\PageCode
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
