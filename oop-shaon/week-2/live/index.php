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
    // public function publish()
    // {
    //     echo "Published";
    // }

    // public function edit () {
    //     echo "Edited";
    // }
}

trait editAble {
    public function edit () {
        echo "Edited";
    }
}

trait publishAble {
    public function publish () {
        echo "Published";
    }
}

// single responsibility principle violation
class BlogPost extends Content
{
    use editAble, publishAble;
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

    public function getContent (FormatterInterface $formatter) { // Dependency Inversion Principle
        return $formatter->getContent($this->content);
    }
}

// class ContentFormatter {
//     public function getContent (string $content , string $type = 'html') {
    
//         if ($type === 'html') {
//               return "<p>{$content}</p>";
//         }
//         else if ($type === 'json') {
//             return json_encode(['content' => $content]);
//         }
       
//       }
// }



// open close principle
// open for extension but closed for modification
interface FormatterInterface {
    public function getContent(string $content);
}
class HtmlFormatter implements FormatterInterface {
    public function getContent(string $content) {
        return "<p>{$content}</p>";
    }
}
class JsonFormatter implements FormatterInterface {
    public function getContent(string $content) {
        return json_encode(['content' => $content]);
    }
}

class MarkDownFormatter implements FormatterInterface {
    public function getContent(string $content) {
        return "<p>{$content}</p>";
    }
}


class Comment extends Content
{
    use editAble, publishAble;

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
        $content->publish();
    }
}

$fahim = new User("fahim", "fahim@gmail.com", "123");
(new CMS())->editContent(new EmailContent($fahim, "content", "subject")); // voilation of Liskov Substitution Principle