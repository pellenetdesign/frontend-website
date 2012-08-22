// Pixastic Codes
	function desaturate(img) {
		var img2 = Pixastic.process(img, "desaturate");
		img2.onmouseout = function() {
			Pixastic.revert(this);
		}
	}