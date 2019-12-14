<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/www/wwwroot/jinli.sxzywl.net/public/../application/index/view/user/index.html";i:1575944753;s:81:"/www/wwwroot/jinli.sxzywl.net/public/../application/index/view/template/base.html";i:1576223686;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--标题-->
    <title><?php echo $title; ?></title>
    <!--简介-->
    <meta name="description" content="description"/>
    <!--关键词-->
    <meta name="keywords" content="keywords"/>
    <!--顶部页面小图标-->
    <!-- <link rel="stylesheet" href="./ydui/css/ydui.css" /> -->
    <link rel="shortcut icon" href="__STATIC__/index/static/favicon.ico">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/mian.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/zy-media/zy.media.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/swiper/css/swiper.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/dropload.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/mobileSelect.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="__STATIC__/index/icon/iconfont.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="__STATIC__/index/css/rig.css?v=<?php echo time(); ?>">
    
    <script type="text/javascript" src="__STATIC__/index/js/url.js?v=<?php echo time(); ?>"></script>
    <script src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
    <script type="text/javascript" src="__STATIC__/index/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="__STATIC__/index/js/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="__STATIC__/index/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="__STATIC__/index/zy-media/zy.media.js"></script>
    <script>
        var wxCofnigData = {
            debug: false, //是否 开启调试模式,建议调试的时候debug 改为true
            appId: "<?php echo $jsonConfig['appid']; ?>",
            timestamp: <?php echo $jsonConfig['timestamp']; ?>,
            nonceStr: "<?php echo $jsonConfig['nonceStr']; ?>",
            signature: "<?php echo $jsonConfig['signature']; ?>",
        };
        var shareTitle = "<?php echo $shareConfig['shareTitle']; ?>";
        var shareDesc = "<?php echo $shareConfig['shareDesc']; ?>";
        var shareUrl = "<?php echo $shareConfig['shareUrl']; ?>";
        var shareIcon = "<?php echo $shareConfig['shareIcon']; ?>";
        function setCache(key, val) {
            return localStorage.setItem(key, val);
        }
        function getCache(key) {
            return localStorage.getItem(key);
        }
    </script>
    <style>
        .vertical {
            font-size: .3rem;
            position: fixed;
            top: 30%;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body class="<?php echo isset($body_class) ? $body_class : 'nullBodyClass'; ?> <?php echo $controller.'_'.$action; ?>"
      <?php if(isset($body_background)): if($body_background): ?>
          style="background: url(<?php echo $body_background; ?>);background-size: 100% 100%;"
          <?php else: ?>
             style="background: #fff;box-sizing: border-box;width: 100%"
      <?php endif; else: if(isset($body_background_color)): ?>
style="background:<?php echo $body_background_color; ?>;box-sizing: border-box;width: 100%"

<?php else: ?>
style="background: #fff;box-sizing: border-box;width: 100%"

<?php endif; endif; ?>data-phone="<?php echo $rigU['phone']; ?>" data-level="<?php echo $rigU['level']; ?>" data-ua="<?php echo $equipmentType; ?>" data-card = <?php echo $rigU['card']; ?>>
<div class="vertical" style="display: none;">为了保证您的体验效果,请保持竖屏幕访问</div>
<div class="app-main">
    
    
    
<style>
    .floating-box{display: none;}
</style>
<div class="upgrade-body">
    <div class="upgrade-header-box">
        <div class="upgrade-header">
            <div class="upgrade-header-con">
                <div class="upgrade-header-left">
                    <?php if($userinfo['head_type'] == 1): ?>
                    <img src="<?php echo $userinfo['head']; ?>" style="width: 100%">
                    <?php else: ?>
                    <img src="__IMG__/<?php echo $userinfo['head']; ?>" alt="" style="width: 100%">
                    <?php endif; ?>
                </div>
                <div class="upgrade-header-right">
                    <h2><?php echo $userinfo['nick_name']; ?></h2>
                    <div class="upgrade-header-txt">
                        <?php if($userinfo['level'] == 0): ?> <img src="__STATIC__/index/img/vip_lv_0.png">
                        <?php elseif($userinfo['level'] == 1): ?><img src="__STATIC__/index/img/vip_lv_1.png">
                        <?php elseif($userinfo['level'] == 2): ?><img src="__STATIC__/index/img/vip_lv_2.png">
                        <?php elseif($userinfo['level'] == 3): ?><img src="__STATIC__/index/img/vip_lv_3.png">
                        <?php elseif($userinfo['level'] == 4): ?><img src="__STATIC__/index/img/vip_lv_4.png">
                        <?php else: ?><img src="__STATIC__/index/img/vip_lv_5.png">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="upgrade-header-a font-bold">
                <a href="<?php echo url('user/equity2'); ?>"></a>
            </div>
        </div>
    </div>
    <div class="upgrade-con" share-num="<?php echo $userinfo['share_num']; ?>">
        <div class="upgrade-Brocade">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $_result=getUserAuthBanner($userinfo);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="swiper-slide">
                        <a href="javascript:;" t-href="<?php if(isset($vo['banner_url'])): ?><?php echo $vo['banner_url']; else: ?>javascript:;<?php endif; ?>" style="width: 100%;height: 100%"
                           data-banner-type="<?php echo $vo['banner_type']; ?>" data-banner-level = "<?php echo $vo['level']; ?>">
                            <img src="<?php echo $vo['banner_pic']; ?>" alt="<?php echo $vo['banner_title']; ?>" style="width: 100%;height: 100%">
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="upgrade-tool">
            <div class="upgrade-tool-top">
                <h2>我的工具</h2>
            </div>
            <div class="upgrade-tool-bot">
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('user/team'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-2.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>锦鲤圈</span>
                    </a>
                </div>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('user/share'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-3.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>分享有礼</span>
                    </a>
                </div>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('goodslist/index',array('id'=>17)); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-5.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>培训中心</span>
                    </a>
                </div>
                <?php if($userinfo['phone'] !=0): ?>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('user/upphone'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-4.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>修改手机</span>
                    </a>
                </div>
                <?php else: ?>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('user/phone'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-4.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>绑定手机</span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="upgrade-wallet">
            <div class="upgrade-wallet-top">
                <div class="upgrade-wallet-top-left">
                    我的钱包
                </div>
                <div class="upgrade-wallet-top-right">
                    <a href="<?php echo url('Amount/index'); ?>">
                        进入钱包
                        <i class="iconfont icon-youjiantou"></i>
                    </a>
                </div>
            </div>
            <div class="upgrade-wallet-cen">
                <div class="upgrade-wallet-cen-top">我的余额</div>
                <div class="upgrade-wallet-cen-bot"><?php echo number_format($userinfo['amount'], 2, ".", ""); ?></div>
            </div>
            <div class="upgrade-wallet-bot">
                <div class="upgrade-wallet-bot-con">
                    <h3>今日收益</h3>
                    <span><?php echo $amount['dayamount']; ?></span>
                </div>
                <div class="upgrade-wallet-bot-con on">
                    <h3>本月收益</h3>
                    <span><?php echo $amount['mothamount']; ?></span>
                </div>
                <div class="upgrade-wallet-bot-con">
                    <h3>累计收益</h3>
                    <span><?php echo $amount['totalamount']; ?></span>
                </div>
            </div>
        </div>
        <div class="upgrade-service" style="margin-bottom: .2rem;">
            <div class="upgrade-tool-top">
                <h2>我的服务</h2>
            </div>
            <div class="upgrade-tool-bot">
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('user/service'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-7.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>客服中心</span>
                    </a>
                </div>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('Cdkey/index'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/duih.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>兑换中心</span>
                    </a>
                </div>
                <div class="upgrade-tool-con">
                    <a href="<?php echo url('about/index'); ?>">
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/vip-6.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>关于锦鲤</span>
                    </a>
                </div>
                <div class="upgrade-tool-con">
                    <a href="javascript:;"    _renz>
                        <div class="upgrade-tool-img wh-88-rem">
                            <img src="__STATIC__/index/img/renz.png?v=<?php echo time(); ?>"/>
                        </div>
                        <span>身份认证</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="<?php echo url('index/index'); ?>">
            <div class="upgrade-tool-img">
                <img src="__STATIC__/index/img/mm2.png?v=<?php echo time(); ?>">
            </div>

            锦鲤MoM
        </a>
        <a href="<?php echo url('order/index'); ?>">
            <div class="upgrade-tool-img">
                <img src="__STATIC__/index/img/kd2.png?v=<?php echo time(); ?>">
            </div>
            我的课程
        </a>
        <a href="<?php echo url('user/index'); ?>">
            <div class="upgrade-tool-img">
                <img src="__STATIC__/index/img/user1.png?v=<?php echo time(); ?>">
            </div>
            个人中心
        </a>
    </div>
</div>

    <!--遮罩层-->
    <div class="bg on" _cou></div>
    <!--四叶草小图标-->
    <div class="floating-box">
        <img src="__STATIC__/index/img/caidan.png">
    </div>
    <!--菜单组件-->
    <div class="floating-nav alert_a" _hide>
        <div class="floating-nav-top">
            <a href="<?php echo url('index/index'); ?>">
                <div class="floating-img">
                    <img src="__STATIC__/index/img/mm1.png">
                </div>
                <span>锦鲤MoM</span>
            </a>
            <a href="<?php echo url('user/index'); ?>">
                <div class="floating-img">
                    <img src="__STATIC__/index/img/user1.png">
                </div>
                <span>个人中心</span>
            </a>
            <a href="javascript:;" _rwm
               onclick="showtop('<?php echo $Customer['wxgz']; ?>','锦鲤MoM','长按识别二维码关注公众号')">
                <div class="floating-img">
                    <img src="__STATIC__/index/img/cai.png">
                </div>
                <span>进入公众号</span>
            </a>
        </div>
        <div class="floating-nav-bot" __close data-for="alert_a|bg">关闭</div>
    </div>
    <!--每日弹窗组件-->
    <div class="popup-img alert_a" data-showAuth="<?php echo isset($showAuth) ? $showAuth : '0'; ?>" style="display: none;">
        <div class="popup-imgbox">
            <a href="<?php if(isset($index_pic_url)): ?><?php echo $index_pic_url; else: ?>javascript:;<?php endif; ?>">
                <img src="<?php if(isset($index_url)): ?><?php echo $index_url; endif; ?>"/>
            </a>
        </div>
        <div class="Shut" __close data-for="alert_a|bg">
            <img src="__STATIC__/index/img/guanbi.png" alt="">
        </div>
    </div>
    <div class="content-textbox">
        <div class="content-box">
            <div class="content-text">
                <textarea maxlength="140" placeholder="优质评论将会被优先展示" id="liuyanText"></textarea>
                <div class="content-number">
                    <span class="showinfo-numder">0</span>/<span>140</span>
                </div>
            </div>
        </div>
        <div class="touming"></div>
        <button class="content-but" style="z-index: 1111">发送</button>
    </div>
    <!--礼包弹窗-->
    <!--<div class="upgrade-tk">-->
        <!--<div class="upgrade-tktap">-->
            <!--<h2><span>365</span>大礼包</h2>-->
        <!--</div>-->
        <!--<div class="upgrade-tkhide">-->
            <!--<img src="__STATIC__/index/img/chacha.png">-->
        <!--</div>-->
        <!--<div class="upgrade-tktop">-->
            <!--<div class="upgrade-t">-->
                <!--<div class="upgrade-colo">福利一</div>-->
                <!--<h2>VIP年卡</h2>-->
            <!--</div>-->
            <!--<div class="upgrade-b">-->
                <!--<img src="__STATIC__/index/img/card_vip.png">-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="upgrade-tkcon">-->
            <!--<div class="upgrade-t">-->
                <!--<div class="upgrade-colo">福利二</div>-->
                <!--<h2>精品课豪华礼包（10选5）</h2>-->
            <!--</div>-->
            <!--<div class="upgrade-tab mian">-->
                <!--<div class="swiper-container">-->
                    <!--<div class="swiper-wrapper">-->
                        <!--<?php if(isset($libaocourse)): ?>-->
                        <!--<?php if(count($libaocourse)>0): ?>-->
                        <!--<?php if(is_array($libaocourse) || $libaocourse instanceof \think\Collection || $libaocourse instanceof \think\Paginator): $i = 0; $__LIST__ = $libaocourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                        <!--<div class="swiper-slide">-->
                            <!--<div class="upgrade-imgbox"><img src="<?php echo $vo['course_pic']; ?>"></div>-->
                            <!--<div class="upgrade-txt"><?php echo $vo['course_title']; ?></div>-->
                            <!--<div class="upgrade-state" data-id="<?php echo $vo['id']; ?>">已选</div>-->
                        <!--</div>-->
                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                        <!--<?php endif; ?>-->
                        <!--<?php endif; ?>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="upgrade-tkbot">-->
            <!--赠送课程可在个人中心→我的课程中找到-->
        <!--</div>-->
        <!--<div class="upgrade-butbox">-->
            <!--<a href="javascript:;" class="upgrade-but">-->
                <!--确认完成-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->

    <div class="bag-box alert_a vip_succ" style="display: none" data-auth="hz">
        <!--<div class="vip-biaoti">恭喜您成为锦鲤VIP</div>-->
        <a href="<?php echo url('order/index'); ?>">
        <div class="vip-img" style="width: 0;margin: 0">
            <img id="VIPZ1" src="__STATIC__/index/img/home/vip_succ1.png" style="display: none;width: 5.53rem;height: 7.5rem">
            <img id="VIPZ2" src="__STATIC__/index/img/home/vip_succ2.png" style="display: none;width: 5.53rem;height: 7.5rem">
            <img id="VIPZ3" src="__STATIC__/index/img/home/vip_succ3.png" style="display: none;width: 5.53rem;height: 7.5rem">
            <img id="VIPZ4" src="__STATIC__/index/img/home/vip_succ4.png" style="display: none;width: 5.53rem;height: 7.5rem">
            <img id="VIPZ5" src="__STATIC__/index/img/home/vip_succ5.png" style="display: none;width: 5.53rem;height: 7.5rem">
        </div>
        </a>
        <!--<div class="bag-box-top bgnone dalibao" style="display: none">-->
            <!--<div class="bag-box-bot bag-pannd">-->
                <!--&lt;!&ndash;<a href="javascript:succbuyvip();">&ndash;&gt;-->
                    <!--&lt;!&ndash;领取大礼包&ndash;&gt;-->
                <!--&lt;!&ndash;</a>&ndash;&gt;-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="bag-box-top bgnone close" style="display: none">-->
            <!--<div class="bag-box-bot bag-pannd">-->
                <!--<a href="/index/user/index.html">-->
                    <!--确定-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="bag-box-none" __close data-for="alert_a|bg">-->
            <!--<img src="__STATIC__/index/img/chacha.png">-->
        <!--</div>-->
    </div>

    <!--<div class="bag-box alert_a" style="display:none;" data-auth="qy">-->
        <!--<div class="bag-box-top">-->
            <!--<div class="bag-box-tab">-->
                <!--锦鲤尊贵VIP-->
            <!--</div>-->
            <!--<div class="bag-box-con">-->
                <!--<div class="bag-box-con-top">-->
                    <!--<div class="bag-box-con-equity">-->
                        <!--权益一-->
                    <!--</div>-->
                    <!--<div class="bag-box-con-equity">-->
                        <!--权益一-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="bag-box-con-bot">-->
                    <!--<div class="bag-box-con-equity">-->
                        <!--权益一-->
                    <!--</div>-->
                    <!--<div class="bag-box-con-equity">-->
                        <!--权益一-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="bag-box-bot">-->
                <!--&lt;!&ndash;<a href="javascript:succbuyvip();">&ndash;&gt;-->
                    <!--&lt;!&ndash;查看我的礼包&ndash;&gt;-->
                <!--&lt;!&ndash;</a>&ndash;&gt;-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="bag-box-none" __close data-for="alert_a|bg">-->
            <!--<img src="__STATIC__/index/img/guanbi.png">-->
        <!--</div>-->
    <!--</div>-->


    <div class="rwm alert_a" _cou>
        <div class="rwm-bot" __close data-for="alert_a|bg">
            <img src="__STATIC__/index/img/chacha.png" alt="">
        </div>
        <div class="rwm-box">
            <div class="rwm-t">
                <h2></h2>
            </div>
            <div class="rwm-img">
                <img src=''/>
            </div>
            <div class="rwm-b">
                <span></span>
            </div>
        </div>
    </div>
    <style>
        .layui-layer-hui {
            background: rgba(245, 245, 245, 1);
            color: #000000;
        }
    </style>
    <!--购买成功开始-->
    <!--<div class="Gocourse" hidden>-->
        <!--<div class="zxj-buysuc">-->
            <!--<div class="done">-->
                <!--<img src="" alt="">-->
                <!--<p>购买成功</p>-->
            <!--</div>-->
            <!--<a href="javascript:;">进入课程</a>-->
            <!--<div class="joinwx">-->
                <!--<p class="pone">长按二维码添加小助手微信</p>-->
                <!--<img src="" alt="">-->
                <!--<p class="ptwo">请添加小鲤客服微信：geniusmini,加入社群</p>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->

    <!--购买成功结束-->




</div>
<script type="text/javascript" src="__STATIC__/index/js/dropload.js?v=<?php echo time(); ?>"></script>
<script type="text/javascript" src="__STATIC__/index/js/wx.js?v=<?php echo time(); ?>"></script>
<script type="text/javascript" src="__STATIC__/index/js/mian.js?v=<?php echo time(); ?>"></script>

<script type="text/javascript">
    setTimeout(function(){
        $.ajax({
            url: "/Index/user/CreateShareEquityPic.html",
            type: "post",
            data: {},
            success: function (e) {
                console.log(e);
            }
        })
    },9200);
</script>


</body>
</html>