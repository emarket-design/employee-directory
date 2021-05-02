<?php
/**
 * Getting Started
 *
 * @package EMPD_COM
 * @since WPAS 5.3
 */
if (!defined('ABSPATH')) exit;
add_action('empd_com_getting_started', 'empd_com_getting_started');
/**
 * Display getting started information
 * @since WPAS 5.3
 *
 * @return html
 */
function empd_com_getting_started() {
	global $title;
	list($display_version) = explode('-', EMPD_COM_VERSION);
?>
<style>
.about-wrap img{
max-height: 200px;
}
div.comp-feature {
    font-weight: 400;
    font-size:20px;
}
.edition-com {
    display: none;
}
.green{
color: #008000;
font-size: 30px;
}
#nav-compare:before{
    content: "\f179";
}
#emd-about .nav-tab-wrapper a:before{
    position: relative;
    box-sizing: content-box;
padding: 0px 3px;
color: #4682b4;
    width: 20px;
    height: 20px;
    overflow: hidden;
    white-space: nowrap;
    font-size: 20px;
    line-height: 1;
    cursor: pointer;
font-family: dashicons;
}
#nav-getting-started:before{
content: "\f102";
}
#nav-release-notes:before{
content: "\f348";
}
#nav-resources:before{
content: "\f118";
}
#nav-features:before{
content: "\f339";
}
#emd-about .embed-container { 
	position: relative; 
	padding-bottom: 56.25%;
	height: 0;
	overflow: hidden;
	max-width: 100%;
	height: auto;
	} 

#emd-about .embed-container iframe,
#emd-about .embed-container object,
#emd-about .embed-container embed { 
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	}
#emd-about ul li:before{
    content: "\f522";
    font-family: dashicons;
    font-size:25px;
 }
#gallery {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
    flex-wrap: wrap;
}
#gallery .gallery-item {
	margin-top: 10px;
	margin-right: 10px;
	text-align: center;
        cursor:pointer;
}
#gallery img {
	border: 2px solid #cfcfcf; 
height: 405px; 
width: auto; 
}
#gallery .gallery-caption {
	margin-left: 0;
}
#emd-about .top{
text-decoration:none;
}
#emd-about .toc{
    background-color: #fff;
    padding: 25px;
    border: 1px solid #add8e6;
    border-radius: 8px;
}
#emd-about h3,
#emd-about h2{
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0.6em;
    margin-left: 0px;
}
#emd-about p,
#emd-about .emd-section li{
font-size:18px
}
#emd-about a.top:after{
content: "\f342";
    font-family: dashicons;
    font-size:25px;
text-decoration:none;
}
#emd-about .toc a,
#emd-about a.top{
vertical-align: top;
}
#emd-about li{
list-style-type: none;
line-height: normal;
}
#emd-about ol li {
    list-style-type: decimal;
}
#emd-about .quote{
    background: #fff;
    border-left: 4px solid #088cf9;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    margin-top: 25px;
    padding: 1px 12px;
}
#emd-about .tooltip{
    display: inline;
    position: relative;
}
#emd-about .tooltip:hover:after{
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 26px;
    color: #fff;
    content: 'Click to enlarge';
    left: 20%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
    width: 220px;
}
</style>

<?php add_thickbox(); ?>
<div id="emd-about" class="wrap about-wrap">
<div id="emd-header" style="padding:10px 0" class="wp-clearfix">
<div style="float:right"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/empdir-logo-250x150.gif"; ?>"></div>
<div style="margin: .2em 200px 0 0;padding: 0;color: #32373c;line-height: 1.2em;font-size: 2.8em;font-weight: 400;">
<?php printf(__('Welcome to Employee Directory Community %s', 'empd-com') , $display_version); ?>
</div>

