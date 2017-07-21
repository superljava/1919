<?php
/* Smarty version 3.1.30, created on 2017-07-21 09:57:38
  from "D:\WWW\1919\1919Shop\templates\attract.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59715f924f4280_20593398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c335b70c24bec3fb583ab925f8e616ec3da3c2b' => 
    array (
      0 => 'D:\\WWW\\1919\\1919Shop\\templates\\attract.html',
      1 => 1500602257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_top.html' => 1,
    'file:header_bottom.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59715f924f4280_20593398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/attract.css">
        <link rel="stylesheet" href="css/Reset.css">
        <link rel="stylesheet" href="css/list.css">
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:header_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="shop">
            <div class="shoptitle wrapper clearfix">
                <a href="javascript:void(0);" class="quanbu fl">
                    <span class="allFen" style="display: block;margin:0 auto">招商加盟</span>
                </a>
                <ul class="ul1">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="index.php" class="logo"><img src="images/commom/he-kuaihe.png" height="40" width="87"></a></li>
                    <!-- <li><a href="yxgj.php">逸香国际</a></li> -->
                    <li><a href="shopshouye.php">壹加玖定制</a></li>
                    <li><a href="###">嘴上功夫</a></li>
                    <li><a href="next_store.php">隔壁仓库</a></li>
                    <li><a href="friend_link.php">招商加盟</a></li>
                </ul>
                <!--  -->
            </div>
        </div>
        <div class="attract_box">
        	<div class="attract">
            <img src="images/register/zhaoshang.jpg" height="6199" width="1920" alt="">   	
        	</div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
