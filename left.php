	<div id="left">
		<div id="reg">

		<form method="POST">
			<div align="center">
				<table border="0" width="90%" id="table1">
					<tr>
						<td colspan="2">
						<p align="center">Регистрация нового пользователя</p></td>
					</tr>
					<tr>
						<td width="55%">Ваш ник</td>
						<td width="35%"><input type="text" name="T1" size="20" value="<?php echo htmlspecialchars($_POST['T1'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
					</tr>
					<tr>
						<td width="55%">Ваш пароль</td>
						<td width="35%"><input type="password" name="T2" size="20"></td>
					</tr>
					<tr>
						<td width="55%">Ваш пароль еще раз</td>
						<td width="35%"><input type="password" name="T3" size="20"></td>
					</tr>
					<tr>
						<td width="55%">Фамилия</td>
						<td width="35%"><input type="text" name="T4" size="20" value="<?php echo htmlspecialchars($_POST['T4'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
					</tr>
					<tr>
						<td width="55%">Имя</td>
						<td width="35%"><input type="text" name="T5" size="20" value="<?php echo htmlspecialchars($_POST['T5'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
					</tr>
					<tr>
						<td width="55%">Пол</td>
						<td width="35%"><select size="1" name="D1">
						<option value="мужской" <?php if (($_POST['D1'] ?? '') === 'мужской') echo 'selected'; ?>>мужской</option>
						<option value="женский" <?php if (($_POST['D1'] ?? '') === 'женский') echo 'selected'; ?>>женский</option>
						</select></td>
					</tr>
					<tr>
						<td width="55%">Являетесь ли вы студентом/студенткой?</td>
						<td width="35%"><input type="radio" value="V1" <?php if (($_POST['R1'] ?? 'V1') === 'V1') echo 'checked'; ?> name="R1">да
						<input type="radio" name="R1" value="V2" <?php if (($_POST['R1'] ?? '') === 'V2') echo 'checked'; ?>>нет</td>
					</tr>
					<tr>
						<td width="55%">Ваш <span lang="en-us">e-mail</span></td>
						<td width="35%"><input type="text" name="T6" size="20" value="<?php echo htmlspecialchars($_POST['T6'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></td>
					</tr>
					<tr>
						<td width="55%">Получать рассылку с нашего сайта?</td>
						<td width="35%"><input type="checkbox" name="C1" value="ON" <?php if (!empty($_POST['C1'])) echo 'checked'; ?>></td>
					</tr>
				</table>
			</div>
			<p><input type="submit" value="Подтвердить" name="B1"></p>
		</form>

		</div>

		<div id="info">
		<img src="PHP.png" align="left" alt="PHP">
		<p>
		PHP (англ. PHP: Hypertext Preprocessor — «препроцессор гипертекста»;
		первоначально Personal Home Page Tools — «Инструменты для создания
		персональных веб-страниц») — скриптовый язык программирования общего
		назначения, интенсивно применяемый для разработки веб-приложений. В
		настоящее время поддерживается подавляющим большинством хостинг-провайдеров и
		является одним из лидеров среди языков программирования, применяющихся
		для создания динамических веб-сайтов.</p>
		</div>
	</div>
