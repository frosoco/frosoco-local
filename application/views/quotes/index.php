<div class="create-actions clearfix">
	<a href="/create/quote"><button class="btn create-btn">+ Add Quote</button></a>
</div>

<div class="content-cards">
<? foreach ($quotes as $quote) { ?>
<div class="content-card content-quote">
	<div class="content-body"><? echo $quote->text; ?></div>
	<div class="content-info">
		<span class="content-author"><? echo $quote->author; ?></span>
	</div>
</div>
<? } ?>
</div>
<script>
	var container = document.querySelector('.content-cards');
	var msnry = new Masonry(container, {
		itemSelector: '.content-card'
	});
</script>