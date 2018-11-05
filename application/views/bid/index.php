<!-- 
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
 -->

<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php foreach ($users_bid as $users_bid): ?>
		<div class="col-sm-6">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title">Bid Points Placed:<?php echo $users_bid['points']; ?></h4>
                    <p class="card-text">Bidder:<?php echo $users_bid['username']; ?></p>
                    <a href="<?php echo site_url('bid/confirm_bidder/'.$users_bid['post'].'/'.$users_bid['bidder']); ?>" class="btn btn-primary m-3">Choose</a>

                </div>
            </div>
        </div>

<?php endforeach; ?>
</div>
</div>
