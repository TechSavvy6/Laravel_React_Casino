<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$settings->namesite}} официальный сайт – сервис мгновенных игр</title>
    <meta name="description" content="{{$settings->namesite}} - Официальный сайт ⚡ Плей 2х. Все комиссии берем на себя, бонус при регистрации. ⭐ Произведем выплаты за 24 часа на любую платежную систему." />
    <meta name="keywords" content="{{$settings->keywords}}">
	<link rel="canonical" href="https://betsplay2x.fun" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo.png') }}">

    <meta name="theme-color" content="#000000">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$settings->namesite}} официальный сайт – сервис мгновенных игр">
    <meta property="og:description" content="{{$settings->namesite}} - Официальный сайт ⚡ Плей 2х. Все комиссии берем на себя, бонус при регистрации. ⭐ Произведем выплаты за 24 часа на любую платежную систему.">
    <meta property="og:image" content="{{ asset('/img/logo.jpg') }}">
    <meta property="og:url" content="https://betsplay2x.fun">
    <meta property="business:contact_data:country_name" content="Russia">

   <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/dark.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/home.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/tooltipster-sideTip-punk.min.css') }}">
			<link rel="stylesheet" href="{{ asset('/css/tooltipster.bundle.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/offline-theme-default.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/offline-theme-language.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/payment.css') }}">
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.nanoscroller.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.animateNumber.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/slick.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('/js/vendor/offline.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/winwheel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/emojione.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/emojionearea.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/chart.bundle.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/vendor/jquery.plugin.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/vendor/jquery.countdown.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('/js/vendor/tooltipster.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/vendor/moment.min.js') }}"></script>
</head>
<body>
<!--- Preloader --->
<div class="pageLoader">
   <div class="loader-main">
                <div></div>
            </div>
        </div>
<!--- Preloader --->

    @php
        $overlayside = function($game) {
            if(!\App\Game::isDisabled($game)) echo "load('/".$game."')";
            else echo "$('.md-unavailable').toggleClass('md-show', true)";
        };
    @endphp

<div class="sidebar">
            <div class="fixed">
                <div class="games os-host-flexbox os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible"><div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                                                                    <div onclick="{{$overlayside('mines')}}" data-game="mines" class="game" data-toggle="tooltip" data-placement="right" title="Mines" data-page-trigger="'/mines'" data-toggle-class="active">
                            <i class="fas fa-bomb"></i>
                        </div>
                                                                    <div onclick="{{$overlayside('dice')}}" data-game="dice" class="game" data-toggle="tooltip" data-placement="right" title="Dice" data-page-trigger="'/dice'" data-toggle-class="active" data-original-title="Dice">
                            <i class="fa fa-dice"></i>
                        </div>
                                                                    <div onclick="{{$overlayside('wheel')}}" data-game="wheel" class="game" data-toggle="tooltip" data-placement="right" title="Wheel" data-page-trigger="'/wheel'" data-toggle-class="active">
                            
                        <i class="fad fa-circle-notch"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('coinflip')}}" data-game="coinflip" class="game" data-toggle="tooltip" data-placement="right" title="Coinflip" data-page-trigger="'/coinflip'" data-toggle-class="active">
                            <i class="fas fa-coin"></i>
                        </div>
                                                                    <div onclick="{{$overlayside('tower')}}" data-game="tower" class="game" data-toggle="tooltip" data-placement="right" title="Tower" data-page-trigger="'/tower'" data-toggle-class="active">
                            <i class="fad fa-chess-rook"></i>
                        </div>
                                                                    <div onclick="{{$overlayside('keno')}}" data-game="keno" class="game" data-toggle="tooltip" data-placement="right" title="Keno" data-page-trigger="'/keno'" data-toggle-class="active">
                            
                        <i class="icon-keno"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('stairs')}}" data-game="stairs" class="game" data-toggle="tooltip" data-placement="right" title="Stairs" data-page-trigger="'/stairs'" data-toggle-class="active">
                            
                        <i class="icon-stairs"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('blackjack')}}" data-game="blackjack" class="game" data-toggle="tooltip" data-placement="right" title="Blackjack" data-page-trigger="'/blackjack'" data-toggle-class="active">
                            
                        <i class="icon-blackjack"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('roulette')}}" data-game="roulette" class="game" data-toggle="tooltip" data-placement="right" title="Roulette" data-page-trigger="'/roulette'" data-toggle-class="active">
                            
                       <i class="icon-roulette"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('crash')}}" data-game="crash" class="game" data-toggle="tooltip" data-placement="right" title="Crash" data-page-trigger="'/crash'" data-toggle-class="active">
                            
                        <i class="icon-crash"></i>
                    
                        </div>
                                                                    <div onclick="{{$overlayside('hilo')}}" data-game="hilo" class="game" data-toggle="tooltip" data-placement="right" title="HiLo" data-page-trigger="'/hilo'" data-toggle-class="active">
                            
                        <i class="icon-hilo"></i>
                    
                        </div>
						
						<div onclick="{{$overlayside('plinko')}}" data-game="plinko" class="game" data-toggle="tooltip" data-placement="right" title="Plinko" data-page-trigger="'/plinko'" data-toggle-class="active">
                            
                        <i class="fas fa-ball-pile"></i>
                    
                        </div>
						                                                                    <div onclick="{{$overlayside('cases')}}" data-game="cases" class="game" data-toggle="tooltip" data-placement="right" title="Cases" data-page-trigger="'/cases'" data-toggle-class="active">
                            <i class="fad fa-box-open"></i>                         @if(\App\Box::isFreeAvailable())
                            <div class="gg_sidebar-notification-side">1</div>
                        @endif
                        </div>
						 <div @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif data-game="bonus" class="game" data-toggle="tooltip" data-placement="right" title="Bonus" data-page-trigger="'/bonus'" data-toggle-class="active">
                            <i class="fad fa-coins"></i>
                        </div>
                                                        </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="height: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
                <div class="game theme-switcher">
					<br>
		<li>
        <a href="https://vk.com/{{$settings->vk_url}}" target="_blank" class="game mode mode_white tooltip-game tooltipstered">
          <i class="myicon-vk" style="color:white;opacity:1;"></i>
        </a>
      </li>
                </div>
            </div>
        </div>
    <div class="chat" data-role="<?= Auth::guest() ? '-1' : Auth::user()->chat_role ?>" style="min-width: 0; width: 0;">
        <div class="chat_header">
            <span>Онлайн чат</span>
                <div class="chat_event_timer tooltip tooltipstered" title="Online" style="display: none; right: unset;"><span id="online">Offline</span></div>
        </div>
        <div class="chat_messages">
            @if(Auth::guest() || Auth::user()->is_chat_banned == 0)
            <div class="chat_status" style="opacity: 0">
                <div class="chat_loader">
                    <div class="loader-15"></div>
                </div>
                <span>Подключение...</span>
            </div>
            @else
                <div class="chat_banned">
                    Вы были заблокированы модератором
                    <br>
                    за нарушение правил чата.
                    @if(Auth::user()->chat_total_bans <= 3)
                        <br><br>
                        <div class="unban_btn" onclick="unban_chat()">Разблокировать за <?= Auth::user()->chat_total_bans * 50 ?> ₽</div>
                    @endif
                </div>
            @endif
            <div class="nano" id="chat_nano">
                <div id="chat" class="nano-content"></div>
            </div>
        </div>
        <div class="chat_input" style="opacity: 0">
            @if(!Auth::guest())
                @if(Auth::user()->mute > time())
                    <div class="chat_banned">
                        Чат заблокирован до
                        @php
                            $date = new \DateTime('now', new \DateTimeZone('Etc/GMT-3'));
                            $date->setTimestamp(Auth::user()->mute);
                            echo $date->format('d.m.Y H:i');
                        @endphp
                    </div>
                @else
                    <div class="textarea_sidebar_i">
                        <textarea class="b_input_s b_textarea" rows="2" id="chat_message" placeholder="Введите сообщение..."></textarea>
                    </div>
                    <div class="textarea_sidebar">
                        <div onclick="$('.emojionearea-button').click()"><i class="far fa-smile"></i></div>
                        <div id="chat_send" data-user-level="{{ Auth::guest() ? 1 : Auth::user()->level }}" data-user-id="{{ Auth::user()->id }}"><i class="fab fa-telegram-plane"></i></div>
                        @if(!Auth::guest() && Auth::user()->chat_role == 2 || Auth::user()->chat_role == 3)
                            <div class="chat_mod_special_send tooltip" title="Создать викторину" onclick="newSpecial()"><i class="fad fa-microphone-stand"></i></div>
                        @endif
                        @if(!Auth::guest() && Auth::user()->chat_role == 3)
                            <div class="chat_mod_drop_send tooltip" title="Снег/Дождь" onclick="newDrop()"><i class="fad fa-snowflake"></i></div>
                        @endif
                    </div> 
                @endif
            @else
                <div class="chat_banned">
                    Для общения в чате<br>требуется авторизация.<br>
                    <div class="unban_btn" onclick="$('#b_si').click();">Вход</div><br><br>
                </div>
            @endif
        </div>
    </div>
	<header>
	<div class="navbar">
 
    <a class="navbar-brand" onclick="load('/')">
      <img src="/img/logo_transparent.png" alt="">
    </a>

    <div class="menu">
      <ul class="menu__list">
        <li class="menu__list-item"><a onclick="load('/')" class="menu__list-item__link">Игры</a></li>
        <li class="menu__list-item"><a href="javascript:void(0)" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/bonus')" @endif class=" menu__list-item__link">Бонусы</a></li>
		        <li class="menu__list-item"><a href="javascript:void(0)" @if(Auth::guest()) onclick="$('#b_si').click();" @else onclick="load('/tasks')" @endif class=" menu__list-item__link">Задания</a></li>
        <li class="menu__list-item"><a onclick="location.href='https://vk.com/{{$settings->vk_url}}'" class=" menu__list-item__link">Группа ВК</a></li>
        <li class="menu__list-item"><a href="javascript:void(0)" onclick="provablyfair()" class=" menu__list-item__link">Честная игра</a></li>
        <li class="menu__list-item"><a onclick="load('/faq')" class=" menu__list-item__link">Помощь</a></li>
		@if(!Auth::guest() && Auth::user()->chat_role === 3)
		<li class="menu__list-item"><a onclick="location.href='/admin'" class=" menu__list-item__link">Админ-Панель</a></li>
	@endif
	@if(!Auth::guest() && Auth::user()->chat_role === 2)
		<li class="menu__list-item"><a onclick="location.href='/admin'" class=" menu__list-item__link">Модер-Панель</a></li>
	@endif
      </ul>
    </div>
                @if(Auth::guest())
    <div class="user">
            <a id="b_si" onclick="$('[data-auth-action=\'auth\']').click(); $('.md-auth').toggleClass('md-show', true)" class="btn-vk">
        <i class="myicon-high-five"></i> Авторизация
      </a>
          </div>
		          <a class="menu-button chat-toggle btn-toggle3" type="button">
      <i class="myicon-chat" onclick="swapChat()"></i>
    </a>
		  @else		  
		  <div class="user">
            <div class="profile-component">
        <div class="money-block">
          <span class="money-block__money-icon myicon-coins tooltip" title="Переключение режима" id="game_demo" onclick="game_demo"></span>
          <span id="money" class="money-block__money-area">{{Auth::user()->money}}</span>
		  <style>
		  .money-block__money-area-demo {
font-size:15px;
}
		  .money-block__money-area-demo {
    color: #fff;
    font-weight: 800;
    background: #272d39d1;
    cursor: default;
    display: inline-block;
    width: 250px;
    font-size: 16px;
    border-radius: 6px;
    padding: 0 10px 0 45px;
    height: 40px;
    line-height: 41px;
}
@media(max-width: 991px) {
    .money-block__money-icon{
        left: 10px;
    }
    .money-block__money-area-demo{
        padding: 0px 10px 0 36px;
    }
.money-block__money-area-demo {
width:210px;
}
}
@media (max-width: 780px) {
.money-block__money-area-demo {
    width: 200px;
}
}

