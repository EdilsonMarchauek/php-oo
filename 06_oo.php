<?php

class Category
{
    public $name;
}

class Post
{
    public $title;
    public $content;
    public $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory() : Category
    {
        return $this->category;
    }
}

$php = new Category;
$php->name = 'PHP';

$post01 = new Post;
$post01->title = 'PHP é legal';
$post01->content = '...';
//$post01->category = $php; // Faz a associação do post com a categoria.
//echo $post01->category->name;
$post01->setCategory($php);
$category= $post01->getCategory();
echo $category->name;