					<div id="disqus_thread"></div>
					<script>
					var disqus_shortname = '<?= DISQUS_SHORTNAME ?>'; // required
					var disqus_identifier = '<?= get_class($Item) . '_' . $Item->ID ?>';
<?php
if (!is_null($this->getCanonicalURL())) {
	echo "					var disqus_url = '{$this->getCanonicalURL()}';";
}
?>

					/* * * DON'T EDIT BELOW THIS LINE * * */
					(function() {
						var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>