@media(max-width: 359px) {

.money-block__money-area-demo {
font-size:15px;
}

.money-block__money-area-demo {
width:190px;
}
}
.money-block__actions-demo {
    position: absolute;
    top: 0;
    right: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
}
	</style>
		  <div class="money-block__money-area-demo" style="display: none;"><i class="far fa-infinity"></i></div>
          <div class="money-block__actions">
            <a onclick="$('.md-wallet').toggleClass('md-show', true)" class="wallet-link" id="_payin">
              Кошелек
            </a>
          </div>
		  <div class="money-block__actions-demo" style="display: none;">
            <a class="wallet-link">Демо &nbsp;&nbsp;</a>
          </div>
        </div>
      </div>
          </div>
		  <a id="notifications" class="menu-button profile-notifications active" onclick="if(chat) swapChatAll();">
      <i class="far fa-bell"></i>
	  <div data-watch-disable-loader="true" data-watch-fragment="/fragment.notifications_counter"></div>
	  <div class="header_notifications_window no-select" data-visible="false" style="display: none">
                                <div class="header_notification_header">
                                    Уведомления
                                    <i class="header_notifications_close fal fa-times"></i>
                                </div>
                                <div class="nano">
                                    <div class="nano-content" data-watch-disable-loader="true" data-watch-fragment="/fragment.notifications"></div>
                                </div>
                            </div>
    </a>
		  <a class="menu-button profile-link active" onclick="load('/user?id={{Auth::user()->id}}')">
      <i class="myicon-user"></i>
    </a>
    
        <a class="menu-button chat-toggle btn-toggle3" type="button" onclick="swapChat()">
      <i class="myicon-chat"></i>
    </a>

  </div>
  @endif
	</header>
    <main>
        <div class="game">
            <div class="container container_full-width">
                <div id="_ajax_content_">
                    {!! html_entity_decode($page) !!}
                </div>
            </div>
        </div>
    </main>
    <noindex>
        <div class="ll_container">
            <div class="container">
                <div class="ll_header">
                    <div class="pulsating-circle"></div>
                    <span>LIVE</span>
                </div>
                <div>
                    <table class="live_table" id="ll">
                        <thead>
                            <tr class="live_table-header">
                                <th>ИГРА</th>
                                <th>ИГРОК</th>
                                <th class="hidden-xs">ВРЕМЯ</th>
                                <th class="hidden-xs">СТАВКА</th>
                                <th class="hidden-xs">КОЭФФ.</th>
                                <th>ВЫИГРЫШ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Http\Controllers\GeneralController::get_drop() as $d)
                            @if($d['game_id'] == 12 && floatval($d['amount']) <= 0) @continue @endif

                            <tr class="live_table-game">
                                <th>
                                    <div class="live_table-animated">
                                        <div class="ll_icon hidden-xs" onclick="load('/{{strtolower($d['name'])}}')">
                                            <i class="{{$d['icon']}}"></i>
                                        </div>
                                        <div class="ll_game">
                                            <span onclick="@if($d['game_id'] != 12) load('/{{strtolower($d['name'])}}'); @else load('/cases'); @endif">{{$d['name']}}</span>
                                            @if($d['game_id'] != 12) <p onclick="user_game_info({{$d['id']}})">Просмотр</p>
                                            @else <p onclick="load('/cases')">Перейти</p> @endif
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="live_table-animated">
                                        <a class="ll_user" href="/user?id={{$d['user_id']}}">
                                            {{$d['username']}}
                                        </a>
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                        {{!isset($d['time']) || $d['time'] == null ? '' : $d['time']}}
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                        {{$d['bet']}} &nbsp;<i class="fad fa-coins"></i>
                                    </div>
                                </th>
                                <th class="hidden-xs">
                                    <div class="live_table-animated">
                                     <!--   @if($d['game_id'] != 12) x{{$d['mul']}} @endif --->
                                @if($d['game_id'] == 12) — @endif 
								@if($d['game_id'] != 12) x{{$d['mul']}} @endif
                                    </div>
                                </th>
                                <th>
                                    <div class="live_table-animated">
                                        @if($d['status'] == 1) +{{$d['amount']}} &nbsp;<i class="fad fa-coins"></i> @else 0.00 &nbsp;<i class="fad fa-coins"></i> @endif
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </noindex>
	<div class="mobile-menu">
    <div class="mobile-menu__contents">
      <div style="display: none;" class="mobile-menu__submenu mobile-menu__submenu_games">
        <div class="mobile-menu__submenu__vertical-divider"></div>
      </div>
      <a onclick="load('/')" data-submenu="mobile-menu__submenu_games" class="open-submenu mobile-menu__link">
        <span class="fal fa-gamepad mobile-menu__link-icon"></span>
        Игры
      </a>
	  @if(!Auth::guest())
      <a onclick="load('/user?id={{Auth::user()->id}}')" class="mobile-menu__link ">
        <span class="fal fa-user-alt mobile-menu__link-icon lightable"></span>
        Профиль
      </a>
	  @endif
      <a onclick="swapChat()" class="btn-toggle3 mobile-menu__link">
        <span class="fal fa-comment-alt-lines mobile-menu__link-icon"></span>
        Чат
      </a>
      
      <a onclick="@if(Auth::guest()) $('#b_si').click(); @else load('/bonus'); @endif" class="mobile-menu__link ">
        <span class="fal fa-coins mobile-menu__link-icon"></span>
        Бонус
      </a>
     	  @if(!Auth::guest())
	 <a onclick="swapMenu()" data-submenu="mobile-menu__submenu_more" class="open-submenu mobile-menu__link">
        <span class="myicon-menu mobile-menu__link-icon"></span>
        Еще
      </a>
	  @endif
	       	  @if(Auth::guest())
	  <a onclick="load('/faq')" class="mobile-menu__link ">
        <span class="fal fa-info-square mobile-menu__link-icon"></span>
        Помощь
      </a>
	  @endif
	  <div style="display: none;" class="mobile-menu__submenu mobile-menu__submenu_more">
        <div class="mobile-menu__submenu__vertical-divider"></div>
        <div class=" mobile-menu__submenu-item mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance">
          <a href="javascript:void(0)" onclick="load('/tasks')" class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
            <div class="mobile-menu__submenu-item__link-wrapper">
              <span class="mobile-menu__submenu-item__link-icon fal fa-tasks"></span>
              <div class="mobile-menu__submenu-item__link__right">
                <div class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">Задания</div>
              </div>
            </div>
          </a>
        </div>


        <div class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item mobile-menu__submenu-item_last-in-row">
          <a href="javascript:void(0)" onclick="load('/reviews')" class="mobile-menu__submenu-item__link">
            <div class="mobile-menu__submenu-item__link-wrapper">
              <span class="mobile-menu__submenu-item__link-icon myicon-customer-review"></span>
              <div class="mobile-menu__submenu-item__link__right">
                <div class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">Отзывы</div>
              </div>
            </div>
          </a>
        </div>



        <div class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item">
          <a href="javascript:void(0)" onclick="provablyfair()" class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
            <div class="mobile-menu__submenu-item__link-wrapper">
              <span class="mobile-menu__submenu-item__link-icon myicon-high-five"></span>
              <div class="mobile-menu__submenu-item__link__right">
                <div class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">Честная игра</div>
              </div>
            </div>
          </a>
        </div>



        <div class=" mobile-menu__submenu-item_usual-icons mobile-menu__submenu-item__games-no-balance mobile-menu__submenu-item mobile-menu__submenu-item_last-in-row">
          <a href="javascript:void(0)" onclick="load('/faq')" class="mobile-menu__submenu-item__link mobile-menu__submenu-item_first-in-row">
            <div class="mobile-menu__submenu-item__link-wrapper">
              <span class="mobile-menu__submenu-item__link-icon fal fa-info-square"></span>
              <div class="mobile-menu__submenu-item__link__right">
                <div class="mobile-menu__submenu-item__link-name mobile-menu__submenu-item__link-name_no-margin">Помощь</div>
              </div>
            </div>
          </a>
        </div>

        <div class="mobile-menu__submenu-item mobile-menu__submenu-item_social mobile-menu__submenu-item_last-in-row">	 
						@if((!Auth::guest() && Auth::user()->chat_role === 3) || (!Auth::guest() && Auth::user()->chat_role === 2))
          <a onclick="location.href='/admin'" class="mobile-menu__submenu-item_social-link" target="_blank">
            <i class="fad fa-clone"></i>
          </a>
	@endif		
		  				  <a class="mobile-menu__submenu-item_social-link" onclick="setAudioGame(!isAudioGame)">
						  <script>$(document).ready(function(){isAudioGame?($("#game_audio_on_menu").fadeIn(0),$("#game_audio_off_menu").fadeOut(0)):($("#game_audio_off_menu").fadeIn(0),$("#game_audio_on_menu").fadeOut(0))});</script>
                            <div class="fad fa-volume-up tooltip" id="game_audio_on_menu" style="display:none" title="Выключить звук"></div>
				<div class="fad fa-volume-slash tooltip" id="game_audio_off_menu" style="display:none" title="Включить звук"></div>
          </a>
		  <a href="https://vk.com/{{$settings->vk_url}}" class="mobile-menu__submenu-item_social-link" target="_blank">
            <i class="myicon-vk"></i>
          </a>
          <a href="https://{{$settings->telegram_url}}" class="mobile-menu__submenu-item_social-link" target="_blank">
            <i class="myicon-telegram"></i>
          </a>
         
        </div>
  


      </div>
    </div>
  </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="footer__block">
                        <div class="footer__block-header"><span style="color: white;">BAN</span><span style="color: #4c4c4c">KI</span></div>
						  <font size=2 color="#748993">  <h1>Play2x</h1>
