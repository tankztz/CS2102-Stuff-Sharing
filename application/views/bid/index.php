<h2><?php echo $title; ?></h2>

<?php foreach ($bid as $users_bid): ?>

        <h3><?php echo $users_bid['bid_id']; ?></h3>
        <div class="main">
                <?php echo $users_bid['bidder']; ?>
                <?php echo $users_bid['bid_id']; ?>
                <?php echo $users_bid['points']; ?>
        </div>
        <p><a href="<?php echo site_url('bid/'.$users_bid['bid_id']); ?>">View Details</a></p>
        <p><?php echo site_url('bid/'.$users_bid['bid_id']); ?></p>

<?php endforeach; ?>