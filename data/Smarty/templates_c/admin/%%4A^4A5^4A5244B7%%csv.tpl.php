<?php /* Smarty version 2.6.26, created on 2016-07-15 16:27:55
         compiled from contents/csv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'contents/csv.tpl', 25, false),array('modifier', 'h', 'contents/csv.tpl', 60, false),array('modifier', 'sfGetErrorColor', 'contents/csv.tpl', 68, false),array('function', 't', 'contents/csv.tpl', 33, false),array('function', 'html_options', 'contents/csv.tpl', 69, false),)), $this); ?>

<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
jquery.multiselect2side/css/jquery.multiselect2side.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
jquery.multiselect2side/js/jquery.multiselect2side.js" ></script>
<script type="text/javascript">
<!--
$().ready(function() {
    $('#output_list').multiselect2side({
        selectedPosition: 'right',
        moveOptions: true,
        labelsx: '<?php echo smarty_function_t(array('string' => 'tpl_Items not for CSV output_01'), $this);?>
',
        labeldx: '<?php echo smarty_function_t(array('string' => 'tpl_Items for CSV output_01'), $this);?>
',
        labelTop: '<?php echo smarty_function_t(array('string' => 'tpl_Top_01'), $this);?>
',
        labelBottom: '<?php echo smarty_function_t(array('string' => 'tpl_Bottom_01'), $this);?>
',
        labelUp: '<?php echo smarty_function_t(array('string' => 'tpl_Up_01'), $this);?>
',
        labelDown: '<?php echo smarty_function_t(array('string' => 'Down'), $this);?>
',
        labelSort: '<?php echo smarty_function_t(array('string' => 'tpl_Item order_01'), $this);?>
'
    });
    // multiselect2side の初期選択を解除
    $('.ms2side__div select').val(null);
    // [Sort] ボタンは混乱防止のため非表示
    // FIXME 選択・非選択のボタンと比べて、位置ズレしている
    $('.ms2side__div .SelSort').hide();
});

function lfFormModeDefautSetSubmit(form, mode) {
    if (!window.confirm('<?php echo smarty_function_t(array('string' => 'tpl_Do you want to register using default settings_01'), $this);?>
')) {
        return;
    }
    return fnSetFormSubmit(form, 'mode', mode);
}
//-->
</script>

<form name="form1" id="form1" method="post" action="?">
<input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
<input type="hidden" name="mode" value="confirm" />
<input type="hidden" name="tpl_subno_csv" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_subno_csv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
" />
<div id="admin-contents" class="contents-main">
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_is_update'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
    <span class="attention"><?php echo smarty_function_t(array('string' => "tpl_* Update successful._01"), $this);?>
</span>
    <?php endif; ?>
    <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tpl_subno_csv'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
    <div class="ms2side__area">
        <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['output_list'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
        <select multiple name="output_list[]" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['output_list'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
;" id="output_list" size="20">
            <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrOptions'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrSelected'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select>
    </div>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="fnFormModeSubmit('form1', 'confirm', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Save and continue_01'), $this);?>
</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="lfFormModeDefautSetSubmit('form1', 'defaultset', '', ''); return false;"><span class="btn-next"><?php echo smarty_function_t(array('string' => 'tpl_Return to initial settings and register_01'), $this);?>
</span></a></li>
        </ul>
    </div>

</div>
</form>