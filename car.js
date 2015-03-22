            $( window ).load(function()
			{
			var i=0;
			$('#img1').hide();
			$('#img2').hide();
			$('#img3').hide();
			$('#img4').hide();
						
			(function cont()
			{
				if(i==4)
				{
				i=0;
				}
				
				$('#s_show img').eq(i++).fadeIn(2000) .delay(2000).fadeOut(1000,cont);

			})();
			});