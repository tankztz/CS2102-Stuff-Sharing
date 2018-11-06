<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php $this->load->model('post_model'); ?>
<?php foreach ($post as $users_post): ?>
		<div class="col-sm-6">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $users_post['title']; ?></h4>
                    <p class="card-text"><?php echo $users_post['description']; ?></p>
                    <div class="row">
                    <a href="<?php echo site_url('post/'.$users_post['post_id']); ?>" class="btn btn-primary m-3">View Details</a>
                    <?php if ($this->post_model->get_poster($users_post['post_id'])[0]['user_id'] == $this->session->userdata('user_id')): ?>
                        <a href="<?php echo site_url('bid/view_bidunderpost/'.$users_post['post_id']); ?>" class="btn btn-primary m-3">Choose Bidders</a>
                    <?php else: ?>
                        <a href="<?php echo site_url('bid/create/'.$users_post['post_id']); ?>" class="btn btn-primary m-3">Bid</a>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </div>

<?php endforeach; ?>
</div>
</div>
