	<footer>


			<section id="quote">

		<div class="inner">

				<img src="/_images/icon-quote.png">

				<h6>The Trust’s success over the past 27 years in providing coverage to over 80% of eligible school boards and almost 50% of the county governments in Tennessee attests to its ability to provide excellent service, comprehensive coverage and competitive price.</h6>

		</div><!--inner-->

			</section><!--quote-->

			<section id="meeting">
				
		<div class="inner">

				<img src="/_images/icon-meeting.png">

				<h6>next meeting</h6>
				<p>April 15, 2014</p>
				<p><a href="https://goo.gl/maps/z5xQJ" target="_blank">404 BNA Drive, Nashville, TN 37217</a></p>
				<p>10:30 AM CST</p>

		</div><!--inner-->

			</section><!--meeting-->

			<div class="clear"></div>

			<section id="bottom">

				<p>&copy; <?php echo date("Y"); ?> The Tennessee Risk Management Trust | 404 BNA Drive, Suite 208, Nashville, TN 37217</p>

			</section><!--bottom-->

	</footer>


	<script type="text/javascript">
		$(document).ready(function(){

			function updateText(event){
					var input=$(this);
					setTimeout(function(){
						var val=input.val();
						if(val!="")
							input.parent().addClass("floating-placeholder-float");
						else
							input.parent().removeClass("floating-placeholder-float");
					},1)
				}
				$(".floating-placeholder input").keydown(updateText);
				$(".floating-placeholder input").change(updateText);
				$("input:text").val("");

				$('input[placeholder="mm/dd/yyyy"]').bind('keyup',function(){
					var strokes = $(this).val().length;
					if(strokes === 2 || strokes === 5){
							var thisVal = $(this).val();
							thisVal += '/';
							$(this).val(thisVal);
					}
			});

		});
	</script>



</body>
</html>