
					</main>
					
					<nav id="sidebar">
					<div class="widget">
						<h3>My Links</h3>
						<ul>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/item">My items</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/post">My posts</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/bid">My bids</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/loan">My loan</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/failed">My failed bid</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/current/comment">My comments</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/users/index">Back to Main</a></li>

						<?php if ($this->session->userdata('admin') == 't'): ?>
						<li>===============</a></li>
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