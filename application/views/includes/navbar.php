
<?php 
defined( 'BASEPATH') OR exit( 'No direct script access allowed'); 
?>
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<a class="navbar-brand" href="<?= site_url('news') ?>"><?= $this->config->item('title') ?>
	</a>
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav ml-auto">
        <?php $no = 1; for($a=0; $a < 9; $a++){ if ($kategori->items[0]->content->items[$a]->type == 'topic'){ ?>
			<li class="nav-item active">
			<a class="nav-link" href="<?php echo site_url('news/category/'.$kategori->items[0]->content->items[$a]->content->id.'/'.$fungsi->sluggify($kategori->items[0]->content->items[$a]->content->name));?>"><?= $kategori->items[0]->content->items[$a]->content->name; ?></a>
			</li>
        <?php $no++; }}  ?>
		</ul>
		<form class="form-inline my-2 my-lg-0" method="get" action="<?= site_url('news') ?>">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
	</div>
</div>
</nav>