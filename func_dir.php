<?php
function getDirectoryStatus($dir)
{
	$list = ['dirs' => [], 'files' => []];
	if (is_dir($dir)) {
		if ($dh = opendir($dir))

			while (($file = readdir($dh)) !== false) {

				if(in_array($file, ['.', '..']))
				{
					continue;
				}

				$res1 = is_readable($file) ? 'true' : 'false';
				$res2 = is_writable($file) ? 'true' : 'false';

				if (is_dir($file))
				{
					$list['dirs'][$file]['is_readible'] = $res1;
					$list['dirs'][$file]['is_writable'] = $res2;
				} else {
					$list['files'][$file]['is_readible'] = $res1;
					$list['files'][$file]['is_writable'] = $res2;
					$list['files'][$file]['size'] = filesize(getcwd());
				}
			}
		closedir($dh);
	} else {
		unset($list);
	}
	return $list;
	print_r($list);
}
