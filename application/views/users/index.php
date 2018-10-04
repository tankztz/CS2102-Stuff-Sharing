<h2><?php echo $title; ?></h2>

<?php foreach ($users as $users_item): ?>

        <h3><?php echo $users_item['username']; ?></h3>
        <div class="main">
                <?php echo $users_item['email']; ?>
                <?php echo $users_item['points']; ?>
                <?php echo $users_item['address']; ?>
        </div>
        <p><a href="<?php echo site_url('users/'.$users_item['user_id']); ?>">View Details</a></p>
        <p><?php echo site_url('users/'.$users_item['user_id']); ?></p>

<?php endforeach; ?>