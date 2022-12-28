<div class="faq-q">
		<div class="window-heading">
			Помощь
		</div>

		<div class="window-body">
			<div class="text-heading">Есть вопросы?</div>
			<div class="contact-us">
				<div class="contact">
					<div class="contact__image">
						<span class="myicon-vk"></span>
					</div>
					<div class="contact__info">
						<div class="contact__title">
							Поддержка VK
						</div>
						<div class="contact__link">
							<a href="https://vk.com/{{$settings->vk_url}}" class="colored-link" target="_blank">vk.com/{{$settings->vk_url}}</a>
						</div>
						<div class="contact-time">
							Среднее время ответа - <span style="color: #fff">15 минут</span>
						</div>
					</div>
					<div class="contact__goto tooltip" title="Перейти">
						<a href="https://vk.com/{{$settings->vk_url}}" target="_blank">
							<span class="fas fa-chevron-down"></span>
						</a>
					</div>
				</div>
				<div class="contact">
					<div class="contact__image">
						<span class="far fa-envelope"></span>
					</div>
					<div class="contact__info">
						<div class="contact__title">
							E-mail поддержка
						</div>
						<div class="contact__link">
							<a href="mailto:{{$settings->support_email}}" class="colored-link" target="_blank">{{$settings->support_email}}</a>
						</div>
						<div class="contact-time">
							Среднее время ответа - <span style="color: #fff">5 часов</span>
						</div>
						<div class="contact__goto tooltip" title="Перейти">
							<a href="mailto:{{$settings->support_email}}" target="_blank">
								<span class="fas fa-chevron-down"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="text-heading" style="margin-top: 20px;">Часто задаваемые вопросы</div>
		
			<div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">
			
			<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>О сайте</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					{{$settings->namesite}} - игры с выводом денег. На сайте доступно 13 игр с увлекательной механикой и высокими выигрышными коэффициентами.
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как играть?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					Перейдите на страницу любой игры, нажмите на кнопку с иконкой <i class="fas fa-info-circle tooltip" title="Информация о игре"></i>, перед вами откроется окно с инструкцией к игре, затем укажите сумму ставки и нажмите "Играть".
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Демо-режим</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					Демо-режим активируется, когда пользователь не авторизован на сайте. Так же демо-счет можно активировать, нажав на иконку <i class="fad fa-coins game_info-icon_info"></i> возле баланса в правом верхнем углу сайта. Он существует только для тренировки - вывести эти средства нельзя, а история игр не будет сохраняться. В этом режиме деньги не списываются и не начисляются, давая возможность попробовать поиграть во все игры, не опасаясь за свой баланс.
				</div>
			
				<div class="help-q ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-collapsed kk ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0" style="border-bottom-width: 1px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как получить бесплатные монеты?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
					<div class="help-a__way">Способ 1</div>
					<p class="help-a__text">Подпишитесь на нашу группу <a href="https://vk.com/{{$settings->vk_url}}" target="_blank" class="colored-link">vk.com/{{$settings->vk_url}}</a> или перейдите на страницу <a href="javascript:void(0)" onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif" class="colored-link">Бонусы</a>.</p>
					<div class="help-a__way">Способ 2</div>
					<p class="help-a__text">Подпишитесь на нашу группу <a href="https://vk.com/{{$settings->vk_url}}" target="_blank" class="colored-link">vk.com/{{$settings->vk_url}}</a>, где ежедневно публикуются промокоды. Активировать промокод можно во вкладке "Промокод" на странице <a href="javascript:void(0)" onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif" class="colored-link">Бонусы</a>.</p>
					<div class="help-a__way">Способ 3</div>
					<p class="help-a__text">Зарегистрируйтесь на сайте по реферальной ссылке и получите приветственный бонус.</p>
					<div class="help-a__way">Способ 4</div>
					<p class="help-a__text">Поднимайте свой уровень и получайте единоразовые бонусы за повышение, а также увеличенные постоянные бонусы.</p>
					<div class="help-a__way">Способ 5</div>
					<p class="help-a__text">Отвечайте на викторины, выполняйте задания и приглашайте рефералов по вашей индивидуальной ссылке.</p>
					<div class="help-a__way">Способ 6</div>
					<p class="help-a__text">Общайтесь в чате, помогайте другим игрокам и получите бонус от администрации в случайное время.</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как конвертируется внутриигровая валюта?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					1 монета = 1 рубль.
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как пополнить счет?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true" style="display: none;">
					Перейдите в свой <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="colored-link">Кошелек</a>, выберите сумму и способ оплаты, ознакомьтесь с комиссиями и нажмите кнопку "Оплатить".
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-11" aria-controls="ui-id-12" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Я пополнил счет, а деньги не пришли</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-12" aria-labelledby="ui-id-11" role="tabpanel" aria-hidden="true" style="display: none;">
					В случае возникновения подобной проблемы напишите в поддержку с указанием: даты платежа, способа оплаты, реквизитов оплаты. Если ваш часовой пояс не UTC+3:00, укажите свой часовой пояс или город/регион проживания.
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-13" aria-controls="ui-id-14" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как вывести деньги?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-14" aria-labelledby="ui-id-13" role="tabpanel" aria-hidden="true" style="display: none;">
					Перейдите в свой <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="colored-link">Кошелек</a>, выберите вкладку "Вывод", выберите способ и сумму вывода, введите свой кошелек, ознакомьтесь с комиссиями и нажмите кнопку "Вывести".
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-15" aria-controls="ui-id-16" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>При выводе появляется ошибка</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-16" aria-labelledby="ui-id-15" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">В случае возникновения ошибки при выводе, внимательно ознакомьтесь с ее содержанием. 
						Как правило, в тексте ошибки указан способ ее устранения. К основным причинам, по которым администрация в праве отказать в выводе, относятся: </p>
					<div class="help-a__way">Причина 1</div>
					<p class="help-a__text">У вас обнаружены мультиаккаунты. Для уточнения дальнейших действий обращайтесь в поддержку.</p>
					<div class="help-a__way">Причина 2</div>
					<p class="help-a__text">Не отыграна сумма пополнений. Пополнение необходимо отыграть в однократном размере на любых режимах на коэффициентах не ниже х1.30.</p>
					<div class="help-a__way">Причина 3</div>
					<p class="help-a__text">Вы указали неверный или подозрительный кошелек для вывода (например, в местном, а не международном формате).</p>
					<div class="help-a__way">Причина 4</div>
					<p class="help-a__text">Вы пытаетесь вывести на анонимный Яндекс.Кошелек. Для устранения этой ошибки измените способ вывода или повысьте статус своего кошелька.</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-17" aria-controls="ui-id-18" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Я произвел вывод, но монеты вернулись на баланс</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-18" aria-labelledby="ui-id-17" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">Такая ситуация означает, что вывод был отменен вручную администрацией сайта. 
						Это редкая ситуация, которая происходит при подозрении на нарушение правил с вашей стороны или неправильно указанный вами кошелек. В таких случаях администрация всегда указывает причину отмены вывода. Ее можно посмотреть в <a href="javascript:void(0)" onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/user?id={{Auth::user()->id}}'); @endif" class="colored-link">Профиле</a> во вкладке "Выплаты" в графе "Статус".</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-19" aria-controls="ui-id-20" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Вывод выполнен, но деньги не пришли</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-20" aria-labelledby="ui-id-19" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">Статус "Успешно" означает, что мы отправили ваш платеж. Между отправкой и зачислением может пройти некоторое время, в среднем около 5 минут. Если средства не приходят долго (более 12 часов) - обратитесь в поддержку.</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-21" aria-controls="ui-id-22" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Нужно ли пополнять счет для вывода?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-22" aria-labelledby="ui-id-21" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Для вывода вам достаточно иметь пополнений на 50 рублей. 
					</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-25" aria-controls="ui-id-26" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как перевести деньги другому игроку?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-26" aria-labelledby="ui-id-25" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Данная возможность не предусмотрена.
					</p>
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-27" aria-controls="ui-id-28" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как создать свой промокод?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-28" aria-labelledby="ui-id-27" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Данная возможность не предусмотрена. 
						Однако, если вы постоянный игрок или партнёр, вы можете обратиться в поддержку с просьбой о создании промокода за счет вашего игрового баланса или за счёт пиара нашего сайта.
					</p>
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-29" aria-controls="ui-id-30" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Нужно ли отыгрывать бонусные деньги?</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-30" aria-labelledby="ui-id-29" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Бесплатные монеты, полученные с помощью бонусов, промокодов (обычных, не на пополнение), а также выданные администрацией, необходимо отыграть в однократном размере на любых режимах на коэффициентах не ниже х1.50.
					</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-31" aria-controls="ui-id-32" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Правила чата</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-32" aria-labelledby="ui-id-31" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						В чате запрещены: <br>
						-&nbsp; Оскорбления в адрес других игроков и администрации, в том числе завуалированные. <br>
						-&nbsp; Ссылки, кошельки. <br>
						-&nbsp; Попрошайничество. <br>
						-&nbsp; Слив промокодов. <br>
						-&nbsp; Спам, любые виды рекламы. <br>
						За нарушение правил администрация в праве лишить вас возможности общения в чате. В некоторых случаях администрация может выдать вам перманентный бан аккаунта.
					</p>
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Честная игра</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					Генератор случайных чисел создает доĸазуемые и абсолютно честные случайные числа, ĸоторые используются для определения результата ĸаждой игры, сыгранной на сайте. Каждый пользователь может проверить исход любой игры полностью детерминированным способом. Предоставляя один параметр - ĸлиентсĸий хэш, на входы генератора случайных чисел, {{$settings->namesite}} не может манипулировать результатами в свою пользу. Генератор случайных чисел {{$settings->namesite}} позволяет ĸаждой игре запрашивать любое ĸоличество случайных чисел из заданного начального числа ĸлиента, начального числа сервера и одноразового номера. Подробнее о том, ĸаĸ это работает вы можете узнать на странице честной игры.
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Партнерская программа</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					Приглашайте других игроĸов на наш сайт по вашей реферальной ссылĸе и зарабатывайте деньги. Подробности вы можете узнать в вашем профиле.
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Дождь/Снег</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
					Дождь или Снег - это бот в чате, который случайное количество раз в день раздает баланс случайным игрокам, которые находятся онлайн на сайте и пополняли баланс за последние 24 часа.
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Викторины</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Викторина может проводится автоматически в виде простых вопросов, либо модераторами сайта. Первый правильно ответивший на вопрос игрок получает вознаграждение.
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Задания</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                 Принимай участие в еженедельных заданиях и выигрывай призы! У каждого задания есть условие, которое требуется выполнить для получения награды. Для участия в задании приобрети одну или несколько попыток. Попытки тратятся после каждой игры независимо от ее результата. Играй в игры как и обычно - мы дадим знать о всем, что требуется: кол-во оставшихся попыток, а так же выполнили ли вы условие или нет!
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Тактики</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                Не существуют тактики, которые гарантированно будут работать. Все зависит от вашего стиля игры: быстро с большим риском или медленно, но уверенно.
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Я передумал выводить</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34" aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Если вывод имеет статус "В процессе", вы можете отменить его в <a href="javascript:void(0)" onclick="$('#b_si').click();" class="colored-link">Профиле</a> во вкладке "Выводы" в графе "Статус", нажав на кнопку отмены.
					</p>
				</div>

                <div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Я проиграл счёт</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                На нашем сайте нет ни одной игры с 100% шансом выигрыша. Даже 99.9% это шанс 1 из 1000, что вы можете проиграть. Например в игре Stairs, ĸогда вы играете на 1 ĸамне - это шанс 1 из 20 (5%), что вы проиграете. Поэтому играя на нашем сайте вы можете ĸаĸ выиграть, таĸ и проиграть. Мы ниĸаĸ не вмешиваемся в игровой процесс, поэтому все зависит тольĸо от вашей удачи. Мы ниĸаĸ не можем подменить результат вашей игры, таĸ ĸаĸ с вашей стороны есть таĸая строчĸа ĸаĸ «Клиентсĸий хэш». Изначально «Клиентсĸий хэш» генерируется автоматичесĸи, но вы всегда можете изменить его и уĸазать туда любые символы. Чтобы проверить результаты своих игр нажмите на любую свою игру в истории и в появившемся оĸне снизу вы увидите поле «Серверный хэш» Чтобы проверить результат игры - вам нужно перейти на страницу "Честной игры", вставить "Серверный хэш" - и вы увидите результат игры. Советуем вам играть аĸĸуратнее. Вырабатывайте свои собственные стили ставок и играйте по ним. Не заигрывайтесь, умейте вовремя остановится и вывести деньги. Азартные игры призваны развлеĸать. Помните, что Вы рисĸуете деньгами, ĸогда делаете ставĸи. Не тратьте больше, чем можете позволить себе проиграть.
				</div>

				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-35" aria-controls="ui-id-36" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Отзывы</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-36" aria-labelledby="ui-id-35" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Отзывы доступны в наших группах в социальных сетях.
					</p>
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-35" aria-controls="ui-id-36" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Вакансии</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-36" aria-labelledby="ui-id-35" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Список вакансий доступен на <a href="/job" class="colored-link">этой странице</a>. Учтите, что он может быть пуст длительное время - нам не всегда требуются новые люди в команду.
					</p>
				</div>
				
				<div class="help-q ui-accordion-header ui-corner-top ui-accordion-header-collapsed  ui-state-default ui-accordion-icons ui-corner-all" role="tab" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Я передумал выводить</div>
				<div class="help-a ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-34" aria-labelledby="ui-id-33" role="tabpanel" aria-hidden="true" style="display: none;">
					<p class="help-a__text">
						Если вывод имеет статус "В процессе", вы можете отменить его в <a href="javascript:void(0)" onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/user?id={{Auth::user()->id}}'); @endif" class="colored-link">Профиле</a> во вкладке "Выводы" в графе "Статус", нажав на кнопку отмены.
					</p>
				</div>

			</div>
		</div>
	</div>