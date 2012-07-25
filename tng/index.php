<!DOCTYPE html>
<html>
    <head>
        <title>TNG Bridge ambience</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="maximum-scale=1, minimum-scale=1, width=device-width, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
	<style type="text/css">
		input {display: block; Visibility: hidden;}
	</style>
	<script>
		function init() {
			var clipList = document.getElementById('clips');
			var clipBoxes = clipList.getElementsByTagName('input');
			var clipAudio = clipList.getElementsByTagName('audio');
			
			for(var i = 0; i < clipBoxes.length; i++)
			{
				clipBoxes[i].style.visibility = 'visible';
				clipBoxes[i].onclick = doAudio;
			}
			
			for(var i = 0; i < clipAudio.length; i++)
			{
				clipAudio[i].removeAttribute('controls');
				clipAudio[i].style.visibility = 'hidden';
				//clipAudio[i].setAttribute('onended', "this.play()");
				clipAudio[i].addEventListener('ended', function(){
					this.currentTime = 0;
					this.play();
				}, false);
			}
		}
		
		function doAudio() {
			if(this.checked)
			{
				myAudio = this.parentNode.getElementsByTagName('audio')[0];
				myAudio.play();
			}
			else
			{
				myAudio = this.parentNode.getElementsByTagName('audio')[0];
				myAudio.pause();
			}
		}
		
		window.onload = init;
	</script>
    </head>
    <body>
	<!-- I'm using audio tags, becauase I want to ensure that it will
	work without Javascript, but, I haven't finished implementing it yet -->
	<ul id="clips">
		<li>
			<label for="1">TNG Bridge Sounds 1</label>
			<input id="1" type="checkbox" />
			<audio preload controls>
				<source src="tng_bridge_1.mp3" />
				<source src="tng_bridge_1.ogg" />
			</audio>
		</li>
		<li>
			<label for="2">TNG Bridge Sounds 2</label>
			<input id="2" type="checkbox" />
			<audio preload controls>
				<source src="tng_bridge_2.mp3" />
				<source src="tng_bridge_2.ogg" />
			</audio>
		</li>
		<li>
			<label for="3">TNG Bridge Sounds 3</label>
			<input id="3" type="checkbox" />
			<audio preload controls>
				<source src="tng_bridge_3.mp3" />
				<source src="tng_bridge_3.ogg" />
			</audio>
		</li>
<!--		<li>
			<label for="4">Test track</label>
			<input id="4" type="checkbox" />
			<audio preload controls">
				<source src="test.ogg" />
				<source src="test.mp3" />
			</audio>
		</li> -->
	</ul>
    </body>
</html>

