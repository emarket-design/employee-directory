<?php $real_post = $post;
$ent_attrs = get_option('empd_com_attr_list');
?>
<div id="single-emd-employee-<?php echo get_the_ID(); ?>" class="emd-container emd-employee-wrap single-wrap">
<?php $is_editable = 0; ?>
<div class="notfronteditable">
    <div class="emd-section-type type0 empd-com">
        <div style="padding-bottom:10px;text-align:right;" id="modified-info-block" class=" modified-info-block">
            <div class="textSmall text-muted modified" style="font-size:75%;padding:0 0 5px"><span class="last-modified-text"><?php _e('Last modified', 'empd-com'); ?> </span><span class="last-modified-author"><?php _e('by', 'empd-com'); ?> <?php echo get_the_modified_author(); ?> - </span><span class="last-modified-datetime"><?php echo human_time_diff(strtotime(get_the_modified_date() . " " . get_the_modified_time()) , current_time('timestamp')); ?> </span><span class="last-modified-dttext"><?php _e('ago', 'empd-com'); ?></span></div>
        </div>
        <div class="panel panel-default" >
            <div class="panel-heading" style="position:relative; ">
                <div class="panel-title">
                    <div class='single-header header'>
                        <h1 class='single-entry-title entry-title' style='color:inherit;padding:0;margin-bottom: 15px;border:0 none;word-break:break-word;'>
                            <?php if (emd_is_item_visible('title', 'empd_com', 'attribute', 0)) { ?><span class="single-content title"><?php echo get_the_title(); ?></span><?php
} ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="panel-body" style="clear:both">
                <div class="single-well well emd-employee">
                    <div class="row">
                        <div class="col-sm-<?php if (emd_is_item_visible('ent_employee_photo', 'empd_com', 'attribute', 0)) {
	echo '4 well-left';
} else {
	echo ' hidden';
} ?>">
                            <div class="slcontent emdbox">
                                <?php if (emd_is_item_visible('ent_employee_photo', 'empd_com', 'attribute', 0)) { ?>
                                <div class="img-gallery segment-block ent-employee-photo"><a class="ent-img spotlight" title="<?php echo get_the_title(); ?>" href="<?php if (get_post_meta($post->ID, 'emd_employee_photo')) {
		$sval = get_post_meta($post->ID, 'emd_employee_photo');
		echo wp_get_attachment_url($sval[0]);
	} ?>"><?php if (get_post_meta($post->ID, 'emd_employee_photo')) {
		$sval = get_post_meta($post->ID, 'emd_employee_photo');
		$thumb = wp_get_attachment_image_src($sval[0], 'thumbnail');
		echo '<img class="emd-img thumb" src="' . $thumb[0] . '" width="' . $thumb[1] . '" height="' . $thumb[2] . '" alt="' . get_post_meta($sval[0], '_wp_attachment_image_alt', true) . '"/>';
	} ?></a></div>
                                <?php
} ?>
                            </div>
                        </div>
                        <div class="col-sm-<?php if (emd_is_item_visible('ent_employee_photo', 'empd_com', 'attribute', 0)) {
	echo '8 well-right';
} else {
	echo '12';
} ?>">
                            <div class="srcontent emdbox">
                                <?php if (emd_is_item_visible('ent_employee_phone', 'empd_com', 'attribute', 0)) { ?>
                                <div class="single-content segment-block ent-employee-phone"><i class="fa fa-phone fa-fw text-muted" aria-hidden="true"></i><a href='tel:<?php echo esc_html(emd_mb_meta('emd_employee_phone')); ?>
'><?php echo esc_html(emd_mb_meta('emd_employee_phone')); ?>
</a></div>
                                <?php
} ?><?php if (emd_is_item_visible('ent_employee_extension', 'empd_com', 'attribute', 0)) { ?>
                                <div class="single-content segment-block ent-employee-extension"><i class="fa fa-times fa-fw text-muted" aria-hidden="true"></i><?php echo esc_html(emd_mb_meta('emd_employee_extension')); ?>
</div>
                                <?php
} ?><?php if (emd_is_item_visible('ent_employee_mobile', 'empd_com', 'attribute', 0)) { ?>
                                <div class="single-content segment-block ent-employee-mobile"><i class="fa fa-mobile fa-fw text-muted" aria-hidden="true"></i><?php echo esc_html(emd_mb_meta('emd_employee_mobile')); ?>
</div>
                                <?php
} ?><?php if (emd_is_item_visible('ent_employee_email', 'empd_com', 'attribute', 0)) { ?>
                                <div class="single-content segment-block ent-employee-email"><i class="fa fa-envelope fa-fw text-muted" aria-hidden="true"></i><a href='mailto:<?php echo antispambot(esc_html(emd_mb_meta('emd_employee_email'))); ?>'><?php echo antispambot(esc_html(emd_mb_meta('emd_employee_email'))); ?></a></div>
                                <?php
} ?><?php if (emd_is_item_visible('ent_employee_primary_address', 'empd_com', 'attribute', 0)) { ?>
                                <div class="single-content segment-block ent-employee-primary-address"><i class="fa fa-map-marker fa-fw text-muted" aria-hidden="true"></i> <?php echo esc_html(emd_mb_meta('emd_employee_primary_address')); ?>
</div>
                                <?php
} ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="emd-body-content">
                    <div class="social-links" style="display: flex;">
                        <div class="social" style="display: flex;">
                            <?php if (emd_is_item_visible('ent_employee_facebook', 'empd_com', 'attribute', $is_editable)) { ?>
                            <a style='margin:3px;' href='//<?php echo esc_html(emd_mb_meta('emd_employee_facebook')); ?>
' data-value='//<?php echo esc_html(emd_mb_meta('emd_employee_facebook')); ?>
'><i aria-hidden="true" class="fa fa-facebook fa-fw" style="font-size:20px;"></i></a>
                            <?php
} ?><?php if (emd_is_item_visible('ent_employee_google', 'empd_com', 'attribute', $is_editable)) { ?>
                            <a style='margin:3px;' href='//<?php echo esc_html(emd_mb_meta('emd_employee_google')); ?>
' data-value='//<?php echo esc_html(emd_mb_meta('emd_employee_google')); ?>
'><i aria-hidden="true" class="fa fa-google fa-fw" style="font-size:20px;"></i></a>
                            <?php
} ?><?php if (emd_is_item_visible('ent_employee_twitter', 'empd_com', 'attribute', $is_editable)) { ?>
                            <a style='margin:3px;' href='//<?php echo esc_html(emd_mb_meta('emd_employee_twitter')); ?>
' data-value='//<?php echo esc_html(emd_mb_meta('emd_employee_twitter')); ?>
'><i aria-hidden="true" class="fa fa-twitter fa-fw" style="font-size:20px;"></i></a>
                            <?php
} ?><?php if (emd_is_item_visible('ent_employee_linkedin', 'empd_com', 'attribute', $is_editable)) { ?>
                            <a style='margin:3px;' href='//<?php echo esc_html(emd_mb_meta('emd_employee_linkedin')); ?>
' data-value='//<?php echo esc_html(emd_mb_meta('emd_employee_linkedin')); ?>
'><i aria-hidden="true" class="fa fa-linkedin fa-fw" style="font-size:20px;"></i></a>
                            <?php
} ?><?php if (emd_is_item_visible('ent_employee_github', 'empd_com', 'attribute', $is_editable)) { ?>
                            <a style='margin:3px;' href='//<?php echo esc_html(emd_mb_meta('emd_employee_github')); ?>
' data-value='//<?php echo esc_html(emd_mb_meta('emd_employee_github')); ?>
'><i aria-hidden="true" class="fa fa-github fa-fw" style="font-size:20px;"></i></a>
                            <?php
} ?>
                            <div style='margin:0;display:inline-block'><?php do_action('emd_vcard', 'empd_com', 'emd_employee', $post->ID); ?></div>
                        </div>
                    </div>
                    <div class="tab-container emd-employee-tabcontainer" style="padding:0 5px;width:100%">
                        <?php $tabs = Array(
	'bio',
	'details'
);
$tabs = apply_filters('emd_single_tabs', $tabs, 'empd-com', 'emd_employee', $real_post->ID); ?>
                        <ul class="nav nav-tabs" role="tablist" style="margin:0 0 10px;visibility: visible;padding-bottom:0px;">
                            <?php if (in_array('bio', $tabs)) { ?>
                            <li class=" active "><a id="bio-tablink" href="#bio" role="tab" data-toggle="tab"><?php _e('Bio', 'empd-com'); ?></a></li>
                            <?php
} ?><?php if (in_array('details', $tabs)) { ?>
                            <li><a id="details-tablink" href="#details" role="tab" data-toggle="tab"><?php _e('Details', 'empd-com'); ?></a></li>
                            <?php
} ?>
                        </ul>
                        <div class="tab-content emd-employee-tabcontent">
                            <?php if (in_array('bio', $tabs)) { ?>
                            <div class="tab-pane fade in active" id="bio">
                                <div class="bio-wrap emd-tabcontent-wrap">
                                    <?php if (emd_is_item_visible('content', 'empd_com', 'attribute', 0)) { ?>
                                    <div class="single-content segment-block content"><?php echo $post->post_content; ?></div>
                                    <?php
	} ?> 
                                </div>
                            </div>
                            <?php
} ?><?php if (in_array('details', $tabs)) { ?>
                            <div class="tab-pane fade in " id="details">
                                <div class="details-wrap emd-tabcontent-wrap">
                                    <?php if (emd_is_item_visible('ent_employee_number', 'empd_com', 'attribute', 0)) { ?>
                                    <div class="segment-block ent-employee-number">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Employee No', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo esc_html(emd_mb_meta('emd_employee_number')); ?>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('ent_employee_hiredate', 'empd_com', 'attribute', 0)) { ?>
                                    <div class="segment-block ent-employee-hiredate">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Hire Date', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php if (!empty(emd_mb_meta('emd_employee_hiredate'))) {
			echo date_i18n(get_option('date_format') , strtotime(emd_mb_meta('emd_employee_hiredate')));
		} ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('ent_employee_birthday', 'empd_com', 'attribute', 0)) { ?>
                                    <div class="segment-block ent-employee-birthday">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Birthday', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo mysql2date('F j', emd_translate_date_format($ent_attrs['emd_employee']['emd_employee_birthday'], emd_mb_meta('emd_employee_birthday'))); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('tax_departments', 'empd_com', 'taxonomy', 0)) { ?>
                                    <div class="segment-block tax-departments">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Department', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo emd_get_tax_vals(get_the_ID() , 'departments'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('tax_jobtitles', 'empd_com', 'taxonomy', 0)) { ?>
                                    <div class="segment-block tax-jobtitles">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Job Title', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo emd_get_tax_vals(get_the_ID() , 'jobtitles'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('tax_gender', 'empd_com', 'taxonomy', 0)) { ?>
                                    <div class="segment-block tax-gender">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Gender', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo emd_get_tax_vals(get_the_ID() , 'gender'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('tax_marital_status', 'empd_com', 'taxonomy', 0)) { ?>
                                    <div class="segment-block tax-marital-status">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Marital Status', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo emd_get_tax_vals(get_the_ID() , 'marital_status'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?><?php if (emd_is_item_visible('tax_employment_type', 'empd_com', 'taxonomy', 0)) { ?>
                                    <div class="segment-block tax-employment-type">
                                        <div data-has-attrib="false" class="row">
                                            <div class="col-sm-6 ">
                                                <div class="segtitle"><?php _e('Employment Type', 'empd-com'); ?></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="segvalue"><?php echo emd_get_tax_vals(get_the_ID() , 'employment_type'); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
	} ?> 
                                </div>
                            </div>
                            <?php
} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
</div>
</div><!--container-end-->