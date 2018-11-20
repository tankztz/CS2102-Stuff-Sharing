<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php $this->load->model('users_model'); ?>
<?php foreach ($bid as $users_bid): ?>
    <div class="col-sm-6">
        <div class="card m-3">
            <div class="card-body">
                <h4 class="card-title">Bid Points Placed:<?php echo $users_bid['points']; ?></h4>
                <p class="card-text">Bidder:<?php echo $this->users_model->get_username($users_bid['bidder']); ?></p>
                <a href="<?php echo site_url('post/'.$users_bid['post']); ?>" class="btn btn-primary m-3">View the post</a>
                <?php if ($this->post_model->get_poster($users_bid['post'])[0]['user_id'] == $this->session->userdata('user_id')): ?>
                    <a href="<?php echo site_url('bid/confirm_bidder/'.$users_bid['post'].'/'.$users_bid['bidder']); ?>" class="btn btn-primary m-3">Accept bid</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endforeach; ?>
</div>
</div>
