<h2><?php echo $title; ?></h2>

<?php foreach ($item as $users_item): ?>

        <h3><?php echo $users_item['name']; ?></h3>
        <div class="main">
                <?php echo $users_item['owner']; ?>
                <?php echo $users_item['category']; ?>
                <?php echo $users_item['description']; ?>
        </div>
        <p><a href="<?php echo site_url('item/'.$users_item['item_id']); ?>">View Details</a></p>
        <p><?php echo site_url('item/'.$users_item['item_id']); ?></p>

<?php endforeach; ?>