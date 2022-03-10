<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header page-header-light">
	<div class="page-header-content header-elements-inline">
		<div class="page-title">
			<h3>
				<span class="font-weight-semibold"><?=lang_line('mod_title');?></span>
			</h3>
		</div>
	</div>
	<div class="breadcrumb-line breadcrumb-line-light">
		<div class="breadcrumb">
			<a href="<?=admin_url('home');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> <?=lang_line('admin_link_home');?></a>
			<span class="breadcrumb-item"><?=lang_line('mod_title');?></span>
			<span class="breadcrumb-item"><?=lang_line('mod_title_read');?></span>
		</div>
	</div>
</div>


<div class="content">
	<div class="card">

		<!-- Action toolbar -->
		<div class="bg-lightX rounded-topX">
			<div class="navbar navbar-light navbar-right bg-light py-lg-2 rounded-top">
					<button type="button" class="button btn-sm btn-default" onclick="window.location.href = '<?=admin_url($this->mod)?>';"> <i class="icon-arrow-left7 mr-2"></i>Back</button> 
					<div class="btn-group pull-right mt-2 mb-2 mt-lg-0 mb-lg-0">
						<button type="button" class="button btn-sm btn-default" onClick="window.location.href='<?=admin_url($this->mod.'/reply/'.$res_mail['id'])?>'"> <i class="icon-reply"></i> <span class="d-none d-lg-inline-block ml-2">Reply</span> </button>
						<button type="button" class="button btn-sm btn-default"> <i class="icon-printer"></i> <span class="d-none d-lg-inline-block ml-2">Print</span> </button>
						<button type="button" class="button btn-sm btn-default delete_read_mail" data-id="<?=encrypt($res_mail['id'])?>"> <i class="icon-bin"></i> <span class="d-none d-lg-inline-block ml-2">Delete</span> </button> 
					</div>
			</div>
		</div>
		<!-- /action toolbar -->


		<!-- Mail details -->
		<div class="card-body">
			<div class="media flex-column flex-md-row">
				<span class="btn bg-blue-400 btn-icon btn-lg rounded-round mr-3" style="width:40px;height:40px;">
					<span class="icon-envelope"></span>
				</span>

				<div class="media-body">
					<h4 class="mb-1"><?=$res_mail['subject'];?></h4>
					<div>
						<small class="letter-icon-title font-weight-semibold"><?=$res_mail['name'];?></small>
						<small class="text-muted"><?=$res_mail['email'];?></small>
					</div>
					<small class="text-muted"><?=$res_mail['date'];?></small>
				</div>
			</div>
		</div>
		<!-- /mail details -->


		<!-- Mail container -->
		<div class="card-body">
			<div class="overflow-auto mw-100" style="min-height:400px;"><?=$res_mail['message'];?></div>
		</div>
		<!-- /mail container -->
	</div>
</div>
