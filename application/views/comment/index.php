<h2><?php echo $title; ?></h2>

<?php foreach ($comment as $users_comment): ?>

        <h3><?php echo $users_comment['comment_id']; ?></h3>
        <div class="main">
                <?php echo $users_comment['user_name']; ?>
                <?php echo $users_comment['rating']; ?>
                <?php echo $users_comment['content']; ?>
        </div>
        <p><a href="<?php echo site_url('comment/'.$users_comment['comment_id']); ?>">View Details</a></p>
        <p><?php echo site_url('comment/'.$users_comment['comment_id']); ?></p>

<?php endforeach; ?>