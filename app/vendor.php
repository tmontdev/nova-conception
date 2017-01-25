<?php
/**
 * Include all files from folder
 *
 * @param $folder
 */
function include_all_php($folder){
	foreach (glob("{$folder}/*.php") as $filename)
	{
		include $filename;
	}
}

include_all_php(get_template_directory()."/app/PostTypes");