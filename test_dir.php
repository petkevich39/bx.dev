<?php

require_once('func_dir.php');

function assertEquals($result)
{

	if($result != null)
	{
		foreach ($result['dirs'] as $res => $v)
		{

			if ($v['is_readible'] === 'true' ||
				$v['is_readible'] === 'false' &&
				$v['is_writable'] === 'true' ||
				$v['is_writable'] === 'false')
			{
				echo 'dirs - passed'.PHP_EOL;

			}
			else
			{
				echo 'dirs - failed'.PHP_EOL;
				echo 'Ошибка здесь:'.PHP_EOL.$res.PHP_EOL;
			}

		}
		foreach ($result['files'] as $res => $v)
		{

			if ($v['is_readible'] === 'true' ||
				$v['is_readible'] === 'false' &&
				$v['is_writable'] === 'true' ||
				$v['is_writable'] === 'false')
			{
				if (is_numeric($v['size']) && $v['size'] != null)
				{
					echo 'files - passed'.PHP_EOL;
				}
			}
			else
			{
				echo 'files - failed'.PHP_EOL;
				echo 'Ошибка здесь:'.PHP_EOL.$res.PHP_EOL;
			}

		}
	}
	else {
		echo 'такого пути не существует!';
	}
}



$result = getDirectoryStatus("..");
assertEquals($result);


$result = getDirectoryStatus(getcwd());
assertEquals($result);


$result = getDirectoryStatus("./erwrwerwe/");
assertEquals($result);


