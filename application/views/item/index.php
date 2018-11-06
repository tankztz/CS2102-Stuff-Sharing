
<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php foreach ($item as $users_item): ?>
		<div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $users_item['name']; ?></h4>
                    <p class="card-text">category:<?php echo $users_item['category']; ?></p>
                    <p class="card-text"><?php echo $users_item['description']; ?></p>
                    <div class="row">
                    <?php if ($users_item['owner'] == $this->session->userdata('user_id')): ?>
                        <a href="<?php echo site_url('post/'.$users_item['item_id']); ?>" class="btn btn-primary m-3">Update item(havnt finish)</a>
                    <?php else: ?>
                        <a href="<?php echo site_url('post/'.$users_item['item_id']); ?>" class="btn btn-primary m-3">View item(havnt finish)</a>
                    <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>
      

<?php endforeach; ?>
</div>
</div>