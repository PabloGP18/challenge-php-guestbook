<?php
declare(strict_types=1);
require 'models/Post.php';
require 'models/PostLoader.php';

$review=[];

if (isset($_POST['submit'])) {
    $postLoader = new PostLoader();

    $post = new Post ($_POST['title'], $_POST['content'], $_POST['authorName']);


    $postLoader->savePost($post);

    $review = $postLoader->getPosts();
}

require 'view/header.php';
require 'view/footer.php';
require 'view/body.php';

?>

<section>
    <h2>Reviews</h2>
    <div>
        <?php if (count($review) <= 20): ?>
            <?php for ($i=0, $iMax = count($review); $i < $iMax; $i++): ?>
                <h4><?= $review[$i]->{'title'}; ?></h4>
                <h6><?= $review[$i]->{'date'}; ?></h6>
                <h4><?= $review[$i]->{'authorName'}; ?></h4>
                <h5><?= $review[$i]->{'content'}; ?></h5>
                <br>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</section>
