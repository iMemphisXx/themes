<?php
$css = '';
$url = $GLOBALS['PMA_Theme']->getPath().'/css/mhn.img.php?i=';
$GLOBALS['cfg']['imgPath'] = $url;
$imp = '!important';
function h($a){ return str_replace('#','',$a); }
$css.='.icon.ic_b_home{background:url('.$url.'home&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='.icon.ic_s_loggoff{background:url('.$url.'logout&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='.icon.ic_b_sqlhelp{background:url('.$url.'sqlhelp&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='.icon.ic_s_cog{background:url('.$url.'cog&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='#page_settings_icon .icon.ic_s_cog{background:url('.$url.'cog&c=h_fff)!important}';
$css.='#lock_page_icon .icon.ic_s_lock{background:url('.$url.'passwd&c=h_fff)!important}';
$css.='.icon.ic_b_docs{background:url('.$url.'help&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='.icon.ic_b_help{background:url('.$url.'help)!important}';
$css.='.icon.ic_s_reload{background:url('.$url.'reload&c=h_'.h($GLOBALS['cfg']['cPri']).')!important}';
$css.='.icon.ic_s_host{background:url('.$url.'host&c=h_fff)!important}';
$css.='.icon.ic_s_top{background:url('.$url.'go-top&c=h_fff)!important}';

$css.='.icon.ic_s_db{background:url('.$url.'db)!important}';
$css.='.icon.ic_b_newdb{background:url('.$url.'db-new)!important}';
$css.='.icon.ic_b_deltbl{background:url('.$url.'db-del&c=h_EF5350)!important}';
$css.='#serverinfo .icon.ic_s_db{background:url('.$url.'db&c=h_fff)!important}';
$css.='#serverinfo .icon.ic_b_views{background:url('.$url.'views&c=h_fff)!important}';
$css.='.icon.ic_b_group{background:url('.$url.'db-grp)!important}';
$css.='.icon.ic_b_plus{background:url('.$url.'plus)!important}';
$css.='.icon.ic_b_minus{background:url('.$url.'minus)!important}';
$css.='.icon.ic_b_sql{background:url('.$url.'sql)!important}';
$css.='.icon.ic_s_status,.icon.ic_b_chart{background:url('.$url.'status)!important}';
$css.='.icon.ic_s_rights{background:url('.$url.'rights)!important}';
$css.='.icon.ic_b_export,.icon.ic_b_tblexport{background:url('.$url.'export)!important}';
$css.='.icon.ic_b_import,.icon.ic_b_tblimport{background:url('.$url.'import)!important}';
$css.='.icon.ic_s_replication{background:url('.$url.'app)!important}';
$css.='.icon.ic_s_vars{background:url('.$url.'vars)!important}';
$css.='.icon.ic_s_asci{background:url('.$url.'asci)!important}';
$css.='.icon.ic_b_engine{background:url('.$url.'engine)!important}';
$css.='.icon.ic_b_more{background:url('.$url.'more)!important}';
$css.='.resizable-menu img[title="Plugins"]{background:url('.$url.'plugin)!important;padding:8px;margin-left:.3em;width:16px;height:16px}';
$css.='.icon.ic_b_relations{background:url('.$url.'designer)!important}';
$css.='.icon.ic_b_routines{background:url('.$url.'routines)!important}';
$css.='.icon.ic_b_routine_add{background:url('.$url.'routine-add)!important}';
$css.='.icon.ic_centralColumns{background:url('.$url.'centralColumns)!important}';
$css.='.icon.ic_centralColumns_add{background:url('.$url.'centralColumns-add)!important}';
$css.='.icon.ic_centralColumns_delete{background:url('.$url.'centralColumns-del)!important}';

$css.='#navigation_controls_outer img[title="Collapse all"]{background:url('.$url.'collapseall)!important;padding:8px;margin:0 5px;width:16px;height:16px}';
$css.='.icon.ic_b_props{background:url('.$url.'props)!important}';
$css.='.icon.ic_s_tbl{background:url('.$url.'props&c=h_fff)!important}';
$css.='.icon.ic_s_asc{background:url('.$url.'sort-asc)!important}';
$css.='.icon.ic_s_desc{background:url('.$url.'sort-desc)!important}';
$css.='.icon.ic_b_table_add,.database .icon.ic_b_view_add{background:url('.$url.'table-add)!important}';
$css.='.icon.ic_pause{background:url('.$url.'pause)!important}';
$css.='.icon.ic_b_column_add{background:url('.$url.'column-add)!important}';
$css.='.icon.ic_b_search{background:url('.$url.'search)!important}';
$css.='.icon.ic_b_find_replace{background:url('.$url.'find-replace)!important}';
$css.='.icon.ic_b_events{background:url('.$url.'events)!important}';
$css.='.icon.ic_b_event_add{background:url('.$url.'event-add)!important}';
$css.='.icon.ic_b_browse{background:url('.$url.'browse)!important}';
$css.='.icon.ic_bd_browse{background:url('.$url.'browse&c=h_8c8c8c)!important}';
$css.='.icon.ic_eye{background:url('.$url.'track)!important}';
$css.='.icon.ic_b_triggers{background:url('.$url.'triggers)!important}';
$css.='.icon.ic_b_trigger_add{background:url('.$url.'trigger-add)!important}';
$css.='.icon.ic_b_insrow{background:url('.$url.'insrow)!important}';
$css.='.icon.ic_b_edit{background:url('.$url.'edit&c=h_FBC02D)!important}';
$css.='.icon.ic_bd_edit{background:url('.$url.'edit&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_views{background:url('.$url.'views)!important}';
$css.='.icon.ic_b_view_add{background:url('.$url.'view-add)!important}';
$css.='.icon.ic_b_drop{background:url('.$url.'drop&c=h_EF5350)!important}';
$css.='.icon.ic_b_primary{background:url('.$url.'key&c=h_FBC02D)!important}';
$css.='.icon.ic_bd_primary{background:url('.$url.'key&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_unique{background:url('.$url.'unique)!important}';
$css.='.icon.ic_bd_unique{background:url('.$url.'unique&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_index{background:url('.$url.'index)!important}';
$css.='.icon.ic_b_index_add{background:url('.$url.'index-add)!important}';
$css.='.icon.ic_b_spatial{background:url('.$url.'spatial&c=h_FBC02D)!important}';
$css.='.icon.ic_bd_spatial{background:url('.$url.'spatial&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_ftext{background:url('.$url.'ftext&c=h_FBC02D)!important}';
$css.='.icon.ic_bd_ftext{background:url('.$url.'ftext&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_print{background:url('.$url.'print)!important}';
$css.='.icon.ic_b_tblanalyse{background:url('.$url.'tblanalyse)!important}';
$css.='.icon.ic_b_move{background:url('.$url.'move)!important}';
$css.='.icon.ic_normalize{background:url('.$url.'normalize)!important}';
$css.='.icon.ic_s_link{background:url('.$url.'link)!important}';
$css.='.icon.ic_s_unlink{background:url('.$url.'unlink)!important}';
$css.='.icon.ic_b_empty{background:url('.$url.'data-full)!important}';
$css.='.icon.ic_bd_empty{background:url('.$url.'data-empty)!important}';
$css.='.icon.ic_lightbulb{background:url('.$url.'lightbulb)!important}';
$css.='.icon.ic_lightbulb_off{background:url('.$url.'lightbulb-off)!important}';
$css.='.icon.ic_s_passwd,.icon.ic_s_lock{background:url('.$url.'passwd)!important}';
$css.='.icon.ic_b_favorite{background:url('.$url.'favourite&c=h_FBC02D)!important}';
$css.='.icon.ic_b_no_favorite{background:url('.$url.'favourite&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_comment{background:url('.$url.'comment)!important}';
$css.='.icon.ic_b_select{background:url('.$url.'search-plus)!important}';
$css.='.icon.ic_bd_select{background:url('.$url.'search-plus&c=h_8c8c8c)!important}';
$css.='.icon.ic_b_select{background:url('.$url.'search-plus)!important}';
$css.='.icon.ic_s_notice{background:url('.$url.'notice&c=h_fff)!important}';
$css.='.icon.ic_s_error{background:url('.$url.'error&c=h_fff)!important}';
$css.='.pma_sql_import_status .icon.ic_s_error{background:url('.$url.'error)!important}';
$css.='.icon.ic_s_success{background:url('.$url.'success&c=h_fff)!important}';
$css.='.icon.ic_b_usredit{background:url('.$url.'usredit)!important}';
$css.='.icon.ic_b_usradd{background:url('.$url.'usradd)!important}';
$css.='.icon.ic_b_usrdrop{background:url('.$url.'usrdrop)!important}';
$css.='.icon.ic_b_usrcheck{background:url('.$url.'usrcheck)!important}';
$css.='.icon.ic_b_bookmark{background:url('.$url.'bookmark)!important}';
$css.='.icon.ic_console{background:url('.$url.'console)!important}';
$css.='.icon.ic_window-new{background:url('.$url.'window-new)!important}';

$css.='.icon.ic_b_tblops{background:url('.$url.'tbl-ops)!important}';
$css.='.icon.ic_s_lang{background:url('.$url.'lang)!important}';
$css.='.icon.ic_s_theme{background:url('.$url.'theme)!important}';
echo $css;
