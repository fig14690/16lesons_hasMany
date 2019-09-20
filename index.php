<?php
require_once 'vendor/autoload.php';
require_once 'db.config.php';

class User extends \Illuminate\Database\Eloquent\Model{
    public function posts(){
        return $this->hasMany(Post::class);
    }
};

class Post extends \Illuminate\Database\Eloquent\Model{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
};

class Category extends \Illuminate\Database\Eloquent\Model{
    public function posts(){
        return $this->hasMany(Post::class);
    }
};

class Tag extends \Illuminate\Database\Eloquent\Model{
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
};
// Вывод список постов от User
// $user = User::find(1);

// foreach ($user->posts as $use){
//     var_dump($use->title);
// }


// Вывод через Post
// $posts= Post::all();

// foreach ($posts as $post){
// echo "<pre>";
// var_dump($post->category->title);//категория поста
// var_dump($post->title); //название поста
// var_dump($post->user->name); //автор поста
// echo "</pre>";
// }

// foreach ($posts as $post){ 
//     foreach ($post->tags as $tag)
//     echo"<pre>";
//         var_dump($tag->title);//тэг поста
//     echo "</pre>";  
// }


// Вывод через Category
// $categorys=Category::find(3);
// foreach ($categorys->posts as $post){
//     var_dump($post->title);//название поста с тегом
// }


// Вывод через Tag
    // foreach (Tag::all() as $post){
    //     var_dump($post->title);//название тэга
    //     foreach ($post->posts as $po)
    //     echo"<pre>";
    //         var_dump($po->user->name);//автор статьи 
    //         var_dump($po->title);//название статьи
    //     echo"</pre>";
    // }
    // echo "<hr>";

?>
