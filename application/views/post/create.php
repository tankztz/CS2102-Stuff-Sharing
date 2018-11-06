<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('post/create'); ?>


<form>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title *">
    
  </div>
  <div class="form-group">
    <label for="item">Your item* (choose one from your item list)</label>
    <select class="form-control" id="item" name="item">
    <?php if (sizeof($item[0]) > 2): ?>
    <?php foreach ($item as $item_item): ?>
      <option value= <?php echo $item_item['item_id']; ?> > <?php echo $item_item['name']; ?></option>
      <?php endforeach; ?>
      <?php else: ?>
      <option value= <?php echo $item['item_id']; ?> > <?php echo $item['name']; ?></option>
      <?php endif; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="description">Example textarea</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>