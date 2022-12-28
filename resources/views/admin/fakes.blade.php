<div id="__ajax_title" style="display: none">Фейки</div>
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile" id="users_container">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                <table class="kt-datatable__table" style="display: block;">
                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <th class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 50px">#</span>
                            </th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Фейк</span></th>
                            <th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 181px;">Уровень</span></th>
                            <th data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 80px;">Действия</span></th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body" id="users"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new_group" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Фейки</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">Количество фейков:</label>
                    <input type="text" class="form-control" id="g_num" placeholder="От 1 до 50">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary" id="g_create">Создать</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Фейк</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label">Имя:</label>
                    <input type="text" class="form-control" id="code" placeholder="Имя">
                </div>
                <div class="form-group">
                    <label class="form-control-label">Уровень:</label>
                    <input type="text" class="form-control" id="sum" placeholder="От 1 до 10">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary" id="create">Создать</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="f_settings" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Настройки</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
			<div class="form-group">
                                <label class="kt-checkbox">
                                    <input id="game_fake" @if($settings['game_fake'] == 1) checked @endif type="checkbox"
                                        onclick="send('#game_fake', '/admin/setting/game_fake/'+($('#game_fake').is(':checked') ? '1' : '0'))"> Активность фейк ставок
                                    <span></span>
                                </label>
                            </div>
                <div class="form-group">
                    <label class="form-control-label">Интервал фейк игр (сек):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 5 до 250 сек" value="{{$settings->time_fake}}" id="f_edit_time">
                </div>
											<div class="form-group">
                                <label class="kt-checkbox">
                                    <input id="chat_fake" @if($settings['chat_fake'] == 1) checked @endif type="checkbox"
                                        onclick="send('#chat_fake', '/admin/setting/chat_fake/'+($('#chat_fake').is(':checked') ? '1' : '0'))"> Активность фейк чата
                                    <span></span>
                                </label>
                            </div>
				<div class="form-group">
                    <label class="form-control-label">Интервал фейк чата (сек):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 5 до 250 сек" value="{{$settings->time_chat_fake}}" id="f_edit_time_chat">
                </div>
				<div class="form-group">
                                <label class="kt-checkbox">
                                    <input id="withdraw_fake" @if($settings['withdraw_fake'] == 1) checked @endif type="checkbox"
                                        onclick="send('#withdraw_fake', '/admin/setting/withdraw_fake/'+($('#withdraw_fake').is(':checked') ? '1' : '0'))"> Активность фейк выводов
                                    <span></span>
                                </label>
                            </div>
				<div class="form-group">
                    <label class="form-control-label">Интервал фейк выводов (сек):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 35 до 450 сек" value="{{$settings->withdraw_time_fake}}" id="f_edit_time_withdraw">
                </div>
				<div class="form-group">
                                <label class="kt-checkbox">
                                    <input id="live_fake" @if($settings['live_fake'] == 1) checked @endif type="checkbox"
                                        onclick="send('#live_fake', '/admin/setting/live_fake/'+($('#live_fake').is(':checked') ? '1' : '0'))"> Активность фейк лайв-ленты
                                    <span></span>
                                </label>
                            </div>
							<div class="form-group">
                    <label class="form-control-label">Фейк онлайн в играх (чел):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 25 до 250 человек" value="{{$settings->fakeonline_games}}" id="f_edit_fakeonline_games">
                </div>
				<div class="form-group">
                    <label class="form-control-label">Всего пользователей (чел):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 250 до 250000 человек" value="{{$settings->fakesumusers}}" id="f_edit_fakesumusers">
                </div>
				<div class="form-group">
                    <label class="form-control-label">Всего выведено (чел):</label>
                    <input type="text" class="form-control" placeholder="Рекомендуемое от 10000 до 25000000 человек" value="{{$settings->fakesumwithdraw}}" id="f_edit_fakesumwithdraw">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary" id="f_edit">Редактировать</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
if (window.location.href.indexOf('load')==-1) {
     window.location.replace(window.location.href+'?load');
}
</script>
<script type="text/javascript" src="/admin_assets/js/pages/fakes.js"></script>
