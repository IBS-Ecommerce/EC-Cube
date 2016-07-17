<?php /* Smarty version 2.6.26, created on 2016-07-17 17:21:00
         compiled from C:%5Cwamp%5Cwww%5CEC-Cube%5Chtml/../data/Smarty/templates/default_en-US/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\EC-Cube\\html/../data/Smarty/templates/default_en-US/index.tpl', 22, false),)), $this); ?>
<link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
css/bootstrap.min.css" type="text/css" media="all" />
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:10px;" onmousemove="showClick();" onmouseout="hideClick();">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="slide-image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/1234.jpg" style="width: 1200px;" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/1234.png" style="width: 1200px;" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/123.png"  style="width: 1200px;" alt="">
        </div>
    </div>
    <a id="left" class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="display:none;background:none;">
        <span class="glyphicon glyphicon-chevron-left" style="margin-left:-69px;background-color:#000000;padding-bottom:20px;padding-top:20px;width:50px;height:75px;margin-top:-40px;"></span>
    </a>
    <a id="right" class="right carousel-control" href="#carousel-example-generic" data-slide="next" style="display: none;background:none;">
        <span class="glyphicon glyphicon-chevron-right" style="margin-right:-68px;background-color:#000000;padding-bottom:20px;padding-top:20px;width:50px;height:75px;margin-top:-40px;"></span>
    </a>
</div>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
js/bootstrap.min.js"></script>
<script type="text/javascript">
    function showClick(){
        document.getElementById('left').style.display = 'block';
        document.getElementById('right').style.display = 'block';
    }
    function hideClick(){
        document.getElementById('left').style.display = 'none';
        document.getElementById('right').style.display = 'none';
    }
</script>