<p class="about-text">
<?php printf(__("Easy-to-use and maintain employee directory solution for your business", 'empd-com') , $display_version); ?>
</p>
<div style="display: inline-block;"><a style="height: 50px; background:#ff8484;padding:10px 12px;color:#ffffff;text-align: center;font-weight: bold;line-height: 50px; font-family: Arial;border-radius: 6px; text-decoration: none;" href="https://emdplugins.com/plugin-pricing/employee-directory-wordpress-plugin-pricing/?pk_campaign=empd-com-upgradebtn&amp;pk_kwd=empd-com-resources"><?php printf(__('Upgrade Now', 'empd-com') , $display_version); ?></a></div>
<div style="display: inline-block;margin-bottom: 20px;"><a style="height: 50px; background:#f0ad4e;padding:10px 12px;color:#ffffff;text-align: center;font-weight: bold;line-height: 50px; font-family: Arial;border-radius: 6px; text-decoration: none;" href="https://employee-directory.emdplugins.com//?pk_campaign=empd-com-buybtn&amp;pk_kwd=empd-com-resources"><?php printf(__('Visit Pro Demo Site', 'empd-com') , $display_version); ?></a></div>
<?php
	$tabs['getting-started'] = __('Getting Started', 'empd-com');
	$tabs['release-notes'] = __('Release Notes', 'empd-com');
	$tabs['resources'] = __('Resources', 'empd-com');
	$tabs['features'] = __('Features', 'empd-com');
	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'getting-started';
	echo '<h2 class="nav-tab-wrapper wp-clearfix">';
	foreach ($tabs as $ktab => $mytab) {
		$tab_url[$ktab] = esc_url(add_query_arg(array(
			'tab' => $ktab
		)));
		$active = "";
		if ($active_tab == $ktab) {
			$active = "nav-tab-active";
		}
		echo '<a href="' . esc_url($tab_url[$ktab]) . '" class="nav-tab ' . $active . '" id="nav-' . $ktab . '">' . $mytab . '</a>';
	}
	echo '</h2>';
