<h2><?php echo $title; ?></h2>

<?php foreach ($loan as $users_loan): ?>

        <h3><?php echo $users_loan['loan_id']; ?></h3>
        <div class="main">
                <?php echo $users_loan['bid']; ?>
                <?php echo $users_loan['post']; ?>
        </div>
        <p><a href="<?php echo site_url('loan/'.$users_loan['loan_id']); ?>">View Details</a></p>
        <p><?php echo site_url('loan/'.$users_loan['loan_id']); ?></p>

<?php endforeach; ?>