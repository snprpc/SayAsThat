<?php 
class Cms5b3cd7676bbb9627111620_49975a07f86ae9c9e6d5117065cc4f49Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
