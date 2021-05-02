<?php
/**
 * Settings Glossary Functions
 *
 * @package EMPD_COM
 * @since WPAS 4.0
 */
if (!defined('ABSPATH')) exit;
add_action('empd_com_settings_glossary', 'empd_com_settings_glossary');
/**
 * Display glossary information
 * @since WPAS 4.0
 *
 * @return html
 */
function empd_com_settings_glossary() {
	global $title;
?>
<div class="wrap">
<h2><?php echo $title; ?></h2>
<p><?php _e('Employee directory WordPress plugin provides an easy to use and maintain solution for any organization needing a centralized company directory.', 'empd-com'); ?></p>
<p><?php _e('The below are the definitions of entities, attributes, and terms included in Employee Directory.', 'empd-com'); ?></p>
<div id="glossary" class="accordion-container">
<ul class="outer-border">
<li id="emd_employee" class="control-section accordion-section open">
<h3 class="accordion-section-title hndle" tabindex="1"><?php _e('Employees', 'empd-com'); ?></h3>
<div class="accordion-section-content">
<div class="inside">
<table class="form-table"><p class"lead"><?php _e('Employees are staff members working for your organization.', 'empd-com'); ?></p><tr><th style='font-size: 1.1em;color:cadetblue;border-bottom: 1px dashed;padding-bottom: 10px;' colspan=2><div><?php _e('Attributes', 'empd-com'); ?></div></th></tr>
<tr>
<th><?php _e('Full Name', 'empd-com'); ?></th>
<td><?php _e(' Full Name is a required field. Full Name is filterable in the admin area. Full Name does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Bio', 'empd-com'); ?></th>
<td><?php _e(' Bio does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Photo', 'empd-com'); ?></th>
<td><?php _e('Photo of the employee. 250x250 is the preferred size. Photo does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Featured', 'empd-com'); ?></th>
<td><?php _e('Sets employee as featured which can be used to select employees in available views using Visual Shortcode Builder and Featured employee widget. Featured does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Employee No', 'empd-com'); ?></th>
<td><?php _e('The unique identifier for an employee Employee No is a required field. Being a unique identifier, it uniquely distinguishes each instance of Employee entity. Employee No is filterable in the admin area. Employee No does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Hire Date', 'empd-com'); ?></th>
<td><?php _e('Date the employee is hired Hire Date is filterable in the admin area. Hire Date does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Birthday', 'empd-com'); ?></th>
<td><?php _e(' Birthday is filterable in the admin area. Birthday does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Mailing Address', 'empd-com'); ?></th>
<td><?php _e('Primary mailing address of an employee Mailing Address does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Phone', 'empd-com'); ?></th>
<td><?php _e(' Phone is filterable in the admin area. Phone does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Extension', 'empd-com'); ?></th>
<td><?php _e(' Extension is filterable in the admin area. Extension does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Mobile', 'empd-com'); ?></th>
<td><?php _e(' Mobile is filterable in the admin area. Mobile does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Email', 'empd-com'); ?></th>
<td><?php _e(' Email is filterable in the admin area. Email does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Facebook', 'empd-com'); ?></th>
<td><?php _e(' Facebook does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Google+', 'empd-com'); ?></th>
<td><?php _e(' Google+ does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Twitter', 'empd-com'); ?></th>
<td><?php _e(' Twitter does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Linkedin', 'empd-com'); ?></th>
<td><?php _e(' Linkedin does not have a default value. ', 'empd-com'); ?></td>
</tr>
<tr>
<th><?php _e('Github', 'empd-com'); ?></th>
<td><?php _e(' Github is filterable in the admin area. Github does not have a default value. ', 'empd-com'); ?></td>
</tr><tr><th style='font-size:1.1em;color:cadetblue;border-bottom: 1px dashed;padding-bottom: 10px;' colspan=2><div><?php _e('Taxonomies', 'empd-com'); ?></div></th></tr>
<tr>
<th><?php _e('Department', 'empd-com'); ?></th>

<td><?php _e(' Department accepts multiple values like tags', 'empd-com'); ?>. <?php _e('Department does not have a default value', 'empd-com'); ?>.<div class="taxdef-block"><p><?php _e('There are no preset values for <b>Department.</b>', 'empd-com'); ?></p></div></td>
</tr>

<tr>
<th><?php _e('Job Title', 'empd-com'); ?></th>

<td><?php _e(' Job Title accepts multiple values like tags', 'empd-com'); ?>. <?php _e('Job Title does not have a default value', 'empd-com'); ?>.<div class="taxdef-block"><p><?php _e('The following are the preset values for <b>Job Title:</b>', 'empd-com'); ?></p><p class="taxdef-values"><?php _e('Product Manager', 'empd-com'); ?>, <?php _e('Sales Manager', 'empd-com'); ?>, <?php _e('Agent', 'empd-com'); ?>, <?php _e('Contractor', 'empd-com'); ?>, <?php _e('Analyst', 'empd-com'); ?>, <?php _e('Developer', 'empd-com'); ?>, <?php _e('Director', 'empd-com'); ?>, <?php _e('CEO', 'empd-com'); ?>, <?php _e('President', 'empd-com'); ?>, <?php _e('CFO', 'empd-com'); ?>, <?php _e('HR Manager', 'empd-com'); ?></p></div></td>
</tr>

<tr>
<th><?php _e('Gender', 'empd-com'); ?></th>

<td><?php _e(' Gender accepts multiple values like tags', 'empd-com'); ?>. <?php _e('Gender does not have a default value', 'empd-com'); ?>.<div class="taxdef-block"><p><?php _e('The following are the preset values for <b>Gender:</b>', 'empd-com'); ?></p><p class="taxdef-values"><?php _e('Male', 'empd-com'); ?>, <?php _e('Female', 'empd-com'); ?>, <?php _e('Other', 'empd-com'); ?></p></div></td>
</tr>

<tr>
<th><?php _e('Marital Status', 'empd-com'); ?></th>

<td><?php _e(' Marital Status accepts multiple values like tags', 'empd-com'); ?>. <?php _e('Marital Status does not have a default value', 'empd-com'); ?>.<div class="taxdef-block"><p><?php _e('The following are the preset values for <b>Marital Status:</b>', 'empd-com'); ?></p><p class="taxdef-values"><?php _e('Single', 'empd-com'); ?>, <?php _e('Married', 'empd-com'); ?></p></div></td>
</tr>

<tr>
<th><?php _e('Employment Type', 'empd-com'); ?></th>

<td><?php _e(' Employment Type accepts multiple values like tags', 'empd-com'); ?>. <?php _e('Employment Type does not have a default value', 'empd-com'); ?>.<div class="taxdef-block"><p><?php _e('The following are the preset values for <b>Employment Type:</b>', 'empd-com'); ?></p><p class="taxdef-values"><?php _e('Full Time', 'empd-com'); ?>, <?php _e('Part Time', 'empd-com'); ?></p></div></td>
</tr>
</table>
</div>
</div>
</li>
</ul>
</div>
</div>
<?php
}