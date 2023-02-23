<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Моя первая практика РНР. Молуль 11</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="task">Задание 1. Таблица истинности PHP</div>

	<?php
		$a_zerro = 0;
		$b_zerro = 0;
		$a_one = 1;
		$b_one = 1;
	?>

	<table>
		<tr>
			<th>A</th>
			<th>B</th>
			<th>!A</th>
			<th>A || B</th>
			<th>A && B</th>
			<th>A xor B</th>
		</tr>
		<tr>
			<td><?php echo $a_zerro ?></td>
			<td><?php echo $b_zerro ?></td>
			<td><?php echo !$a1 ?></td>
			<td>
				<?php echo ($a_zerro || $b_zerro) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_zerro && $b_zerro) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_zerro xor $b_zerro) ? 1 :0; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $a_zerro ?></td>
			<td><?php echo $b_one ?></td>
			<td><?php echo !$a_zerro ?></td>
			<td>
				<?php echo ($a_zerro || $b_one) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_zerro && $b_one) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_zerro xor $b_one) ? 1 :0; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $a_one ?></td>
			<td><?php echo $b_zerro ?></td>
			<td>
				<?php echo !$a_one ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one || $b_zerro) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one && $b_zerro) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one xor $b_zerro) ? 1 :0; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo $a_one ?></td>
			<td><?php echo $b_one ?></td>
			<td>
				<?php echo !$a_one ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one || $b_one) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one && $b_one) ? 1 :0; ?>
			</td>
			<td>
				<?php echo ($a_one xor $b_one) ? 1 :0; ?>
			</td>
		</tr>
		</table>
	<div class="task">Задание 2. Таблица сравнения. Гибкое сравнение в РНР</div>

	<?php
		$true = true;
		$false = false;
		$one = 1;
		$zerro = 0;
		$minus_one = -1;
		$txt_one = "1";
		$null = null;
		$php = "php";
	?>

	<table>
		<tr>
			<th></th>
			<th>true</th>
			<th>false</th>
			<th>1</th>
			<th>0</th>
			<th>-1</th>
			<th>"1"</th>
			<th>null</th>
			<th>"php"</th>
		</tr>
		<tr>
			<th>true</th>
			<td><?php echo ($true == $true) ? "true" : "false" ?></td>
			<td><?php echo ($true == $false) ? "true" : "false" ?></td>
			<td><?php echo ($true == $one) ? "true" : "false" ?></td>
			<td><?php echo ($true == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($true == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($true == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($true == $null) ? "true" : "false" ?></td>
			<td><?php echo ($true == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>false</th>
			<td><?php echo ($false == $true) ? "true" : "false" ?></td>
			<td><?php echo ($false == $false) ? "true" : "false" ?></td>
			<td><?php echo ($false == $one) ? "true" : "false" ?></td>
			<td><?php echo ($false == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($false == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($false == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($false == $null) ? "true" : "false" ?></td>
			<td><?php echo ($false == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>1</th>
			<td><?php echo ($one == $true) ? "true" : "false" ?></td>
			<td><?php echo ($one == $false) ? "true" : "false" ?></td>
			<td><?php echo ($one == $one) ? "true" : "false" ?></td>
			<td><?php echo ($one == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($one == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($one == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($one == $null) ? "true" : "false" ?></td>
			<td><?php echo ($one == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>0</th>
			<td><?php echo ($zerro == $true) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $false) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $null) ? "true" : "false" ?></td>
			<td><?php echo ($zerro == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>-1</th>
			<td><?php echo ($minus_one == $true) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $false) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $null) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>"1"</th>
			<td><?php echo ($txt_one == $true) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $false) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $null) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>null</th>
			<td><?php echo ($null == $true) ? "true" : "false" ?></td>
			<td><?php echo ($null == $false) ? "true" : "false" ?></td>
			<td><?php echo ($null == $one) ? "true" : "false" ?></td>
			<td><?php echo ($null == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($null == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($null == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($null == $null) ? "true" : "false" ?></td>
			<td><?php echo ($null == $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>"php"</th>
			<td><?php echo ($php == $true) ? "true" : "false" ?></td>
			<td><?php echo ($php == $false) ? "true" : "false" ?></td>
			<td><?php echo ($php == $one) ? "true" : "false" ?></td>
			<td><?php echo ($php == $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($php == $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($php == $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($php == $null) ? "true" : "false" ?></td>
			<td><?php echo ($php == $php) ? "true" : "false" ?></td>
		</tr>
	</table>
	<div class="task">Задание 2. Таблица сравнения. Жесткое сравнение в РНР</div>
	<table>
		<tr>
			<th></th>
			<th>true</th>
			<th>false</th>
			<th>1</th>
			<th>0</th>
			<th>-1</th>
			<th>"1"</th>
			<th>null</th>
			<th>"php"</th>
		</tr>
		<tr>
			<th>true</th>
			<td><?php echo ($true === $true) ? "true" : "false" ?></td>
			<td><?php echo ($true === $false) ? "true" : "false" ?></td>
			<td><?php echo ($true === $one) ? "true" : "false" ?></td>
			<td><?php echo ($true === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($true === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($true === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($true === $null) ? "true" : "false" ?></td>
			<td><?php echo ($true === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>false</th>
			<td><?php echo ($false === $true) ? "true" : "false" ?></td>
			<td><?php echo ($false === $false) ? "true" : "false" ?></td>
			<td><?php echo ($false === $one) ? "true" : "false" ?></td>
			<td><?php echo ($false === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($false === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($false === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($false === $null) ? "true" : "false" ?></td>
			<td><?php echo ($false === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>1</th>
			<td><?php echo ($one === $true) ? "true" : "false" ?></td>
			<td><?php echo ($one === $false) ? "true" : "false" ?></td>
			<td><?php echo ($one === $one) ? "true" : "false" ?></td>
			<td><?php echo ($one === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($one === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($one === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($one === $null) ? "true" : "false" ?></td>
			<td><?php echo ($one === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>0</th>
			<td><?php echo ($zerro === $true) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $false) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $null) ? "true" : "false" ?></td>
			<td><?php echo ($zerro === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>-1</th>
			<td><?php echo ($minus_one === $true) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $false) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $null) ? "true" : "false" ?></td>
			<td><?php echo ($minus_one === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>"1"</th>
			<td><?php echo ($txt_one === $true) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $false) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $null) ? "true" : "false" ?></td>
			<td><?php echo ($txt_one === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>null</th>
			<td><?php echo ($null === $true) ? "true" : "false" ?></td>
			<td><?php echo ($null === $false) ? "true" : "false" ?></td>
			<td><?php echo ($null === $one) ? "true" : "false" ?></td>
			<td><?php echo ($null === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($null === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($null === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($null === $null) ? "true" : "false" ?></td>
			<td><?php echo ($null === $php) ? "true" : "false" ?></td>
		</tr>
		<tr>
			<th>"php"</th>
			<td><?php echo ($php === $true) ? "true" : "false" ?></td>
			<td><?php echo ($php === $false) ? "true" : "false" ?></td>
			<td><?php echo ($php === $one) ? "true" : "false" ?></td>
			<td><?php echo ($php === $zerro) ? "true" : "false" ?></td>
			<td><?php echo ($php === $minus_one) ? "true" : "false" ?></td>
			<td><?php echo ($php === $txt_one) ? "true" : "false" ?></td>
			<td><?php echo ($php === $null) ? "true" : "false" ?></td>
			<td><?php echo ($php === $php) ? "true" : "false" ?></td>
		</tr>
	</table>
</body>
</html>