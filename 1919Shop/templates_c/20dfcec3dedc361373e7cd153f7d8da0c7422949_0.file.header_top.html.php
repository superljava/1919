<?php
/* Smarty version 3.1.30, created on 2017-07-21 16:41:05
  from "D:\WWW\1919\1919Shop\templates\header_top.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5971be2122bb61_85772147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20dfcec3dedc361373e7cd153f7d8da0c7422949' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\header_top.html',
      1 => 1500626463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5971be2122bb61_85772147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="css/header_top.min.css">
<div class="top clearfix">
    <div class="wrapper">
        <div class="t_left fl">
            <ul>
                <li><span></span></li>
                <li class="t_spec">送至：</li>
                <li><a href="###">郑州市&nbsp;&nbsp;</a></li>
                <li>欢迎光临1919酒类直供！</li>
                <li style="<?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
"><a href="login.php" class="t_login">亲，请登录</a></li>
                <li style="<?php echo $_smarty_tpl->tpl_vars['empty']->value;?>
"><a href="register.php" class="t_login">注册</a></li>
                <li style="<?php echo $_smarty_tpl->tpl_vars['emptyLogin']->value;?>
"><a href="###" class="t_login"><?php if ($_smarty_tpl->tpl_vars['sess']->value) {
echo $_smarty_tpl->tpl_vars['sess']->value;
}?></a></li>
                <li style="<?php echo $_smarty_tpl->tpl_vars['emptyLogin']->value;?>
"><a href="log_out.php" class="t_login">退出</a></li>
            </ul>
        </div>
        <div class="t_right fr">
            <ul id="top_nav clearfix">
                <li class="top_nav_list">
                    <a href="login.php" class="pic">手机商城</a>
                    <div class="t_r_sm">
                       <img src="images/code.png" height="94" width="79" alt="">
                    </div>
                    <span></span>
                </li>
                
                <li class="top_nav_list">
                    <a href="###" class="pic">客户服务</a>
                    <ul class="t_r_sm">
                        <li><a href="###">联系客服</a></li>
                        <li><a href="help_center.php">帮助中心</a></li>
                    </ul>
                    <span></span>
                </li>
                
                <li class="top_nav_list">
                    <a href="login.php" class="pic">商家合作</a>
                    <ul class="t_r_sm">
                        <li><a href="###">商家入驻</a></li>
                        <li><a href="###">玖妈妈APP</a></li>
                        <li><a href="###">采购招标</a></li>
                    </ul>
                    <span></span>
                </li>
                
                <li class="top_nav_list">
                    <a href="###" class="pic">网站导航</a>
                    <ul class="t_r_sm">
                        <li><a href="###">商城首页</a></li>
                        <li><a href="###">会员中心</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/header_top.min.js"><?php echo '</script'; ?>
><?php }
}
