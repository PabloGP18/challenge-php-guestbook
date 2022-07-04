<?php
declare(strict_types=1);
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" xmlns="http://www.w3.org/1999/html">
<div class="form-row align-items-center">
    <div class="col-auto">
        <label class="sr-only" for="inlineFormInput">Title:</label>
        <input type="text" name="title" class="form-control mb-2" id="inlineFormInput" placeholder="Title">
    </div>
    <div class="col-auto">
        <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Author name:</label>
            <input type="text" name="authorName" class="form-control mb-2" id="inlineFormInput" placeholder="Author name">
        </div>
    </div>
    <div class="col-auto">
        <label class="sr-only" for="inlineFormInput">Content:</label>
        <textarea type="text" name="content" class="form-control mb-2" id="inlineFormInput" placeholder="content"></textarea>
    </div>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
</form>
