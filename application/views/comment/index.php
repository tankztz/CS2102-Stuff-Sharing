
<h2 class="text-center"><?php echo $title; ?></h2>

<div class="container">
<div class="row">
<?php $this->load->model('comment_model'); ?>
<?php foreach ($comment as $users_comment): ?>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo $users_comment['title']; ?></h4>
                <p class="card-text"><?php echo $users_comment['description']; ?></p>
                <p class="card-text">User rating:<?php echo $users_comment['rating']; ?></p>
                <p class="card-text">User comment:<?php echo $users_comment['content']; ?></p>
                <?php if ( $users_comment['user_id'] == $this->session->userdata('user_id')): ?>
                <a href="<?php echo site_url('comment/delete/'.$users_comment['comment_id']); ?>" class="btn btn-primary m-3">Delete comment</a>
                <?php else: ?>
                <p class="card-text">Comment by:<?php echo $users_comment['username']; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>