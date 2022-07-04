<?php

class PostLoader
{
    public function savePost(Post $post): void
    {
        $postData=[];
        $postData['title']=$post->getTitle();
        $postData['content']=$post->getContent();
        $postData['authorName']=$post->getAuthorName();
        $postData['date']=$post->getDate();

        if (!empty(file_get_contents((string)['post.txt']))) {
            $postDataDecoded = json_decode(file_get_contents('post.txt'), true, 512, JSON_THROW_ON_ERROR);
        }

        $postDataDecoded[]=$postData;

        $dataEncoded = json_encode($postDataDecoded);

        file_put_contents('post.txt',$dataEncoded);
    }

    public function getPosts()
    {
        $review = json_decode(file_get_contents('post.txt'));
        return $review;
    }
}