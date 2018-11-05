<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php foreach ($myfailedbid as $users_bid): ?>
		<div class="col-sm-6">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $users_bid['title']; ?></h4>
                    <p class="card-text"><?php echo $users_bid['description']; ?></p>
                    <p class="card-text">Bid points placed: <?php echo $users_bid['points']; ?></p>
                    <p class="card-text">Winning bid: <?php echo $users_bid['successful_bidding_points']; ?></p>
                    <a href="<?php echo site_url('post/'.$users_bid['post_id']); ?>" class="btn btn-primary m-3">View Details</a>
                    </div>
                </div>
            </div>
    

<?php endforeach; ?>
</div>
</div>