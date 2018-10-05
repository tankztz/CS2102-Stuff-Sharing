<h2><?php echo $title; ?></h2>

<?php foreach ($post as $users_post): ?>

        <h3><?php echo $users_post['title']; ?></h3>
        <div class="main">
                <?php echo $users_post['item']; ?>
                <?php echo $users_post['description']; ?>
                <?php echo $users_post['minimum_bid']; ?>
        </div>
        <p><a href="<?php echo site_url('post/'.$users_post['post_id']); ?>">View Details</a></p>
        <p><?php echo site_url('post/'.$users_post['post_id']); ?></p>

<?php endforeach; ?>