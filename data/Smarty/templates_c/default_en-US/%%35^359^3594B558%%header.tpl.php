<?php /* Smarty version 2.6.26, created on 2016-07-22 16:51:13
         compiled from C:%5Cwamp%5Cwww%5CEC-Cube%5Chtml/../data/Smarty/templates/default_en-US/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'C:\\wamp\\www\\EC-Cube\\html/../data/Smarty/templates/default_en-US/header.tpl', 26, false),)), $this); ?>

<!--▼HEADER-->
<div id="header_wrap" style="background-color:#ffffff;background-image: none;border-bottom: 1px solid #e9e9e9;height:80px;">
            <div id="custom-search-input" style="padding: 0px; ">
                <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/logo1.png" alt="logo" style="width:150px;height:auto;float:left;margin-top:-30px;margin-left:200px;"/>
                <div class="input-group col-md-5" style="margin-top: 30px;">
                    <input type="text" class="  search-query form-control" placeholder="Search" style="" />
                    <span class="input-group-btn">
                    <select class="form-control" id="exampleSelect1" style="float:left;width:150px;border-bottom-left-radius:0px;border-top-left-radius:0px;border-left-width:0px;">
                        <option>All Category</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <button class="btn btn-danger" type="button">
                    <span class=" glyphicon glyphicon-search" style="height:21px;padding-top:3px;"></span>
                    </button>
                    </span>
                </div>
                <div style="height:122px;width:183px;border:1px solid #e9e9e9;float:right;margin-top:-65px;margin-right:222.5px;">

                </div>
            </div>
</div>
<!--▲HEADER-->