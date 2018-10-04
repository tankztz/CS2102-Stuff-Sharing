<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="id">Id</label>
    <input type="input" name="id" /><br />
    <label for="title">Title</label>
    <input type="input" name="title" /><br />
    <label for="slug">Slug</label>
    <input type="input" name="slug" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>