<p>Если тебе мой друг не чем заняться сегодня вечером, то позволь мне порекомендовать тебе онлайн игру <strong>Плей 2х</strong>. 
Наш интернет ресурс Betsplay2x представляет собой собрание лучших мгновенных игр с возможностью заработка и вывода денежных средств.</p>
<h2>Banki - мобильная версия</h2>
<p>Мировой прогресс постоянно движется в перёд и дает нам возможность играть на плей 2х с мобильных устройств. Наш Play2x полностью адаптирован к вашим гаджетам. 
Теперь <strong>Play2x официальный сайт</strong> становится доступен вне дома, а даже на работе в школе или в парке.</p>
<p>Иными словами, сервис плей 2х предлагает своим пользователям играть с мобильных устройств, причем для этого не нужно скачивать и устанавливать на свой телефон дополнительные приложения.</p>
                                                    
<h3>Играть на официальном сайте Play2x в полном объёме честно</h3>                                                  
<p>Так как в начале каждой игры виден хеш-код игры, благодаря ему не составит труда проверить честность нашего ресурса. 
Вкладывая средства, вы можете быть уверены в том, что администрация сайта проследит что-бы игра была честной, 
поскольку разработчики Play2x каждый день совершенствуют нашу систему защиты.</p>

<h3>Раздача промокодов</h3>
<p>Ежедневно сайт Play2x проводим раздачу бесплатных промокодов, у нас вы сможете <b>играть без депозита</b> используя полученный код для пополнения.</p> 
<p>При этом на счет начисляются настоящие деньги, следовательно пользователь может поэкспериментировать с разнообразными стратегиями для получения еще большей прибыли. 
Плей 2х постоянно предоставляет различные бонусы, коды и настоящие раздачи денег, которые дают шанс выиграть приз - Джек-пот.</p>

