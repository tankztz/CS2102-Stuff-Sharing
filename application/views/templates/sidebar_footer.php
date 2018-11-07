
					</main>
					<nav id="sidebar">
					<div class="widget">
						<h3>Quick Links</h3>
						<ul>
						<li><a href="<?php echo base_url(); ?>index.php/users/index">Users</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/item/index">Item</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/bid/index">Bid</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/post/index">Post</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/loan/index">Loan</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/comment/index">Comment</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/item">My Pages</a></li>

						<?php if ($this->session->userdata('admin') == 't'): ?>
						<li>================</a></li>
						<li>SWITCH USER:</a></li>
						<?php foreach ($this->users_model->get_users() as $users):  ?>
						<li><a href="<?php echo site_url('users/switch_user/'.$users['user_id'])."/".str_replace('/', '_', current_url()); ?>" ><?php echo $users['username']; ?></a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						</ul>
					</div>
					</nav>
					
					<div class="clr"></div>
				</div>
			</div>