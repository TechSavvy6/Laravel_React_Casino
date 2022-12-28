@php
    if(!isset($_GET['id'])) die();
    $payment = \App\Payment::where('id', $_GET['id'])->first();
	$userid = $payment->user;
	$user = \App\User::where('id', $userid)->first();
    if($payment == null) die();
	 if($user == null) die();
@endphp
<div id="__ajax_title" style="display: none">Вывод # {{$payment->id}}</div>
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
                                <h3 class="kt-portlet__head-title">Операция # {{$payment->id}}</h3>
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
                                            <label class="col-xl-3 col-lg-3 col-form-label">Сумма пополнения</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="money_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fad fa-coins"></i></span></div>
                                                    <input oninput="delayedv('#money', function(v) { send('#money_grp', '/admin/change_amount_payment/{{$payment->id}}/'+v) })" id="money" type="text" class="form-control" value="{{$payment->amount}}" placeholder="Сумма пополнения" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Дата пополнения</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group" id="nick_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div>
                                                    <input type="text" disabled class="form-control" value="{{$payment->created_at}}" placeholder="Дата пополнения" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Платёжная система</label>
                                            <div class="col-lg-9 col-xl-6">
											@php
                                        $pay = $payment->type == 180 ? "EXMO" : ($payment->type == 64 ? "PerfectMoney" : ($payment->type == 165 ? "Zcash" : ($payment->type == 150 ? "Advcash" : ($payment->type == 114 ? "PAYEER" : ($payment->type == 132 ? "Tele2" : ($payment->type == 83 ? "Билайн" : ($payment->type == 84 ? "МТС" : ($payment->type == 82 ? "Мегафон" : ($payment->type == 160 ? "Банк.карта" : ($payment->type == 45 ? "Яндекс.Деньги" : "Qiwi"))))))))));
                                    @endphp
                                                <div class="input-group" id="pay_grp">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-envelope"></i></span></div>
                                                    <input type="text" disabled class="form-control" value="{{$pay}}" placeholder="Pay" aria-describedby="basic-addon1">
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
                                                            <li data-chat-selection="true" id="a_u" class="kt-nav__item @if($payment->status == 0) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status_payment/{{$payment->id}}/0', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_u').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-user"></i>
                                                                    <span class="kt-nav__link-text">Ожидание</span>
                                                                </a>
                                                            </li>
                                                            <li data-chat-selection="true" id="a_y" class="kt-nav__item @if($payment->status == 1) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link" style="font-family: 'Open Sans', sans-serif"
                                                                   onclick="send('#chat_rightss', '/admin/change_status_payment/{{$payment->id}}/1', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_y').addClass('kt-nav__item--active'); })">
                                                                    <i class="kt-nav__link-icon fal fa-play"></i>
                                                                    <span class="kt-nav__link-text">Успешно</span>
                                                                </a>
                                                            </li>
															<li data-chat-selection="true" id="a_f" class="kt-nav__item @if($payment->status == 2) kt-nav__item--active @endif">
                                                                <a href="javascript:void(0)" class="kt-nav__link"
                                                                   onclick="send('#chat_rightss', '/admin/change_status_payment/{{$payment->id}}/2', function() { $('*[data-chat-selection]').removeClass('kt-nav__item--active'); $('#a_f').addClass('kt-nav__item--active');})">
                                                                    <i class="kt-nav__link-icon fal fa-cog"></i>
                                                                    <span class="kt-nav__link-text">Ошибка</span>
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
