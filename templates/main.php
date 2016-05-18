
<?php
style('recorder', 'style');
style('recorder', 'recorder');

/*script('recorder', 'script');
script('recorder', 'bootstrap.min');
script('recorder', 'EncoderDemo');
script('recorder', 'EncoderWorker');
script('recorder', 'jquery.min');
script('recorder', 'WavAudioEncoder.min');
*/
script('recorder', 'gumadapter');
script('recorder', 'MediaStreamRecorder');
script('recorder', 'script');


?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.navigation')); ?>
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('recorder')); ?>
		</div>
	</div>

</div>
