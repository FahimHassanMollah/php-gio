<?php

declare(strict_types=1);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'user.php';


class Content
{
    public User $author; // composition 
    public string $content;

    public function __construct(User $author, $content)
    {
        $this->author = $author;
        $this->content = $content;
    }
    public function publish()
    {
        echo "Published";
    }

    // public function edit () {
    //     echo "Edited";
    // }
}

trait editAble {
    public function edit () {
        echo "Edited";
    }
}

class BlogPost extends Content
{
    use editAble;
    //  abstraction
    public string $title;

    public function __construct($author, $content, $title)
    {
        $this->author = $author;
        $this->content = $content;
        $this->title = $title;
    }
    public function edit () {
       echo "Edited";
    }
}


class Comment extends Content
{
    use editAble;

    public function __construct($author, $content)
    {
        $this->author = $author;
        $this->content = $content;
    }
    public function edit () {
        echo "Edited";
     }
}


class EmailContent extends Content
{

    public string $subject;

    public function __construct($author, $content, $subject)
    {
        $this->author = $author;
        $this->content = $content;
        $this->subject = $subject;
    }
    public function publish()
    {
        echo "custom publish";
    }
}


class CMS {
    public function editContent(Content $content) {
        $content->edit();
    }
}

$fahim = new User("fahim", "fahim@gmail.com", "123");
(new CMS())->editContent(new EmailContent($fahim, "content", "subject")); // voilation of Liskov Substitution Principle