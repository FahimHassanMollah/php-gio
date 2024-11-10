<?php
declare(strict_types=1);


final class BlogPostStatus {
    public const PUBLISHED = 'published';
    public const DRAFT = 'draft';
    public const PENDING = 'pending';
}

enum BlogPostStatusEnums : int {
    case PUBLISHED = 1;
    case DRAFT = 2;
    case PENDING = 3;
}
class BlogPost {
    private BlogPostStatusEnums $status;

    public function setStatus(BlogPostStatusEnums $status): void {
        $this->status = $status;
    }

    public function getStatus(): BlogPostStatusEnums {
        return $this->status;
    }
}

$post = new BlogPost();
$post->setStatus(BlogPostStatusEnums::PUBLISHED);

if ($post->getStatus() === BlogPostStatusEnums::PUBLISHED) {
    echo 'The post is published.';
} else {
    echo 'The post is not published.';
}
