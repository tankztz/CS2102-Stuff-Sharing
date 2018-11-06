<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php $this->load->model('post_model'); ?>
<?php foreach ($loan as $users_loan): ?>
    <div class="col-sm-6">
        <div class="card m-3">
            <div class="card-body">
                <h4 class="card-title">Loan index: <?php echo $users_loan['loan_id']; ?></h4>
                <p class="card-text">Under post "<?php echo $this->post_model->get_post($users_loan['post'])['title']; ?>"</p>
                <div class="row">
                <a href="<?php echo site_url('loan/'.$users_loan['loan_id']); ?>" class="btn btn-primary m-3">View Details</a>
                <a href="<?php echo site_url('post/'.$users_loan['post']); ?>" class="btn btn-primary m-3">View Post</a>
                <a href="<?php echo site_url('users/'.$users_loan['bidder']); ?>" class="btn btn-primary m-3">View Owner</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>