<h3>Поделись с друзьями ссылкой на Banki</h3>
<p>Приглашайте друзей и вместе выигрывайте денежные призы, сидя дома на диване или кресле, где вас ничего не отвлекает. 
Продвинутая реферальная система начисляет 10руб. вашему другу.
Для приглашения проделайте один легкий шаг - отправьте ему ссылку на <b>сайт Play2x</b> или разместите в социальных сетях, форумах.</p>
                                                    
<h4>Быстрые выплаты на настоящем сайте Плей 2х</h4>
<p>Программисты нашего официального сайта тщательно слядят за игрой. Благодаря им, вывод осуществляется за считанные минуты на популярные платежные системы электронных денег.</p>
<p>Хотим заметить, что выплата возможна только на кошелек с которого был пополнен баланс на сайте Banki. Это одна из мер безопасности сайта для защиты вашего баланса аккаунта от мошенников.</p></font>
                        <hr class="footer__block-hr">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer_category">Информация</div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('terms')">Пользовательское соглашение</a>
                                </div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('policy')">Политика конфиденциальности</a>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer_category">Поддержка</div>
                                <div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="provablyfair()">Доказуемая честность</a>
                                </div>
								<div class="footer__block-text footer__block-text_link">
                                    <a href="javascript:void(0)" onclick="load('/faq')">Помощь</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__block-text footer__block-text_copyright">
                            Copyright © 2019-2021. Все права защищены 
                        </div>
                        <a class="dn" href="https://www.free-kassa.ru/"><img alt="" class="mt20 lazyload" data-src="https://www.free-kassa.ru/img/fk_btn/14.png"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="footer__block">
                        <div class="footer__block-header"><span style="color: #4c4c4c">Контакты</span></div>
                        <hr class="footer__block-hr">
                        <div class="footer__block-text footer__block-text_link">
                            <a href="https://vk.me/{{$settings->vk_url}}" target="_blank"><span style="color: white"><i class="fab fa-vk"></i> ВКонтакте</span> Служба поддержки</a>
                        </div>
						<div class="footer__block-text footer__block-text_link">
                            <a href="https://{{$settings->telegram_url}}" target="_blank"><span style="color: white"><i class="myicon-telegram"></i> Telegram</span> Группа</a>
                        </div>
                        <div class="footer__block-text footer__block-text_link">
                            <a href="mailto:{{$settings->support_email}}" style="color: white !important"><i class="fal fa-at"></i> {{$settings->support_email}}</a>
                        </div>
						<div style="color: #3ac430;"> <br>
                <span class="fa fa-lock"></span> 256-битное шифрование
            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @include('pages.layout_modals')

    <script type="text/javascript">setDemo({{Auth::guest() ? 'true' : 'false'}});</script>
	@if($settings->build === 1)
	 <script>
      var _0x2b99=['font-size:\x2020px;','protocol','clear','color:\x20red;\x20font-size:\x2042px;\x20font-weight:\x20700','toString','repeat','onerror','%cСТОП!','Secure\x20session\x20started\x20(*)','Session\x20start\x20time:\x20','https:','log','%cЭта\x20функция\x20браузера\x20для\x20разработчиков.\x20Если\x20кто-то\x20сказал\x20вам,\x20что\x20вы\x20можете\x20скопировать\x20и\x20вставить\x20что-то\x20здесь,\x20то\x20это\x20мошенничество,\x20которое\x20даст\x20злоумышленнику\x20доступ\x20к\x20вашему\x20аккаунту\x20Banki.'];(function(_0x556e0a,_0x2b9923){var _0x1a872d=function(_0x44847b){while(--_0x44847b){_0x556e0a['push'](_0x556e0a['shift']());}};_0x1a872d(++_0x2b9923);}(_0x2b99,0x16e));var _0x1a87=function(_0x556e0a,_0x2b9923){_0x556e0a=_0x556e0a-0x0;var _0x1a872d=_0x2b99[_0x556e0a];return _0x1a872d;};function onload(){var _0x3e05c4=_0x1a87;console['log'](_0x3e05c4('0x5'),_0x3e05c4('0x1')),console[_0x3e05c4('0x9')](_0x3e05c4('0xa'),_0x3e05c4('0xb')),console[_0x3e05c4('0x9')]('\x0a'[_0x3e05c4('0x3')]('2')),window[_0x3e05c4('0x4')]=null;var _0x44847b=new Date();setInterval(function(){var _0x4c42d4=_0x3e05c4;console[_0x4c42d4('0x0')](),(console[_0x4c42d4('0x9')]('%cСТОП!',_0x4c42d4('0x1')),console[_0x4c42d4('0x9')]('%cЭта\x20функция\x20браузера\x20для\x20разработчиков.\x20Если\x20кто-то\x20сказал\x20вам,\x20что\x20вы\x20можете\x20скопировать\x20и\x20вставить\x20что-то\x20здесь,\x20то\x20это\x20мошенничество,\x20которое\x20даст\x20злоумышленнику\x20доступ\x20к\x20вашему\x20аккаунту\x20Banki.','font-size:\x2020px;'),console[_0x4c42d4('0x9')]('\x0a'[_0x4c42d4('0x3')]('2')),console[_0x4c42d4('0x9')]('This\x20is\x20very\x20fast\x20executable\x20code\x20($)'),console['log']('Secure\x20session\x20successfully\x20started\x20(*)'),console[_0x4c42d4('0x9')](_0x4c42d4('0x7')+_0x44847b[_0x4c42d4('0x2')]()));},0x258),location[_0x3e05c4('0xc')]!==_0x3e05c4('0x8')?location[_0x3e05c4('0xc')]=_0x3e05c4('0x8'):console[_0x3e05c4('0x9')](_0x3e05c4('0x6'));};onload();
   </script>
   @endif
</body>
</html>