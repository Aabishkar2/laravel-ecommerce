<?php $footer = DB::table('cms')->where('nice_name','footer-1')->first(); ?>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-3">
				{!! @$footer->content !!}
			</div>
			<div class="col-sm-5 col-md-2">
				
			</div>
			<div class="col-sm-7 col-md-4">
				<div class="col-sm-7 col-md-4">
				<div class="fb-page" data-href="https://www.facebook.com/WeDesignsolution/" data-tabs="timeline" data-width="" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WeDesignsolution/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WeDesignsolution/">WeDesign</a></blockquote></div>
			</div>
			</div>
			<div class="col-sm-5 col-md-2">
				<h3>Contact Info</h3>
				<ul>
					<li>Mountain Journey Treks</li>
					<li>info@mttreks.com</li>
				</ul>
				<div class="clearfix">
					<div class="social-icon-list">
						<ul>
							<li><a href="https://twitter.com/moldthemes" class="icon-twitter"></a></li>
							<li><a href="mailto:info@moldthemes.com" class="icon-mail"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy"><span>&copy;</span> Copyright Mountain Journey Treks, 2020</div>
</footer>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>