?>
<?php echo '<div class="tab-content" id="tab-getting-started"';
	if ("getting-started" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="rtop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Quickstart</h3><ul><li><a href="#gs-sec-178">Live Demo Site</a></li>
<li><a href="#gs-sec-216">Need Help?</a></li>
<li><a href="#gs-sec-217">Learn More</a></li>
<li><a href="#gs-sec-215">Installation, Configuration & Customization Service</a></li>
<li><a href="#gs-sec-90">Employee Directory Community Introduction</a></li>
<li><a href="#gs-sec-92">EMD CSV Import Export Extension helps you get your data in and out of WordPress quickly, saving you ton of time</a></li>
<li><a href="#gs-sec-117">EMD Active Directory/LDAP Extension helps bulk import and update Employee Directory data from LDAP</a></li>
<li><a href="#gs-sec-91">EMD Advanced Filters and Columns Extension for finding what's important faster</a></li>
<li><a href="#gs-sec-97">EMD vCard Extension</a></li>
<li><a href="#gs-sec-95">Employee Directory Pro - Improve internal and external communication of your organization with the best in class company directory</a></li>
<li><a href="#gs-sec-98">Employee Spotlight Pro - Beautiful, customizable employee profile management system</a></li>
</ul></div><div class="quote">
<p class="about-description">The secret of getting ahead is getting started - Mark Twain</p>
</div>
<div id="gs-sec-178"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Live Demo Site</div><div class="changelog emd-section getting-started-178" style="margin:0;background-color:white;padding:10px"><div id="gallery"></div><div class="sec-desc"><p>Feel free to check out our <a target="_blank" href="https://employee-directory-com.emdplugins.com/?pk_campaign=empd-com-gettingstarted&pk_kwd=empd-com-livedemo">live demo site</a> to learn how to use Employee Directory Community starter edition. The demo site will always have the latest version installed.</p>
<p>You can also use the demo site to identify possible issues. If the same issue exists in the demo site, open a support ticket and we will fix it. If a Employee Directory Community feature is not functioning or displayed correctly in your site but looks and works properly in the demo site, it means the theme or a third party plugin or one or more configuration parameters of your site is causing the issue.</p>
<p>If you'd like us to identify and fix the issues specific to your site, purchase a work order to get started.</p>
<p><a target="_blank" style="
    padding: 16px;
    background: coral;
    border: 1px solid lightgray;
    border-radius: 12px;
    text-decoration: none;
    color: white;
    margin: 10px 0;
    display: inline-block;" href="https://emdplugins.com/expert-service-pricing/?pk_campaign=empd-com-gettingstarted&pk_kwd=empd-com-livedemo">Purchase Work Order</a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-216"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Need Help?</div><div class="changelog emd-section getting-started-216" style="margin:0;background-color:white;padding:10px"><div id="gallery"></div><div class="sec-desc"><p>There are many resources available in case you need help:</p>
<ul>
<li>Search our <a target="_blank" href="https://emdplugins.com/support">knowledge base</a></li>
<li><a href="https://emdplugins.com/kb_tags/employee-directory" target="_blank">Browse our Employee Directory Community articles</a></li>
<li><a href="https://docs.emdplugins.com/docs/employee-directory-community-documentation" target="_blank">Check out Employee Directory Community documentation for step by step instructions.</a></li>
<li><a href="https://emdplugins.com/emdplugins-support-introduction/" target="_blank">Open a support ticket if you still could not find the answer to your question</a></li>
</ul>
<p>Please read <a href="https://emdplugins.com/questions/what-to-write-on-a-support-ticket-related-to-a-technical-issue/" target="_blank">"What to write to report a technical issue"</a> before submitting a support ticket.</p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-217"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Learn More</div><div class="changelog emd-section getting-started-217" style="margin:0;background-color:white;padding:10px"><div id="gallery"></div><div class="sec-desc"><p>The following articles provide step by step instructions on various concepts covered in Employee Directory Community.</p>
<ul><li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article292">Concepts</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article455">Quick Start</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article293">Working with Employees</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article294">Widgets</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article295">Forms</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article296">Administration</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article298">Screen Options</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article297">Localization(l10n)</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article450">Customizations</a>
</li>
<li>
<a target="_blank" href="https://docs.emdplugins.com/docs/employee-directory-community-documentation/#article299">Glossary</a>
</li></ul>
</div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-215"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Installation, Configuration & Customization Service</div><div class="changelog emd-section getting-started-215" style="margin:0;background-color:white;padding:10px"><div id="gallery"></div><div class="sec-desc"><p>Get the peace of mind that comes from having Employee Directory Community properly installed, configured or customized by eMarket Design.</p>
<p>Being the developer of Employee Directory Community, we understand how to deliver the best value, mitigate risks and get the software ready for you to use quickly.</p>
<p>Our service includes:</p>
<ul>
<li>Professional installation by eMarket Design experts.</li>
<li>Configuration to meet your specific needs</li>
<li>Installation completed quickly and according to best practice</li>
<li>Knowledge of Employee Directory Community best practices transferred to your team</li>
</ul>
<p>Pricing of the service is based on the complexity of level of effort, required skills or expertise. To determine the estimated price and duration of this service, and for more information about related services, purchase a work order.  
<p><a target="_blank" style="
    padding: 16px;
    background: coral;
    border: 1px solid lightgray;
    border-radius: 12px;
    text-decoration: none;
    color: white;
    margin: 10px 0;
    display: inline-block;" href="https://emdplugins.com/expert-service-pricing/?pk_campaign=empd-com-gettingstarted&pk_kwd=empd-com-livedemo">Purchase Work Order</a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-90"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Employee Directory Community Introduction</div><div class="changelog emd-section getting-started-90" style="margin:0;background-color:white;padding:10px"><div class="emd-yt" data-youtube-id="z_vhhJz_uEc" data-ratio="16:9">loading...</div><div class="sec-desc"><p>Watch Employee Directory Community introduction video to learn about the plugin features and configuration.</p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-92"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">EMD CSV Import Export Extension helps you get your data in and out of WordPress quickly, saving you ton of time</div><div class="changelog emd-section getting-started-92" style="margin:0;background-color:white;padding:10px"><div class="emd-yt" data-youtube-id="tJDQbU3jS0c" data-ratio="16:9">loading...</div><p style="font-weight:bold">This extension is included in the pro edition.</p><div class="sec-desc"><p>EMD CSV Import Export Extension helps bulk import, export, update entries from/to CSV files. You can also reset(delete) all data and start over again without modifying database. The export feature is also great for backups and archiving old or obsolete data.</p>
<p><a href="https://emdplugins.com/plugin-features/employee-directory-importexport-addon/?pk_campaign=emdimpexp-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-117"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">EMD Active Directory/LDAP Extension helps bulk import and update Employee Directory data from LDAP</div><div class="changelog emd-section getting-started-117" style="margin:0;background-color:white;padding:10px"><div class="emd-yt" data-youtube-id="onWfeZHLGzo" data-ratio="16:9">loading...</div><div class="sec-desc"><p>EMD Active Directory/LDAP Extension helps bulk importing and updating Employee Directory data by visually mapping LDAP fields. The imports/updates can scheduled on desired intervals using WP Cron.</p>
<p><a href="https://emdplugins.com/plugin-features/employee-directory-microsoft-active-directoryldap-addon/?pk_campaign=emdldap-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></p></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-91"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">EMD Advanced Filters and Columns Extension for finding what's important faster</div><div class="changelog emd-section getting-started-91" style="margin:0;background-color:white;padding:10px"><div class="emd-yt" data-youtube-id="JDIHIibWyR0" data-ratio="16:9">loading...</div><p style="font-weight:bold">This extension is included in the pro edition.</p><div class="sec-desc"><p>EMD Advanced Filters and Columns Extension for Employee Directory Community edition helps you:</p><ul><li>Filter entries quickly to find what you're looking for</li><li>Save your frequently used filters so you do not need to create them again</li><li>Sort quote request columns to see what's important faster</li><li>Change the display order of columns </li>
<li>Enable or disable columns for better and cleaner look </li><li>Export search results to PDF or CSV for custom reporting</li></ul><div style="margin:25px"><a href="https://emdplugins.com/plugin-features/employee-directory-smart-search-and-columns-addon/?pk_campaign=emd-afc-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-97"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">EMD vCard Extension</div><div class="changelog emd-section getting-started-97" style="margin:0;background-color:white;padding:10px"><div id="gallery"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-97" href="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/emd_vcard_empd_com.png"; ?>"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/emd_vcard_empd_com.png"; ?>"></a></div></div><div class="sec-desc"><p>Provides ability to download employee profile information as vCard - file format standard for electronic business cards</p>
<div style="margin:25px"><a href="https://emdplugins.com/plugin-features/employee-directory-vcard-addon/?pk_campaign=emd-vcard-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-95"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Employee Directory Pro - Improve internal and external communication of your organization with the best in class company directory</div><div class="changelog emd-section getting-started-95" style="margin:0;background-color:white;padding:10px"><div id="gallery"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-95" href="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_emp_pro_50.png"; ?>"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_emp_pro_50.png"; ?>"></a></div></div><div class="sec-desc"><p>Employee Directory Pro edition provides an easy to use and maintain centralized employee directory solution complete with multiple advanced search forms, organization chart, employee profile, and company event pages.</p>
<ul>
<li>Search employees by names, job titles, skills, direct reports, employee numbers etc.</li>
<li>Provide ability to limit access to search forms by logged-in users only</li>
<li>Display featured employees, recent hires, and the current week's birthdays</li>
<li>Display and search though employees using organizational chart</li>
<li>Display company events by location and/or groups in their own pages and in event calendar</li>
<li>Filter through employees with an advanced grid complete with searching, sorting, exporting into multiple file formats</li>
<li>Showcase your employees in their own pages with a primary address map, status info and more</li>
<li>Designed for intranets with no access to internet</li>
</ul>
<div style="margin:25px"><a href="https://emdplugins.com/plugins/employee-directory-wordpress-plugin//?pk_campaign=empd-pro-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px"><div id="gs-sec-98"></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Employee Spotlight Pro - Beautiful, customizable employee profile management system</div><div class="changelog emd-section getting-started-98" style="margin:0;background-color:white;padding:10px"><div id="gallery"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-98" href="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_empslight-pro.jpg"; ?>"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_empslight-pro.jpg"; ?>"></a></div></div><div class="sec-desc"><p>Showcase your organization highlighting individuals or groups with beautiful layouts.</p>
<ul>
<li>Beautiful, responsive employee profile management with 100+ unique displays</li>
<li>Power up member, staff bios with custom fields</li>
<li>Display optional 5 social links for each member</li>
<li>Profile owners can update profile pages</li>
<li>Showcase featured members or staff, new hires and upcoming birthdays on your site's sidebar</li>
<li>Customizable employee profile pages.</li>
<li>Integrated advanced CSV importer/exporter</li>
<li>Integrated Visual Shortcode Builder for unique displays</li>
</ul>
<div style="margin:25px"><a href="https://emdplugins.com/plugins/employee-spotlight-wordpress-plugin?pk_campaign=espotlight-pro-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></div></div></div><div style="margin-top:15px"><a href="#rtop" class="top">Go to top</a></div><hr style="margin-top:40px">

<?php echo '</div>'; ?>
<?php echo '<div class="tab-content" id="tab-release-notes"';
	if ("release-notes" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<p class="about-description">This page lists the release notes from every production version of Employee Directory Community.</p>


<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.2.3 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1291" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates and improvements to libraries</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.2.2 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1275" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
tested with WP 5.6.2</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1270" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
tested with WP 5.6.1</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.2.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1214" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
multi-select form component missing scroll bars when the content overflows its fixed height.</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.2.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1131" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates and improvements to libraries</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1130" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added previous and next buttons for the edit screens of employees</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.1.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1076" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Bio tab not getting configured from the plugin settings</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1074" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates and improvements to form library</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">4.0.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1003" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Emd templates</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1002" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates and improvements to form library</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-1001" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added support for Emd Custom Field Builder when upgraded to premium editions</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.9.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-937" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Session cleanup workflow by creating a custom table to process records.</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-936" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added Emd form builder support</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-935" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Cleaned up unnecessary code and optimized the library file content.</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.8.2 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-895" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates for better stability and compatibility</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.8.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-868" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Only file types allowed and set in the plugin settings can be uploaded to WordPress media library issue</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.8.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-844" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Emd templating system to match modern web standards</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-843" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Created a new shortcode page which displays all available shortcodes. You can access this page under the plugin settings.</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.7.3 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-797" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Updated the emd templating system reducing CSS file size and improving layout display.</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.7.2 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-776" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates for better stability and compatibility</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.7.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-764" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
updates for better stability and compatibility</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.7.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-728" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Birth date field not displaying date and month</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-727" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Hire date field not displaying value</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-726" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Primary address field not displaying value</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-725" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
HTML code editor in WordPress dashboard compressing output after switching from visual mode</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-724" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
LIVE DEMO SITE available -https://employee-directory-com.emdplugins.com</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.8 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-723" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
HTML code editor in WordPress dashboard compressing output after switching from visual mode</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-722" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
LIVE DEMO SITE available -https://employee-directory-com.emdplugins.com</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.7 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-663" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Misc. software updates for better compatibility and stability</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.6 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-662" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Misc. software updates for better compatibility and stability</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.5 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-510" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Ability to change emd templating system container type - fixed or full width</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-509" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Ability to limit the file size and allowable extensions for employee photos</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-508" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Misc. software updates for better compatibility and stability</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.4 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-507" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Misc. software updates for better compatibility and stability</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.3 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-277" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Updated codemirror libraries for custom CSS and JS options in plugin settings page</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-276" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
PHP 7 compatibility</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-275" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added custom JavaScript option in plugin settings under Tools tab</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-274" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Custom JS field in settings</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.2 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-227" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
WP Sessions security vulnerability</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-156" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
minor fixes</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-151" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Configured to work with EMD Active Directory/LDAP extension</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.6.0 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-93" style="margin:0">
<h3 style="font-size:18px;" class="remove"><div  style="font-size:110%;color:#ff4444"><span class="dashicons dashicons-editor-removeformatting"></span> REMOVE</div>
Image border color for employee photos. This can be easily done in CSS.</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-92" style="margin:0">
<h3 style="font-size:18px;" class="new"><div style="font-size:110%;color:#00C851"><span class="dashicons dashicons-megaphone"></span> NEW</div>
Added a getting started page for plugin introduction, tips and resources</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-91" style="margin:0">
<h3 style="font-size:18px;" class="remove"><div  style="font-size:110%;color:#ff4444"><span class="dashicons dashicons-editor-removeformatting"></span> REMOVE</div>
Global parameter in changing image border color for employee photos was deleted. This can be easily done in CSS.</h3>
<div ></a></div></div></div><hr style="margin:30px 0"><div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-90" style="margin:0">
<h3 style="font-size:18px;" class="tweak"><div  style="font-size:110%;color:#33b5e5"><span class="dashicons dashicons-admin-settings"></span> TWEAK</div>
Modified single employee page to a new look</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<h3 style="font-size: 18px;font-weight:700;color: white;background: #708090;padding:5px 10px;width:155px;border: 2px solid #fff;border-radius:4px;text-align:center">3.5.1 changes</h3>
<div class="wp-clearfix"><div class="changelog emd-section whats-new whats-new-89" style="margin:0">
<h3 style="font-size:18px;" class="fix"><div  style="font-size:110%;color:#c71585"><span class="dashicons dashicons-admin-tools"></span> FIX</div>
Single taxonomies not getting displayed properly</h3>
<div ></a></div></div></div><hr style="margin:30px 0">
<?php echo '</div>'; ?>
<?php echo '<div class="tab-content" id="tab-resources"';
	if ("resources" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<div style="height:25px" id="ptop"></div><div class="toc"><h3 style="color:#0073AA;text-align:left;">Upgrade your game for better results</h3><ul><li><a href="#gs-sec-94">How to customize Employee Directory Community</a></li>
<li><a href="#gs-sec-93">How to resolve theme related issues</a></li>
<li><a href="#gs-sec-118">Managing Organizational Reporting Hierarchy using Employee Directory Pro</a></li>
<li><a href="#gs-sec-96">Campus Directory Pro - an easy to use, dynamic and searchable academic catalog integrating people, publications, courses and locations</a></li>
</ul></div><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">How to customize Employee Directory Community</div><div class="emd-section changelog resources resources-94" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-94"></div><div class="emd-yt" data-youtube-id="4wcFcIfHhPA" data-ratio="16:9">loading...</div><div class="sec-desc"><p><strong><span class="dashicons dashicons-arrow-up-alt"></span> Watch the customization video to familiarize yourself with the customization options. </strong>. The video shows one of our plugins as an example. The concepts are the same and all our plugins have the same settings.</p>
<p>Employee Directory Community is designed and developed using <a href="https://wpappstudio.com">WP App Studio (WPAS) Professional WordPress Development platform</a>. All WPAS plugins come with extensive customization options from plugin settings without changing theme template files. Some of the customization options are listed below:</p>
<ul>
	<li>Enable or disable all fields, taxonomies and relationships from backend and/or frontend</li>
        <li>Use the default EMD or theme templating system</li>
	<li>Set slug of any entity and/or archive base slug</li>
	<li>Set the page template of any entity, taxonomy and/or archive page to sidebar on left, sidebar on right or no sidebar (full width)</li>
	<li>Hide the previous and next post links on the frontend for single posts</li>
	<li>Hide the page navigation links on the frontend for archive posts</li>
	<li>Display or hide any custom field</li>
	<li>Display any sidebar widget on plugin pages using EMD Widget Area</li>
	<li>Set custom CSS rules for all plugin pages including plugin shortcodes</li>
</ul>
<div class="quote">
<p>If your customization needs are more complex, you’re unfamiliar with code/templates and resolving potential conflicts, we strongly suggest you to <a href="https://emdplugins.com/open-a-support-ticket/?pk_campaign=empd-com-hireme-custom&ticket_topic=pre-sales-questions">hire us</a>, we will get your site up and running in no time.
</p>
</div></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px"><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">How to resolve theme related issues</div><div class="emd-section changelog resources resources-93" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-93"></div><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-93" href="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/emd_templating_system.png"; ?>"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/emd_templating_system.png"; ?>"></a></div></div><div class="sec-desc"><p>If your theme is not coded based on WordPress theme coding standards, does have an unorthodox markup or its style.css is messing up how Employee Directory Community pages look and feel, you will see some unusual changes on your site such as sidebars not getting displayed where they are supposed to or random text getting displayed on headers etc. after plugin activation.</p>
<p>The good news is Employee Directory Community plugin is designed to minimize theme related issues by providing two distinct templating systems:</p>
<ul>
<li>The EMD templating system is the default templating system where the plugin uses its own templates for plugin pages.</li>
<li>The theme templating system where Employee Directory Community uses theme templates for plugin pages.</li>
</ul>
<p>The EMD templating system is the recommended option. If the EMD templating system does not work for you, you need to check "Disable EMD Templating System" option at Settings > Tools tab and switch to theme based templating system.</p>
<p>Please keep in mind that when you disable EMD templating system, you loose the flexibility of modifying plugin pages without changing theme template files.</p>
<p>If none of the provided options works for you, you may still fix theme related conflicts following the steps in <a href="https://docs.emdplugins.com/docs/employee-directory-community-documentation">Employee Directory Community Documentation - Resolving theme related conflicts section.</a></p>

<div class="quote">
<p>If you’re unfamiliar with code/templates and resolving potential conflicts, <a href="https://emdplugins.com/open-a-support-ticket/?pk_campaign=raq-hireme&ticket_topic=pre-sales-questions"> do yourself a favor and hire us</a>. Sometimes the cost of hiring someone else to fix things is far less than doing it yourself. We will get your site up and running in no time.</p>
</div></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px"><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Managing Organizational Reporting Hierarchy using Employee Directory Pro</div><div class="emd-section changelog resources resources-118" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-118"></div><div class="emd-yt" data-youtube-id="DVR09o3eerI" data-ratio="16:9">loading...</div><div class="sec-desc"><p>Employees get hired, get promoted, leave company or simple change departments. Using text based or static charting methods to visualize the employee lifecycle create maintenance nightmare or simply fall short of modern communication methods available to businesses.</p>
<p>Employee Directory Pro solves this issue by producing organization charts and displaying employee-manager relationships in employee profiles on the fly, helping internal and external communication.</p>
<p><a href="https://emdplugins.com/articles/managing-organizational-reporting-hierarchy/?pk_campaign=emdldap-buybtn&pk_kwd=empd-com-resources" target="_blank">Read More</a></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px"><div style="color:white;background:#0000003b;padding:5px 10px;font-size: 1.4em;font-weight: 600;">Campus Directory Pro - an easy to use, dynamic and searchable academic catalog integrating people, publications, courses and locations</div><div class="emd-section changelog resources resources-96" style="margin:0;background-color:white;padding:10px"><div style="height:40px" id="gs-sec-96"></div><div id="gallery" class="wp-clearfix"><div class="sec-img gallery-item"><a class="thickbox tooltip" rel="gallery-96" href="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_campusdir_pro_1102.png"; ?>"><img src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/montage_campusdir_pro_1102.png"; ?>"></a></div></div><div class="sec-desc"><p>Campus Directory Pro provides an easy to use, dynamic and searchable academic catalog that meets modern web standards while matching the style and graphics of your organization's brand. Designed and developed for higher education institutions.</p>
<ul>
<li>Allow users find information quickly by offering multi-dimensional search by people, publications, courses and locations</li>
<li>Integrate and display multiple content segments seamlessly</li>
<li>Ensure brand consistency with an online catalog that matches your organization’s website</li>
<li>Allow access to information from anywhere and any device </li>
<li>Extensive taxonomy based classification system for people, publications, courses and location</li>
<li>Extensive customization options for frontend and backend through plugin settings</li>
<li>Extend your academic catalog with unlimited, searchable custom fields</li> 
<li>Integrate with external systems with advanced bulk import,export and sync functionality</li>
</ul>
<div style="margin:25px"><a href="https://emdplugins.com/plugins/campus-directory-wordpress-plugin/?pk_campaign=campdir-pro-buybtn&pk_kwd=empd-com-resources"><img style="width: 154px;" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/button_buy-now.png"; ?>"></a></div></div></div><div style="margin-top:15px"><a href="#ptop" class="top">Go to top</a></div><hr style="margin-top:40px">
<?php echo '</div>'; ?>
<?php echo '<div class="tab-content" id="tab-features"';
	if ("features" != $active_tab) {
		echo 'style="display:none;"';
	}
	echo '>';
?>
<h3>Increase individual and organizational performance</h3>
<p>Explore the full list of features available in the the latest version of Employee Directory. Click on a feature title to learn more.</p>
<table class="widefat features striped form-table" style="width:auto;font-size:16px">
<tr><td><a href="https://emdplugins.com/?p=10423&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/employeedirectory.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10423&pk_campaign=employee-directory-com&pk_kwd=getting-started">Centralized repository for all staff member information</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10427&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/magnifyingglass.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10427&pk_campaign=employee-directory-com&pk_kwd=getting-started">Best in class search forms for any staff member information</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10425&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/profile-page.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10425&pk_campaign=employee-directory-com&pk_kwd=getting-started">Awesome looking staff member profiles</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10426&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/responsive.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10426&pk_campaign=employee-directory-com&pk_kwd=getting-started">Allow access to employee directory from any device</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10430&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/settings.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10430&pk_campaign=employee-directory-com&pk_kwd=getting-started">Customize employee directory to your needs</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10428&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/brush-pencil.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10428&pk_campaign=employee-directory-com&pk_kwd=getting-started">Extend employee directory with custom fields</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10429&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/celebration.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10429&pk_campaign=employee-directory-com&pk_kwd=getting-started">Milestone Widgets and Views - celebrate and promote staff members</a></td><td></td></tr>
<tr><td><a href="https://emdplugins.com/?p=10616&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/datagrid.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10616&pk_campaign=employee-directory-com&pk_kwd=getting-started">Powerful list grid with ability to export staff profile information to CSV, Excel, JSON and more</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10432&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/org-chart.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10432&pk_campaign=employee-directory-com&pk_kwd=getting-started">Drill down and across employee hierarchies using organization charts </a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=18787&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/automation.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=18787&pk_campaign=employee-directory-com&pk_kwd=getting-started">Workflow: Automate tasks relative to a point or period in time.</a></td><td> - Premium feature</td></tr>
<tr><td><a href="https://emdplugins.com/?p=18788&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/triggers.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=18788&pk_campaign=employee-directory-com&pk_kwd=getting-started">Workflow: Automate tasks when employee or company event records created, modified or deleted.</a></td><td> - Premium feature</td></tr>
<tr><td><a href="https://emdplugins.com/?p=11741&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/attribute-access.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=11741&pk_campaign=employee-directory-com&pk_kwd=getting-started">Limit access to sensitive fields by user role - field level information protection</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=11740&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/frontend_edit.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=11740&pk_campaign=employee-directory-com&pk_kwd=getting-started">Allow updating of all or certain selected fields from the frontend of your site</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=11528&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/alpha-search.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=11528&pk_campaign=employee-directory-com&pk_kwd=getting-started">Allow alphabetical search based on names, departments or job titles</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10781&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/empower-users.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10781&pk_campaign=employee-directory-com&pk_kwd=getting-started">Expand what employee and employee managers can do from plugin settings</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10754&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/visual-search.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10754&pk_campaign=employee-directory-com&pk_kwd=getting-started">Powerful tag cloud search for easy and fast staff searches</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10614&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/dd.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10614&pk_campaign=employee-directory-com&pk_kwd=getting-started">Simply drag and drop to set how you want to display your staff</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10612&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/form-fields.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10612&pk_campaign=employee-directory-com&pk_kwd=getting-started">Make your staff member custom fields searchable</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10611&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/manager.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10611&pk_campaign=employee-directory-com&pk_kwd=getting-started">Create and display employee reporting hierarchy</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10431&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/shop.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10431&pk_campaign=employee-directory-com&pk_kwd=getting-started">Categorize and tag staff members in any way you need</a></td><td> - Premium feature included in Starter edition. Pro includes more powerful features)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10424&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/profile-update.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10424&pk_campaign=employee-directory-com&pk_kwd=getting-started">Let staff members update their own profiles without help</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10613&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/megaphone.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10613&pk_campaign=employee-directory-com&pk_kwd=getting-started">Send customizable emails on new company events, profile changes and new hires</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10615&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/shortcode-builder.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10615&pk_campaign=employee-directory-com&pk_kwd=getting-started">Create and display custom groupings of your staff</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10610&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/events-calendar.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10610&pk_campaign=employee-directory-com&pk_kwd=getting-started">Fully featured, integrated company event management system</a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10440&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/multiple-view.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10440&pk_campaign=employee-directory-com&pk_kwd=getting-started">Beautiful and matching staff member views </a></td><td> - Premium feature (included in Pro)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=18374&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/integrators.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=18374&pk_campaign=employee-directory-com&pk_kwd=getting-started">Keep multiple instances of Employee Directory in sync with each other on demand or schedule basis.</a></td><td> - Add-on</td></tr>
<tr><td><a href="https://emdplugins.com/?p=18306&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/okta.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=18306&pk_campaign=employee-directory-com&pk_kwd=getting-started">Keep Employee records in sync with Okta Universal Directory and Identity Management Systems.</a></td><td> - Add-on</td></tr>
<tr><td><a href="https://emdplugins.com/?p=18305&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/azure-ad.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=18305&pk_campaign=employee-directory-com&pk_kwd=getting-started">Sync Employee records to Employee Directory as they are created, updated or deleted in Microsoft Azure Active Directory on demand or a schedule.</a></td><td> - Add-on</td></tr>
<tr><td><a href="https://emdplugins.com/?p=14799&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/zoomin.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=14799&pk_campaign=employee-directory-com&pk_kwd=getting-started">Powerful dashboard searches for staff member profiles and company events</a></td><td> - Add-on (included both Pro and Enterprise)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=14800&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/csv-impexp.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=14800&pk_campaign=employee-directory-com&pk_kwd=getting-started">CSV import/export - including relationships</a></td><td> - Add-on (included both Pro and Enterprise)</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10956&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/employee-journal.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10956&pk_campaign=employee-directory-com&pk_kwd=getting-started">Employee Journal - Multi level, fully featured employee performance review system</a></td><td> - Add-on</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10443&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/active-directory.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10443&pk_campaign=employee-directory-com&pk_kwd=getting-started">Sync with Microsoft Active Directory or any LDAP server</a></td><td> - Add-on</td></tr>
<tr><td><a href="https://emdplugins.com/?p=10444&pk_campaign=employee-directory-com&pk_kwd=getting-started"><img style="width:128px;height:auto" src="<?php echo EMPD_COM_PLUGIN_URL . "assets/img/vcard.png"; ?>"></a></td><td><a href="https://emdplugins.com/?p=10444&pk_campaign=employee-directory-com&pk_kwd=getting-started">Let users download staff member profiles as vCard</a></td><td> - Add-on (Included in Enterprise only)</td></tr>
</table>
<?php echo '</div>'; ?>
<?php echo '</div>';
}