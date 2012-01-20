<?php 
	$settings = $vars["entity"];
	
	// Allowed extensions
	echo elgg_echo('file_tools:settings:allowed_extensions');
	
	if(!empty($settings->allowed_extensions))	{
		$value = $settings->allowed_extensions;
	} else {
		$value = 'txt,jpg,jpeg,png,bmp,gif,pdf,doc,docx,xls,xlsx,pptx';
	}
	
	echo elgg_view('input/text', array('internalname' => 'params[allowed_extensions]', 'value' => $value)).'<br />';
	
	// Use folder structure
	$options = array('no' => elgg_echo("option:no"), 'yes' => elgg_echo("option:yes"));
	
	?>
	<div>
		<?php echo elgg_echo("file_tools:settings:user_folder_structure"); ?>
	</div>
	<?php 
		echo elgg_view('input/pulldown', array('internalname' => 'params[user_folder_structure]"', 'value' => $settings->user_folder_structure, 'options_values' => $options));
	?>
	<div>
		<?php echo elgg_echo("file_tools:usersettings:time:default"); ?>
	</div>
	<?php
	 
		// Default time view
		$options = array("date" => elgg_echo("file_tools:usersettings:time:date"), "days" => elgg_echo("file_tools:usersettings:time:days"));
	
		echo elgg_view("input/pulldown", array("internalname" => "params[file_tools_default_time_display]", "options_values" => $options, "value" => $settings->file_tools_default_time_display));