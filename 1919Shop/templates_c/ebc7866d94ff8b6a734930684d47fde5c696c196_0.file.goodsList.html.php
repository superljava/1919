<?php
/* Smarty version 3.1.30, created on 2017-06-05 23:14:01
  from "D:\WWW\1919\demo\templates\goodsList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59357539c5ad52_28498678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc7866d94ff8b6a734930684d47fde5c696c196' => 
    array (
      0 => 'D:\\WWW\\1919\\demo\\templates\\goodsList.html',
      1 => 1496675367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59357539c5ad52_28498678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/Reset.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/goodsList.css">
        <?php echo '<script'; ?>
 src="js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    <!-- 头部 -->
        <div class="header">
        <div class="top clearfix">
            <div class="wrap">
                <div class="t_left fl">
                    <ul>
                        <li><span></span></li>
                        <li class="t_spec">送至：</li>
                        <li><a href="###">郑州市&nbsp;&nbsp;</a></li>
                        <li>欢迎光临1919酒类直供！</li>
                        <li><a href="login.php" class="t_login">亲,请登录</a></li>
                        <li><a href="register.php" class="t_login">去注册</a></li>
                    </ul>
                </div>
                <div class="t_right fr">
                    <ul id="top_nav clearfix">
                        <li class="top_nav_list">
                            <a href="friend_link.php" class="pic">手机商城</a>
                            <div class="t_r_sm">
                               <img src="images/commom/code.png" height="94" width="79" alt="">
                            </div>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="friend_link.php" class="pic">客户服务</a>
                            <ul class="t_r_sm">
                                <li><a href="friend_link.php">联系客服</a></li>
                                <li><a href="friend_link.php">帮助中心</a></li>
                            </ul>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="friend_link.php" class="pic">商家合作</a>
                            <ul class="t_r_sm">
                                <li><a href="friend_link.php">商家入驻</a></li>
                                <li><a href="friend_link.php">玖妈妈APP</a></li>
                                <li><a href="friend_link.php">采购招标</a></li>
                            </ul>
                            <span></span>
                        </li>
                        
                        <li class="top_nav_list">
                            <a href="friend_link.php" class="pic">网站导航</a>
                            <ul class="t_r_sm">
                                <li><a href="friend_link.php">商城首页</a></li>
                                <li><a href="friend_link.php">会员中心</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="logo">
            <div class="wrap">
                <div class="logo_l fl">
                    <div>
                        <a href="index.php"><img src="images/commom/logo.png" alt=""></a>
                    </div>
                    <div>
                        <a href="index.php"><img class="logo_img" src="images/commom/head-logo-a.gif" alt=""></a>
                    </div>
                </div>
                <div class="logo_r fr clearfix">
                        <div class="S_right fl">
                            <div class="S_search clearfix">
                                <div class="S_search_container fl">
                                    <div class="S_search1"></div>
                                    <div class="S_search2">
                                        <p value="">美酒</p>
                                        <p value="">店铺</p>
                                    </div>
                                    <span class="S_search_icon"></span>
                                </div>
                                <input type="text" class="txt fl">
                                <input type="submit" value="搜索" class="but fr">
                            </div>
                            <ul class="sear_hot">
                                <li class="fl sear_hot_red">热门搜索：</li>
                                <li class="fl sear_hot_red"><a href="goodsList.php">泸州老窖</a></li>
                                <li class="fl"><a href="goodsList.php">五粮液</a></li>
                                <li class="fl sear_hot_red"><a href="###">奔富</a></li>
                                <li class="fl"><a href="goodsList.php">剑南春</a></li>
                                <li class="fl sear_hot_red"><a href="beiZone.php">冰爽啤酒</a></li>
                                <li class="fl"><a href="goodsList.php">拉菲</a></li>
                            </ul>   
                        </div>
                        <div class="buycar fr">
                            <span class="buycar_car"></span>
                            <a href="###">购物车</a>
                            <span class="buycar_num">0</span>
                            <span class="buycar_arrow"></span>
                            <div class="buycar_list">
                                <span class="buycar_list_pic"><img src="images/commom/shopcart.png" height="50" width="50" alt=""></span>
                                <p>购物车中还没有商品，赶紧选购吧!</p>
                            </div>
                        </div>
                        
                </div>
                    
                
            </div>
        </div>
    </div>
    <div id="shop">
        <div class="shoptitle wrapper clearfix">
            <a href="javascript:void(0);" class="quanbu fl">
                <span class="allFen fl">全部分类</span>
                <span class="arrow fr"></span>
            </a>
                <ul class="shoplists">
                    <li class="baijiu1">
                        <p>
                            <span  class="jiu clearfix">
                                <a href="goodsList.php" class="baijiu">白酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="goodsList.php" style="color:#e30b20;">茅台</a>
                            </span>
                            <span>
                                <a href="goodsList.php">五粮液</a>
                            </span>
                            <span>
                                <a href="goodsList.php" style="color:#e30b20;">剑南春</a>
                            </span>
                            <span >
                                <a href="goodsList.php">郎酒</a>
                            </span>
                            <span>
                                <a href="goodsList.php">泸州老窖</a>
                            </span>
                            <span>
                                <a href="goodsList.php">汾酒</a>
                            </span>
                            <span>
                                <a href="goodsList.php">洋河</a>
                            </span>
                        </div>
                    </li>
                    <li class="putaojiu1">
                        <p >
                            <span class="jiu clearfix">
                                <a href="##" class="baijiu">葡萄酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="##">法国</a>
                            </span>
                            <span>
                                <a href="##">澳大利亚</a>
                            </span>
                            <span>
                                <a href="##" style="margin-right:30px">西班牙</a>
                            </span>
                            <span>
                                <a href="##" style="color:#e30b20;">奔富</a>
                            </span>
                            <span>
                                <a href="##">小企鹅</a>
                            </span>
                            <span>
                                <a href="##">拉菲</a>
                            </span>
                            <span>
                                <a href="##">长城</a>
                            </span>
                            <span>
                                <a href="##">金水滴</a>
                            </span>
                        </div>
                    </li>
                    <li class="yangjiu1">
                        <p >
                            <span class="jiu clearfix">
                                <a href="##" class="baijiu">洋酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="##">百利甜</a>
                            </span>
                            <span>
                                <a href="##">百加得</a>
                            </span>
                            <span>
                                <a href="##" style="margin-right:30px">轩尼诗</a>
                            </span>
                            <span>
                                <a href="##">芝华士</a>
                            </span>
                            <span>
                                <a href="##">人头马</a>
                            </span>
                            <span>
                                <a href="##" style="color:#e30b20;">杰克丹尼</a>
                            </span>
                            <span>
                                <a href="##">麦卡伦</a>
                            </span>
                            <span>
                                <a href="##">百龄坛</a>
                            </span>
                        </div>
                    </li>
                    <li class="pijiu1">
                        <p >
                            <span class="jiu clearfix">
                                <a href="##" class="baijiu">啤酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="##">粉象</a>
                            </span>
                            <span>
                                <a href="##">布鲁杰克</a>
                            </span>
                            <span>
                                <a href="##" style="margin-right:30px;">狩猎神</a>
                            </span>
                            <span>
                                <a href="##">德拉克</a>
                            </span>
                            <span>
                                <a href="##">凯撒</a>
                            </span>
                            <span>
                                <a href="##">1664</a>
                            </span>
                            <span>
                                <a href="##">百威</a>
                            </span>
                        </div>
                    </li>
                    <li class="huangjiu1">
                        <p >
                            <span class="jiu clearfix">
                                <a href="##" class="baijiu">黄酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="##">古越龙山</a>
                            </span>
                            <span>
                                <a href="##">稷山鉴水</a>
                            </span>
                            <span>
                                <a href="##">会稽山</a>
                            </span>
                            <span>
                                <a href="##">古南丰</a>
                            </span>
                        </div>
                    </li>
                    <li class="yijianxuanjiu1">
                        <p >
                            <span class="jiu clearfix">
                                <a href="##" class="baijiu">一键选酒</a>
                            </span>
                        </p>    
                        <div class="sec_list clearfix">
                            <span>
                                <a href="##">整箱购</a>
                            </span>
                            <span>
                                <a href="##">结婚宴请</a>
                            </span>
                            <span>
                                <a href="##">大坛专区</a>
                            </span>
                            <span>
                                <a href="##">名酒专区</a>
                            </span>
                            <span>
                                <a href="##">礼品酒</a>
                            </span>
                        </div>
                    </li>
                </ul>           
            <ul class="ul1">
                <li><a href="index.php">首页</a></li>
                <li><a href="index.php" class="logo"><img src="images/commom/he-kuaihe.png" height="40" width="87"></a></li>
                <li><a href="yxgj.php">逸香国际</a></li>
                <li><a href="shopshouye.php">壹加玖定制</a></li>
                <li><a href="">嘴上功夫</a></li>
                <li><a href="next_store.php">隔壁仓库</a></li>
                <li><a href="friend_link.php">招商加盟</a></li>
            </ul>
            <div class="introduce1 introduce clearfix baijiu1">
                <ul class="left fl">
                    <li style="padding-bottom:73px;"><span>品牌</span></li>
                    <li style="padding-bottom:25px;"><span>香型</span></li>
                    <li style="padding-bottom:11px;"><span>产地</span></li>
                    <li><span>价格区间</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">茅台</a></span><span><a href="##">五粮液</a></span><span><a href="##">剑南春</a></span><span><a href="##">泸州老窖</a></span><span><a href="##">洋河</a></span><span><a href="##">汾酒</a></span><span><a href="##">郎酒</a></span><span><a href="##">水井坊</a></span><span><a href="##">丰谷</a></span><span><a href="##">牛栏山</a></span><span><a href="##">杜康</a></span><span style="padding-right:30px;"><a href="##" >国粹</a></span><span><a href="##">沱牌</a></span><span><a href="##">全兴</a></span><span><a href="##">金沙</a></span><span><a href="##">西风</a></span><span><a href="##">景阳春</a></span><span><a href="##">红星</a></span><span><a href="##">五粮液公司出品</a></span><span><a href="##">董酒</a></span><span><a href="##">酒雨</a></span><span><a href="##">黔酒</a></span><span><a href="##">小角楼</a></span><span><a href="##">白云边</a></span><span><a href="##">衡水老白干</a></span><span><a href="##">稻花香</a></span><span><a href="##">一道红</a></span><span><a href="##">一品景芝</a></span><span><a href="##">汗喜</a></span><span><a href="##">国之娇子</a></span><span><a href="##">红楼梦</a></span><span><a href="##">乐合</a></span><span><a href="##">孔府家</a></span><span style="padding-right:53px;"><a href="##">毛铺</a></span><span><a href="##">古井贡酒</a></span><span><a href="##">伊犁</a></span><span><a href="##" style="color:#0073e9;">更多</a></span>
                    </li>
                    <li>
                        <span><a href="##">浓香型</a></span><span><a href="##">清香型</a></span><span><a href="##">酱香型</a></span><span><a href="##">馥郁香型</a></span><span><a href="##">兼香型</a></span><span><a href="##">特香型</a></span><span><a href="##">芝麻香型</a></span><span><a href="##">凤香型</a></span><span><a href="##">老白干香型</a></span><span style="padding-right:30px;"><a href="##">陶香型</a></span><span><a href="##">董香型</a></span><span><a href="##">其他</a></span>
                    </li>
                    <li>
                        <span><a href="##">贵州</a></span><span><a href="##">四川</a></span><span><a href="##">山西</a></span><span><a href="##">北京</a></span><span><a href="##">江苏</a></span><span><a href="##">安徽</a></span><span><a href="##">湖北</a></span><span><a href="##">山西</a></span><span><a href="##">山东</a></span><span><a href="##">河南</a></span><span><a href="##">陕西</a></span><span><a href="##">湖南</a></span>
                    </li>
                    <li>
                        <span><a href="##">0-49</a></span><span><a href="##">50-99</a></span><span><a href="##">100-199</a></span><span><a href="##">200-299</a></span><span><a href="##">300-599</a></span><span><a href="##">600-999</a></span><span><a href="##">1000-1999</a></span><span><a href="##">2000以上</a></span>
                    </li>
                </ul>
            </div>  
            <div class="introduce2 introduce clearfix putaojiu1">
                <ul class="left fl">
                    <li style="padding-bottom:28px;"><span>品牌</span></li>
                    <li style="padding-bottom:9px;"><span>品类</span></li>
                    <li style="padding-bottom:9px;"><span>葡萄酒类型</span></li>
                    <li style="padding-bottom:9px;"><span>口味类型</span></li>
                    <li style="padding-bottom:9px;"><span>产地</span></li>
                    <li><span>价格区间</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">拉菲</a></span><span><a href="##">奔富</a></span><span><a href="##">长城</a></span><span><a href="##">杰卡斯</a></span><span><a href="##">黄尾袋鼠</a></span><span><a href="##">小企鹅</a></span><span><a href="##">红魔鬼</a></span><span><a href="##">爱之湾</a></span><span><a href="##">巴黎之夜</a></span><span style="padding-right:30px;"><a href="##">拉维亭</a></span><span><a href="##">意景湾</a></span><span><a href="##">守望堡</a></span><span><a href="##">意大利之花</a></span>
                    </li>
                    <li>
                        <span><a href="##">赤霞珠</a></span><span><a href="##">美乐</a></span><span><a href="##">霞多丽</a></span><span><a href="##">西拉</a></span><span><a href="##">品丽珠</a></span><span><a href="##">歌海娜</a></span><span><a href="##">添帕尼尤</a></span><span><a href="##">长相思</a></span><span><a href="##">琼瑶浆</a></span>
                    </li>
                    <li>
                        <span><a href="##">红葡萄酒</a></span><span><a href="##">白葡萄酒</a></span><span><a href="##">桃红葡萄酒</a></span>
                    </li>
                    <li>
                        <span><a href="##">干型葡萄酒</a></span><span><a href="##">甜型葡萄酒</a></span><span><a href="##">半甜型葡萄酒</a></span>
                    </li>
                    <li>
                        <span><a href="##">法国</a></span><span><a href="##">澳大利亚</a></span><span><a href="##">意大利</a></span><span><a href="##">德国</a></span><span><a href="##">南非</a></span><span><a href="##">智利</a></span><span><a href="##">葡萄牙</a></span><span><a href="##">美国</a></span><span><a href="##">中国</a></span>
                    </li>
                    <li>
                        <span><a href="##">0-49</a></span><span><a href="##">50-99</a></span><span><a href="##">100-199</a></span><span><a href="##">200-299</a></span><span><a href="##">300-499</a></span><span><a href="##">500-799</a></span><span><a href="##">800-999</a></span><span><a href="##">1000以上</a></span>
                    </li>
                </ul>
            </div>
            <div class="introduce3 introduce clearfix yangjiu1">
                <ul class="left fl">
                    <li style="padding-bottom:50px;"><span>品牌</span></li>
                    <li style="padding-bottom:8px;"><span>品类</span></li>
                    <li style="padding-bottom:8px;"><span>产地</span></li>
                    <li><span>价格区间</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">芝华士</a></span><span><a href="##">深蓝</a></span><span><a href="##">斯米诺</a></span><span><a href="##">百龄坛</a></span><span><a href="##">人头马</a></span><span><a href="##">轩尼诗</a></span><span><a href="##">皇家礼炮</a></span><span><a href="##">杰克丹尼</a></span><span><a href="##">百加得</a></span><span><a href="##">绝对</a></span><span><a href="##">尊尼获加</a></span><span><a href="##">马爹利</a></span><span><a href="##">温莎</a></span><span><a href="##">占边</a></span><span><a href="##">帝王</a></span><span><a href="##">百利甜</a></span><span><a href="##">波士</a></span><span><a href="##">威力来</a></span><span><a href="##">贝加尔湖</a></span><span><a href="##">翰格</a></span><span><a href="##">杰比斯</a></span><span><a href="##">黑白狗</a></span><span><a href="##">泰斯卡</a></span><span><a href="##">赛那塔</a></span>
                    </li>
                    <li>
                        <span><a href="##">白兰地</a></span><span><a href="##">威士忌</a></span><span><a href="##">伏特加</a></span><span><a href="##">龙舌兰</a></span><span><a href="##">朗姆酒</a></span><span><a href="##">力娇酒</a></span><span><a href="##">预调酒</a></span><span><a href="##">金酒</a></span>
                    </li>
                    <li>
                        <span><a href="##">英国</a></span><span><a href="##">法国</a></span><span><a href="##">俄国</a></span><span><a href="##">美国</a></span><span><a href="##">瑞典</a></span><span><a href="##">波多黎各</a></span><span><a href="##">意大利</a></span><span><a href="##">爱尔兰</a></span>
                    </li>
                    <li>
                        <span><a href="##">0-199</a></span><span><a href="##">200-699</a></span><span><a href="##">700-1899</a></span><span><a href="##">1900-6699</a></span><span><a href="##">6700以上</a></span>
                    </li>
                </ul>
            </div>
            <div class="introduce4 introduce clearfix pijiu1">
                <ul class="left fl">
                    <li style="padding-bottom:28px;"><span>品牌</span></li>
                    <li style="padding-bottom:8px;"><span>产地</span></li>
                    <li style="padding-bottom:8px;"><span>价格区间</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">哈尔博</a></span><span><a href="##">海浮堡</a></span><span><a href="##">德拉克</a></span><span><a href="##">凯撒</a></span><span><a href="##">柏龙</a></span><span><a href="##">瓦伦丁</a></span><span><a href="##">百威</a></span><span><a href="##">梅克伦堡</a></span><span><a href="##">乐蔓</a></span><span><a href="##">菲德堡</a></span><span><a href="##">废墟</a></span><span><a href="##">罗斯夫</a></span><span><a href="##">凯尔特人</a></span><span><a href="##">马里斯</a></span><span><a href="##">天鹅城堡</a></span><span><a href="##">科罗娜</a></span><span><a href="##">歌德</a></span><span><a href="##">奥丁格</a></span><span><a href="##">狩猎神</a></span><span><a href="##">布鲁杰克</a></span><span><a href="##">粉象</a></span>
                    </li>
                    <li>
                        <span><a href="##">德国</a></span><span><a href="##">捷克</a></span><span><a href="##">比利时</a></span><span><a href="##">西班牙</a></span>
                    </li>
                    <li>
                        <span><a href="##">0-29</a></span><span><a href="##">30-59</a></span><span><a href="##">40-79</a></span><span><a href="##">80-99</a></span><span><a href="##">100以上</a></span>
                    </li>
                </ul>
            </div>
            <div class="introduce5 introduce clearfix huangjiu1">
                <ul class="left fl">
                    <li  style="padding-bottom:8px;" ><span>黄酒品牌</span></li>
                    <li style="padding-bottom:8px;"><span>价格区间</span></li>
                    <li ><span>酒具品牌</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">稷山鉴水</a></span><span><a href="##">古越龙山</a></span><span><a href="##">古南丰</a></span><span><a href="##">越之春</a></span><span><a href="##">会稽山</a></span><span><a href="##">塔牌</a></span><span><a href="##">谢村</a></span><span><a href="##">御膳春</a></span>
                    </li>
                    <li>
                        <span><a href="##">0-39</a></span><span><a href="##">40-69</a></span><span><a href="##">70-199</a></span><span><a href="##">200-399</a></span><span><a href="##">400以上</a></span>
                    </li>
                    <li>
                        <span><a href="##">石岛</a></span><span><a href="##">弗罗萨</a></span>
                    </li>
                </ul>
            </div>
            <div class="introduce6 introduce clearfix yijianxuanjiu1">
                <ul class="left fl">
                    <li  style="padding-bottom:8px;" ><span>美酒整箱购</span></li>
                    <li style="padding-bottom:8px;"><span>送礼必备</span></li>
                    <li ><span>葡萄酒品类</span></li>
                </ul>
                <ul class="right fr">
                    <li>
                        <span><a href="##">白酒整箱</a></span><span><a href="##">葡萄酒整箱</a></span><span><a href="##">洋酒整箱</a></span>
                    </li>
                    <li>
                        <span><a href="##">葡萄酒礼盒</a></span><span><a href="##">白酒礼盒</a></span>
                    </li>
                    <li>
                        <span><a href="##">赤霞珠</a></span><span><a href="##">西拉</a></span><span><a href="##">梅洛</a></span><span><a href="##">雷司令</a></span><span><a href="##">黑比诺</a></span><span><a href="##">长相思</a></span><span><a href="##">蛇龙珠</a></span><span><a href="##">佳美娜</a></span><span><a href="##">贵人香</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- 商品列表 -->
    	<div class="goodsList">
    		<div class="S_min">
    			<div class="goodsHeader">
    				<span class="hotSell fl"><a href="goodsDetails.php">热卖推荐</a></span>
    				<ul class="hotPic fl">
    					<li>
    						<div class="left fl">
    							<a href="goodsDetails.php"><img src="images/goodsList/hotlogo0.jpg" height="110" width="110" alt=""></a>
    						</div>
    						<div class="right fr">
    							<p class="S1"><a href="goodsDetails.php">【贝克汉姆推荐】40°翰格雅爵单一谷物苏格兰</a></p>
    							<p class="S2"><a href="goodsDetails.php">1919自营店</a></p>
    							<p class="S3">
	    							<span class="S3_font">
	    								<span class="S3_font1">￥</span>168.00
	    							</span>
	    							<span class="S3_font2">
	    								<span>￥</span>269.00
	    							</span>
    							</p>
    						</div>
    					</li>
    					<li>
    						<div class="left fl">
    							<a href="goodsDetails.php"><img src="images/goodsList/hotlogo1.jpg" height="110" width="110" alt=""></a>
    						</div>
    						<div class="right fr">
								<p class="S1"><a href="goodsDetails.php">德国梅克伦堡小麦啤酒500ml（6连包）</a></p>
								<p class="S2"><a href="goodsDetails.php">梅克伦堡品牌旗舰店</a></p>
								<p class="S3">
	    							<span class="S3_font">
	    								<span class="S3_font1">￥</span>15.00
	    							</span>
	    							<span class="S3_font2">
	    								<span>￥</span>52.00
	    							</span>
								</p>
    						</div>
    					</li>
    					<li>
    						<div class="left fl">
    							<a href="goodsDetails.php"><img src="images/goodsList/hotlogo2.jpg" height="110" width="110" alt=""></a>
    						</div>
    						<div class="right fr">
    							<p class="S1"><a href="goodsDetails.php">法国拉菲传奇波尔多红葡萄酒750ml</a></p>
    							<p class="S2"><a href="goodsDetails.php">1919拉菲官方旗舰店</a></p>
    							<p class="S3">
	    							<span class="S3_font">
	    								<span class="S3_font1">￥</span>86.00
	    							</span>
	    							<span class="S3_font2">
	    								<span>￥</span>119.00
	    							</span>
    							</p>
    						</div>
    					</li>
    					<li>
    						<div class="left fl">
    							<a href="goodsDetails.php"><img src="images/goodsList/hotlogo3.jpg" height="110" width="110" alt=""></a>
    						</div>
    						<div class="right fr">
    							<p class="S1"><a href="goodsDetails.php">1664白啤瓶装330ML</a></p>
    							<p class="S2"><a href="goodsDetails.php">1919凯旋官方旗舰店</a></p>
    							<p class="S3">
	    							<span class="S3_font">
	    								<span class="S3_font1">￥</span>11.80
	    							</span>
	    							<span class="S3_font2">
	    								<span>￥</span>22.00
	    							</span>
    							</p>
    						</div>
    					</li>
    				</ul>
    			</div>
 <!-- 商品列表 -->
    			<div class="sort">
    				<span class="sort1">酒类</span>
    				<span><img src="images/goodsList/img_rightdrt.png" alt=""></span>
    				<span>白酒</span>
    			</div>
    			<ul class="List2">
    				<li>
    					<span class="price_f fl">价格</span>
    					<div class="price">
    						<a href="###">0-299</a>
    						<a href="###">300-599</a>
    						<a href="###">600-1099</a>
    						<a href="###">1100-1699</a>
    						<a href="###">1700以上</a>
    					</div>
    				</li>
    				<li class="price1">
    					<span class="price_f fl">品牌</span>
    					<div class="price price2">
    						<a href="###">剑南春</a>
    						<a href="###">西凤</a>
    						<a href="###">泸州老窖</a>
    						<a href="###">五粮液</a>
    						<a href="###">茅台</a>
    						<a href="###">牛栏山</a>
    						<a href="###">丰谷</a>
    						<a href="###">国之娇子</a>
    						<a href="###">古井贡酒</a>
    						<a href="###">水井坊</a>
    						<a href="###">六和液</a>
    						<a href="###">汾酒</a>
    						<a href="###">泸州窖酒</a>
    						<a href="###">一品景芝</a>
    						<a href="###">白金</a>
    						<a href="###">金水滴</a>
    						<a href="###">皇沟御酒</a>
    						<a href="###">五粮印象</a>
    						<a href="###">交君</a>
    						<a href="###">老榆林</a>
    						<a href="###">劲酒</a>
    						<a href="###">百年天壤</a>
    						<a href="###">酒宗</a>
    						<a href="###">拇指郎</a>
    						<a href="###">八百寿</a>
    						<a href="###"></a>
    						<a href="###">丛台</a>
    						<a href="###">贞元增</a>
    						<a href="###">白金酒</a>
    						<a href="###">三溪</a>
    						<a href="###">梅兰春</a>
    						<a href="###">魏武帝</a>
    						<a href="###">御潭</a>
    						<a href="###">其他</a>
    						<a href="###">老机场</a>
    						<a href="###">传国奇</a>
    						<a href="###">中孚传奇</a>
    						<a href="###">塔城百</a>
    						<a href="###">雄蕊菜鸟</a>
    						<a href="###">品九</a>
    						<a href="###">网衡水老</a>
    						<a href="###">白金</a>
    						<a href="###">粹李</a>
    						<a href="###">夜郎古剑</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">网衡水老</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">贵州迎宾酒</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">贵州迎宾酒</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">金门高粱</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">五粮液</a>
    						<a href="###">唐有缘</a>
    						<a href="###">白金</a>
    						<a href="###">传奇贵酒</a>
    						<a href="###">一道泓习</a>
    						<a href="###">雄景阳春</a>
    						<a href="###">出品习酒</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="###">涂仙泸州</a>
    						<a href="###">白金</a>
    						<a href="###">赖汉玺天</a>
    						<a href="###">白金</a>
    						<a href="###">白金</a>
    						<a href="">金门高粱</a>
    					</div>
    					<a href="###" class="more">
    						<label for="">更多</label>
    						<span><img src="images/shoppingCart/icon-seldown.png" height="13" width="10" alt=""></span>
    					</a>
    					
    				</li>
    				<li>
    					<span class="price_f fl">酒精度</span>
    					<div class="price">
    						<a href="###">50度以上</a>
    						<a href="###">40-49度</a>
    						<a href="###">35-39度</a>
    						<a href="###">35度以下</a>
    					</div>
    				</li>
    				<li>
    					<span class="price_f fl">香型</span>
    					<div class="price">
    						<a href="###">浓香型</a>
    						<a href="###">凤香型</a>
    						<a href="###">酱香型</a>
    						<a href="###">清香型</a>
    						<a href="###">绵柔型</a>
    						<a href="###">芝麻香型</a>
    						<a href="###">其它香型</a>
    						<a href="###">兼香型</a>
    						<a href="###">董香型</a>
    						<a href="###">馥郁型</a>
    						<a href="###">药香型</a>
    						<a href="###">陶香型</a>
    					</div>
    				</li>
    				<li>
    					<span class="price_f fl">产地/产区</span>
    					<div class="price">
    						<a href="###">0-299</a>
    						<a href="###">300-599</a>
    						<a href="###">600-1099</a>
    						<a href="###">1100-1699</a>
    						<a href="###">1700以上</a>
    					</div>
    				</li>
    			</ul>
<!-- 图片 -->
    			<div class="gooodsPic">
    				<div class="picLeft fl">
    					<div class="picLeft1"><a href="goodsDetails.php"><img src="images/goodsList/nows.png.jpg" alt=""></a></div>
    					<div class="picLeft1"><a href="goodsDetails.php"><img src="images/goodsList/华茅-列表页左中.jpg" alt=""></a></div>
    					<div class="picLeft2">
    						<p class="S0">猜你喜欢</p>
    						<ul class="picLeft_list">
    							<li>
		    						<div class="left fl">
		    							<a href="goodsDetails.php"><img src="images/goodsList/nows1.jpg" height="100" width="110" alt=""></a>
		    						</div>
		    						<div class="right fr">
		    							<p class="S1"><a href="goodsDetails.php">【贝克汉姆推荐】40°翰格雅爵单一谷物苏格兰</a></p>
		    							<p class="S2"><a href="goodsDetails.php">1919自营店</a></p>
		    							<p class="S3">
			    							<span class="S3_font">
			    								<span class="S3_font1">￥</span>168.00
			    							</span>
			    							<span class="S3_font2">
			    								<span>￥</span>269.00
			    							</span>
		    							</p>
		    						</div>
		    					</li>
		    					<li>
		    						<div class="left fl">
		    							<a href="goodsDetails.php"><img src="images/goodsList/nows2.jpg" height="110" width="110" alt=""></a>
		    						</div>
		    						<div class="right fr">
										<p class="S1"><a href="goodsDetails.php">德国梅克伦堡小麦啤酒500ml（6连包）</a></p>
										<p class="S2"><a href="goodsDetails.php">梅克伦堡品牌旗舰店</a></p>
										<p class="S3">
			    							<span class="S3_font">
			    								<span class="S3_font1">￥</span>15.00
			    							</span>
			    							<span class="S3_font2">
			    								<span>￥</span>52.00
			    							</span>
										</p>
		    						</div>
		    					</li>
		    					<li>
		    						<div class="left fl">
		    							<a href="goodsDetails.php"><img src="images/goodsList/nows3.jpg" height="110" width="110" alt=""></a>
		    						</div>
		    						<div class="right fr">
		    							<p class="S1"><a href="goodsDetails.php">52度剑南春（新包装）500ml</a></p>
		    							<p class="S2"><a href="goodsDetails.php">1919剑南春自营店</a></p>
		    							<p class="S3">
			    							<span class="S3_font">
			    								<span class="S3_font1">￥</span>368.00
			    							</span>
			    							<span class="S3_font2">
			    								<span>￥</span>428.00
			    							</span>
		    							</p>
		    						</div>
		    					</li>
		    					<li>
		    						<div class="left fl">
		    							<a href="goodsDetails.php"><img src="images/goodsList/nows4.jpg" height="110" width="110" alt=""></a>
		    						</div>
		    						<div class="right fr">
		    							<p class="S1"><a href="goodsDetails.php">法国拉菲传说波尔多红葡萄酒（红标/蓝标）750ml</a></p>
		    							<p class="S2"><a href="goodsDetails.php">1919拉菲官方旗舰店</a></p>
		    							<p class="S3">
			    							<span class="S3_font">
			    								<span class="S3_font1">￥</span>99.00
			    							</span>
			    							<span class="S3_font2">
			    								<span>￥</span>119.00
			    							</span>
		    							</p>
		    						</div>
		    					</li>
		    					<li>
		    						<div class="left fl">
		    							<a href="goodsDetails.php"><img src="images/goodsList/nows5.jpg" height="110" width="110" alt=""></a>
		    						</div>
		    						<div class="right fr">
		    							<p class="S1"><a href="goodsDetails.php">墨西哥科罗娜啤酒330m*6（联包装）</a></p>
		    							<p class="S2"><a href="goodsDetails.php">1919科罗娜官方旗舰店</a></p>
		    							<p class="S3">
			    							<span class="S3_font">
			    								<span class="S3_font1">￥</span>53.00
			    							</span>
			    							<span class="S3_font2">
			    								<span>￥</span>70.01
			    							</span>
		    							</p>
		    						</div>
		    					</li>
    						</ul>
    					</div>
    					<div class="picLeft1"><a href="goodsDetails.php"><img src="images/goodsList/五粮特曲-列表页左下.jpg" alt="" style="margin-top:10px;"></a>
    					</div>
    				</div>
    				<div class="picRight fr">
    					<ul class="picRight_price">
    						<li>综合排序</li>
    						<li class="picRight_price2">价格</li>
    					</ul>
    					<p><a href="goodsList.php"><img src="images/goodsList/img_checkbox.png" alt=""></a>自营商品</p>
    					<div class="Sbox">
    						<ul>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/1.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/2.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/3.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/4.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/5.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/6.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/7.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/8.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/9.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/10.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/11.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/12.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/13.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/14.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/15.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1"> ¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    							<li>
    								<div class="box1">
    									<a href="goodsDetails.php">
    										<img src="images/goodsList/16.jpg" height="200" width="200" alt="">
    									</a>
    								</div>
    								<div class="box2">
    									<p>
    										<span class="box2_f">¥<span class="box2_f0">1830.00</span></span>
    										<span class="box2_f1">¥2994.00</span>
    									</p>
    									<p>
    										<a href="goodsDetails.php">【店铺商品】53°山西杏花村汾酒青花20年 500ml*6</a>
    									</p>
    									<p></p>
    								</div>
    								<div class="box3">
                                        <img src="images/goodsList/zq-icon-24time.jpg" alt="">                        
                                    </div>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
  <!-- 分页 -->
  				<div class="paging">
  					<div class="pro fl">上一页</div>
  					
  					<div class="view fl">
                        <div class="first2 fl">1</div>
  						<div class="first fl">......</div>
  						<ul class="pageList">
  							
  							
  						</ul>
  						<div class="last fl">......</div>
  						<div class="last2 fl">49</div>
  					</div>
  					
  					<div class="next fl">下一页</div>
  				</div>
    		</div>
    	</div>
<!-- 商品列表 -->
        <div class="footer">
            <div class="wrap">
                <ul class="f_help">
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">购物指南</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">1919会员体系介绍</a></li>
                            <li><a href="friend_link.php">发票说明</a></li>
                            <li><a href="friend_link.php">支付问题解答</a></li>
                            <li><a href="friend_link.php">优惠券说明</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">帮助中心</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">1919会员体系介绍</a></li>
                            <li><a href="friend_link.php">发票说明</a></li>
                            <li><a href="friend_link.php">支付问题解答</a></li>
                            <li><a href="friend_link.php">优惠券说明</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="friend_link.php">售后服务</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">售后说明</a></li>
                            <li><a href="friend_link.php">品质保障</a></li>
                            <li><a href="friend_link.php">退换货流程</a></li>
                            <li><a href="friend_link.php">快喝购酒服务</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="###">促销信息</a></h5>
                        <ul class="f_help_list">
                            <li><a href="liquorZone.php">【白酒专区】好酒甄选...</a></li>
                            <li><a href="beiZone.php">【洋啤专区】全球精选...</a></li>
                            <li><a href="wineZone.php">【红酒专区】品质迷情...</a></li>
                            <li><a href="###">【奔富专题】最低45元起</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="###">媒体报道</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">壹玖壹玖酒类直供2017...</a></li>
                            <li><a href="friend_link.php">2016年度1919酒类直...</a></li>
                            <li><a href="friend_link.php">1919董事长杨陵江...</a></li>
                            <li><a href="friend_link.php">价格杀手"1919",让...</a></li>
                        </ul>
                    </li>
                    <li class="fl">
                        <h5 class="f_title"><a href="###">配送说明</a></h5>
                        <ul class="f_help_list">
                            <li><a href="friend_link.php">配送时间</a></li>
                            <li><a href="friend_link.php">配送费用</a></li>
                            <li><a href="friend_link.php">配送范围</a></li>
                            <li><a href="friend_link.php">货到付款</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="friendlink">
                    <div class="f_left fl">
                        <ul class="friendlink_list">
                            <li class="fl"><a href="goodsDetails.php">1919酒类网上商城</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">中国白酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">葡萄酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">啤酒</a></li>
                            <li class="f_line fl">|</li>
                            <li class="fl"><a href="goodsList.php">1919招商加盟</a></li>
                        </ul>
                        <div class="f_sure">
                            <p>壹玖壹玖酒类平台科技股份有限公司 All Rights Reserved &nbsp; &nbsp;&nbsp;&nbsp; 蜀ICP备1338号</p>
                            <p>增值电信业务经营许可证：川B2-20110101</p>
                            <p>公司地址：高新区天府大道北段1700号1栋2单元18层1801号</p>
                        </div>
                        <ul class="f_pic">
                            <li class="fl"><img src="images/commom/certificate-one.jpg" alt=""></li>
                            <li class="fl"><img src="images/commom/certificate-two.jpg" alt=""></li>
                            <li class="fl"><img src="images/commom/certificate-three.jpg" alt=""></li>
                            <li class="fl"><img src="images/commom/certificate-four.jpg" alt=""></li>
                            <li class="fl"><img src="images/commom/certificate-five.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="f_right fr">
                        <ul class="f_right_list">
                            <li class="fl">
                                <a href="###"><img src="images/commom/kuaihe-erweima_03.jpg" alt=""></a>
                                <p>下载APP轻松喝酒</p>
                            </li>
                            <li class="fl">
                                <a href="###"><img src="images/commom/erweima_03.jpg" alt=""></a>
                                <p>关注1919公众号</p>
                            </li>
                            <li class="fl">
                                <a href="###"><img src="images/commom/sinaLogo.jpg" alt="" class="f_sinapic"></a>
                            </li>
                            <li class="f_tip fl">购买的时候请确认达到法定饮酒年龄！1919不销售含酒精产品给18岁以下人士！</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="f_last">站长统计</div>
            </div>
        </div>
    <!-- footer结束 -->
    </body>
    <?php echo '<script'; ?>
 src="js/goodsList.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/shoplist.js"><?php echo '</script'; ?>
>
</html><?php }
}
