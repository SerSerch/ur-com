<section class="section-box section-calcul mt-50" id="calcul">
	<div class="container">
		<div class="calcul-fon">
			<h2 class="calcul-title">Калькулятор</h2>
			<div class="calcul-sub-title">
				Рассчитайте стоимость бухгалтерского обслуживания
			</div>
			<form id="mycalcul" method="post">
				<label class="label-title">
					<strong>Выберете организационно-правовую форму</strong>
				</label>
				<div class="form-group">
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-1-1" checked="" name="formChack-1" value="1">
						<label class="custom-control-label" for="formCheck-1-1">ИП</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-1-2" name="formChack-1" value="2">
						<label class="custom-control-label" for="formCheck-1-2">ООО</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-1-3" name="formChack-1" value="2">
						<label class="custom-control-label" for="formCheck-1-3">Другое</label>
					</div>
				</div>

				<label class="label-title">
					<strong>Ваша система налогообложения</strong>
				</label>
				<div class="form-group">
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-1" checked="" name="formChack-2" value="1">
						<label class="custom-control-label" for="formCheck-2-1">ОСНО</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-2" name="formChack-2" value="2">
						<label class="custom-control-label" for="formCheck-2-2">УСН</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-3" name="formChack-2" value="3">
						<label class="custom-control-label" for="formCheck-2-3">ЕНВД</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-4" name="formChack-2" value="4">
						<label class="custom-control-label" for="formCheck-2-4">ОСНО + ЕНВД</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-5" name="formChack-2" value="5">
						<label class="custom-control-label" for="formCheck-2-5">УСН + ЕНВД</label>
					</div>
				</div>	
		
				<div class="form-group">
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-6" name="formChack-2" value="6">
						<label class="custom-control-label" for="formCheck-2-6">Нулевая отчетность УСН</label>
					</div>
					<div class="custom-control custom-control-inline custom-radio">
						<input class="custom-control-input" type="radio" id="formCheck-2-7" name="formChack-2" value="7">
						<label class="custom-control-label" for="formCheck-2-7">Нулевая отчетность ОСНО</label>
					</div>
				</div>
	
				<div class="form-row">
					<div class="form-row">
						<label class="label-title">
							<strong>Количество сотрудников</strong> 
						</label>
					</div>
					<div class="form-group range-field">
						<span class="range-field__start">0</span>
						<input class="custom-range custom-range1" type="range" value="0" min="0" max="100" step="1">
						<input class="form-control calcul-number" type="number" id="calcul-number-1" value="0" min="0" max="100" step="1" placeholder="0" name="formChack-3">
						<span class="range-field__end">100</span>
					</div>
					<div class="form-row">
						<label class="label-title">
							<strong>Количество операций</strong>
							<br>
						</label>
					</div>
					<div class="form-group range-field">
						<span class="range-field__start">0</span>
						<input class="custom-range custom-range2" type="range" value="0" min="0" max="500" step="1">
						<input class="form-control calcul-number" type="number" id="calcul-number-2" value="0" min="0" max="500" step="1" placeholder="0" name="formChack-4">
						<span class="range-field__end">500</span>
					</div>

				</div>
				<div class="clearfix"></div>
				<div class="calcul-fon__bottom">
					<div class="contenInput-box contenInput-box-1">
						<div id="contenInput">Ваша цена: <span>800 руб.</span>
						</div>
					</div>
					<div class="contenInput-box-2 text-center">
						<button type="button" class="button b24-web-form-popup-btn-4">Воспользуйтесь нашим предложением</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>