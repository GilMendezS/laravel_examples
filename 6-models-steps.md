* First how to create a model
* how to configure basic attributes in model
* get all records : Model::all();
```php
    >>> $post = Post::all();
```
* create a new post 
```php
    >>> $new_post = new Post();
    => App\Post {#2919}
    >>> $new_post->title = 'first post';
    => "first post"
    >>> $new_post->body = 'here you will type the body';
    => "here you will type the body"
    >>> $new_post->save();
    => true
    >>> 
```

* find a post
```php
    >>> $second = Post::find(2)
    => App\Post {#2934
        id: 2,
        title: "second post",
        body: "second body",
        created_at: "2019-01-04 19:24:28",
        updated_at: "2019-01-04 19:24:28",
    }
    >>> 
```

* udpate a post
```php
    >>> $second->title = 'updated title';
=> "updated title"
>>> $second->update();
=> true
    >>> $second
    => App\Post {#2934
        id: 2,
        title: "updated title",
        body: "second body",
        created_at: "2019-01-04 19:24:28",
        updated_at: "2019-01-04 19:26:34",
    }
    >>> 
    or 
    >>> $second->update(['title' => 'title updated again'])
    => true
    >>> $second
    => App\Post {#2934
        id: 2,
        title: "title updated again",
        body: "second body",
        created_at: "2019-01-04 19:24:28",
        updated_at: "2019-01-04 19:27:10",
    }
    >>> 
```
    * remove a post
    ```php
        $second->post();
    ```


```