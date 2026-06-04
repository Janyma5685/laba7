    <div id="right">

    <div id="info">
    <img src="CSS.png" align="left" alt="CSS">
    <p>CSS используется создателями веб-страниц для задания цветов, шрифтов,
    расположения отдельных блоков и других аспектов представления внешнего вида
    этих веб-страниц. Основной целью разработки CSS являлось разделение описания
    логической структуры веб-страницы (которое производится с помощью HTML или
    других языков разметки) от описания внешнего вида этой веб-страницы (которое
    теперь производится с помощью формального языка CSS). Такое разделение может
    увеличить доступность документа, предоставить большую гибкость и возможность
    управления его представлением, а также уменьшить сложность и повторяемость в
    структурном содержимом.</p>
    </div>

    <div id="reg">
    <?php
    $calcResult = '';
    if (isset($_POST['B3']) && $_POST['T7'] !== '' && $_POST['T8'] !== '') {
      $a = (float)$_POST['T7'];
      $b = (float)$_POST['T8'];
      $op = $_POST['D2'] ?? 'сумма';
      if ($op === 'сумма') {
        $calcResult = $a + $b;
      } elseif ($op === 'среднее') {
        $calcResult = ($a + $b) / 2;
      } elseif ($op === 'максимальное') {
        $calcResult = max($a, $b);
      } elseif ($op === 'минимальное') {
        $calcResult = min($a, $b);
      }
    }
    ?>

    <form method="POST">
		<div align="center">
		<table border="0" width="90%" id="table2">
			<tr>
				<td colspan="3">
		<p align="center">Расчет выражений</p></td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Первое число</span></td>
				<td width="29%"><input type="text" name="T7" size="20" value="<?php echo htmlspecialchars($_POST['T7'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
				<td width="41%">Тип расчета</td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Второе число</span></td>
				<td width="29%"><input type="text" name="T8" size="20" value="<?php echo htmlspecialchars($_POST['T8'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
				<td width="41%"><select size="1" name="D2">
				<option value="сумма" <?php if (($_POST['D2'] ?? 'сумма') === 'сумма') echo 'selected'; ?>>сумма</option>
				<option value="среднее" <?php if (($_POST['D2'] ?? '') === 'среднее') echo 'selected'; ?>>среднее</option>
				<option value="максимальное" <?php if (($_POST['D2'] ?? '') === 'максимальное') echo 'selected'; ?>>максимальное</option>
				<option value="минимальное" <?php if (($_POST['D2'] ?? '') === 'минимальное') echo 'selected'; ?>>минимальное</option>
				</select></td>
			</tr>
			<tr>
				<td width="26%"><span lang="ru">Ответ</span></td>
				<td width="29%"><input type="text" name="T9" size="20" value="<?php echo htmlspecialchars((string)$calcResult, ENT_QUOTES, 'UTF-8'); ?>" readonly></td>
				<td width="41%">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">
				<p align="center">
				<input type="submit" value="Рассчитать" name="B3"></p></td>
			</tr>
		</table>
		</div>
	</form>
  </div>
    </div>
