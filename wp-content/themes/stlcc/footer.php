<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STLCC
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<?php
				/*
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'stlcc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'stlcc' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'stlcc' ), 'stlcc', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			*/ 
			?>
		</div><!-- .site-info -->
		<div class="center">
		<div class="footer-item first">
			<h4><a href="http://m.stlcc.edu/" title="Link to STLCC mobile site.">Mobile</a></h4>
		</div>
		<div class="footer-item">
			<h4><a href="https://jobs.stlcc.edu/">Employment</a></h4>
		</div>
		<div class="footer-item" style="border-right:none">
			<ul>
                            <li><a href="http://www.stlcc.edu/Main/Contact-Us.html">Contact Us</a></li>
                            <li>- or -</li>
                            <li><a href="https://selfservice.stlcc.edu:9199/SLCC/bwskwpro.P_ChooseProspectType">Request<br />Information</a></li>
			</ul>
                        
		</div>
		<div class="footer-item" style="border-left:1px solid #777;text-align:left;">
			<h4>Compliance and Policies</h4>
			<ul>
				<li><a href="http://www.stlcc.edu/Student_Resources/Policies_and_Procedures/ConsumerInformation.html"><span>Consumer Information</span></a></li>
				<li><a href="http://www.stlcc.edu/Diversity/"><span>Diversity</span></a></li>
				<li><a href="http://www.stlcc.edu/disAbility/"><span>Employee Disability</span></a></li>
				<li><a href="http://www.stlcc.edu/Legal/"><span>Legal Disclaimer</span></a></li>
				<li><a href="http://www.stlcc.edu/Student_Resources/Policies_and_Procedures/ConsumerInformation.html"><span>Students Need2Know</span></a></li>
				<li><a href="http://www.stlcc.edu/Non_Discrimination/"><span>Non-Discrimination Statement</span></a></li>
				<li><a href="http://www.stlcc.edu/Student_Resources/Policies_and_Procedures/"><span>Policies and Procedures</span></a></li>
				<li><a href="http://www.stlcc.edu/messages/Public_Use_of_Computer_Policy.html"><span>Public Access Computer Guidelines</span></a></li>
				<li><a href="http://www.stlcc.edu/Legal/Accommodations_Statement.html"><span>Disability Accommodations</span></a></li>
                <li><a href="https://www.stlcc.edu/apps/SH_Tutorial/index.asp?p=1040"><span>Guidelines for Investigation and<br />Determination of Complaints<br />Involving Sexual Misconduct</span></a></li>
			</ul>
		</div>
		<div class="footer-item" style="text-align:left">
			<h4>Emergency Info</h4>
			<ul>
				<li><a href="http://www.stlcc.edu/Student_Resources/Policies_and_Procedures/Closing_Procedures.html"><span>Campus emergency procedures</span></a></li>
				<li>Police by Location
					<ul>
						<li><a href="#na"><span>Cosand Center</span></a></li>
						<li><a href="http://www.stlcc.edu/FV/Campus_Police/"><span>Florissant Valley</span></a></li>
						<li><a href="http://www.stlcc.edu/FP/Campus_Police/"><span>Forest Park</span></a></li>
						<li><a href="http://www.stlcc.edu/MC/Campus_Police/"><span>Meramec</span></a></li>
						<li><a href="http://www.stlcc.edu/WW/Campus_Police/"><span>Wildwood</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="footer-item">
			<h4><a href="http://www.stlcc.edu/Maps/">Maps</a></h4>
		</div>
		<div class="footer-item last">
			<h4><a href="http://assistive.usablenet.com/tt/referrer">Text Only</a></h4>
		</div>
		<div id="footer-copy" class="end">
			<div class="copy">&copy; 2015
			St. Louis Community College</div>
		</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
