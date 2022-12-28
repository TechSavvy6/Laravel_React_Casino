@php
    if(!isset($_GET['id'])) die();
    $withdraw = \App\Withdraw::where('id', $_GET['id'])->first();
	$userid = $withdraw->user_id;
	$user = \App\User::where('id', $userid)->first();
    if($withdraw == null) die();
	 if($user == null) die();
@endphp
<div id="__ajax_title" style="display: none">Вывод # {{$withdraw->id}}</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    @if(Auth::user()->chat_role < 3)
        Вам недоступна эта информация
    @else
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Операция # {{$withdraw->id}}</h3>
                            </div>
                        </div>
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Информация:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Пользователь</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="nick_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
                                                    <input type="text" disabled class="form-control" value="{{$user->username}}" placeholder="Никнейм" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Сумма вывода</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="amount_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fad fa-coins"></i></span></div>
                                                    <input oninput="delayedv('#amount', function(v) { send('#amount_grp', '/admin/change_amount/{{$withdraw->id}}/'+v) })" id="amount" type="text" class="form-control" value="{{$withdraw->amount}}" placeholder="Сумма вывода" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Кошелёк</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="wallet_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fad fa-coins"></i></span></div>
                                                    <input oninput="delayedv('#wallet', function(v) { send('#wallet_grp', '/admin/change_wallet_number/{{$withdraw->id}}/'+v) })" id="wallet" type="text" class="form-control" value="{{$withdraw->wallet}}" placeholder="Кошелёк" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Платёжная система</label>
                                            <div class="col-lg-9 col-xl-6">
											@php
                                        $pay = $withdraw->system == 9 ? "Билайн" : ($withdraw->system == 8 ? "МТС" : ($withdraw->system == 7 ? "Tele2" : ($withdraw->system == 6 ? "Мегафон" : ($withdraw->system == 5 ? "Яндекс.Деньги" : "Qiwi"))));
                                    @endphp
                                                <div class="input-group" id="pay_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
                                                    <input type="text" disabled class="form-control" value="{{$pay}}" placeholder="Email" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Статус:</h3>
                                            </div>
                                        </div>
										                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-section">
                                                    <div class="kt-section__content kt-section__content--border kt-section__content--fit">
                                                        <ul class="kt-nav" id="chat_rightss">
                                                            <li data-chat-selection="true" id="a_u" class="kt-nav__item @if($withdraw->status == 0) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status/{{$withdraw->id}}/0', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_u').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-user"></i>
                                                                    <span class="kt-nav__link-text">Ожидание</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="a_y" class="kt-nav__item @if($withdraw->status == 1) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link" style="font-family: 'Open Sans', sans-serif"
                                                                   onclick="send('#chat_rightss', '/admin/change_status/{{$withdraw->id}}/1', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_y').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-play"></i>
                                                                    <span class="kt-nav__link-text">Выведено</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="a_m" class="kt-nav__item @if($withdraw->status == 2) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status/{{$withdraw->id}}/2', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_m').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-shield-alt"></i>
                                                                    <span class="kt-nav__link-text">Отказано</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="a_a" class="kt-nav__item @if($withdraw->status == 4) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status/{{$withdraw->id}}/4', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_a').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Проигнорировано</span>
                                                                </a>
                                                            </li>
															<li data-chat-selection="true" id="a_f" class="kt-nav__item @if($withdraw->status == 3) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status/{{$withdraw->id}}/3', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_f').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Отменено</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Платёжная система:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-section">
                                                    <div class="kt-section__content kt-section__content--border kt-section__content--fit">
                                                        <ul class="kt-nav" id="chat_rights">
                                                            <li data-chat-selection="true" id="c_u" class="kt-nav__item @if($withdraw->system == 4) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/4', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_u').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Qiwi</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_y" class="kt-nav__item @if($withdraw->system == 5) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link" style="font-family: 'Open Sans', sans-serif"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/5', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_y').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Яндекс.Деньги</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_m" class="kt-nav__item @if($withdraw->system == 6) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/6', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_m').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Мегафон</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="c_a" class="kt-nav__item @if($withdraw->system == 7) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/7', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_a').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Tele2</span>
                                                                </a>
                                                            </li>
															<li data-chat-selection="true" id="c_f" class="kt-nav__item @if($withdraw->system == 8) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/8', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_f').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">МТС</span>
                                                                </a>
                                                            </li>
															<li data-chat-selection="true" id="c_b" class="kt-nav__item @if($withdraw->system == 9) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rights', '/admin/change_wallet/{{$withdraw->id}}/9', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#c_b').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Билайн</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
