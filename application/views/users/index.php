
<h2 class="text-center"><?php echo $title; ?></h2>


<div class="container">
<div class="row">

<?php foreach ($users as $users_item): ?>
		<div class="col-sm-6">
            <div class="card m-3">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $users_item['username']; ?></h4>
                    <p class="card-text">mobile:<?php echo $users_item['mobile']; ?></p>
                    <p class="card-text">email:<?php echo $users_item['email']; ?></p>
                    <p class="card-text">address:<?php echo $users_item['address']; ?></p>
                    <p class="card-text">rating:<?php echo $users_item['avg_rating']; ?></p>

                </div>
            </div>
        </div>

<?php endforeach; ?>
</div>
</div>