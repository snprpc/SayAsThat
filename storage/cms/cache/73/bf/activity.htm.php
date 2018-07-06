<?php 
class Cms5b3f0acaaf4dc054202071_ed67b71e3fe6a170fbbe37110f43e598Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->activity) {
        $this->page->title = $this->activity->activity_title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
