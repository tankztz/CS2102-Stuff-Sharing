<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php foreach ($post as $users_post): ?>
		<div class="col-sm-6">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $users_post['title']; ?></h4>
                    <p class="card-text"><?php echo $users_post['description']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $users_post['minimum_bid']; ?></small></p>
                    <a href="<?php echo site_url('post/'.$users_post['post_id']); ?>" class="btn btn-primary">View Details</a>

                </div>
            </div>
        </div>

<?php endforeach; ?>
</div>
</div>
