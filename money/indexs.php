<?php 
	include_once "../coss.php";
	$jssdk = new JSSDK("wxae66bd619c3c8058","7bdeba5d9728e3814732d6367d7d6d9a");
	$signPackage = $jssdk->getSignPackage();

	$code = $_GET['code'];
	$appid = "wxae66bd619c3c8058";
	$APPSECRET = "7bdeba5d9728e3814732d6367d7d6d9a";
	$getTokenApi = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}&secret={$APPSECRET}&code={$code}&grant_type=authorization_code";
 	$str = httpGet($getTokenApi);
	$arr = json_decode($str,true);
	//print_r($arr);
 	//网页授权接口调用凭证
 	$token = $arr[access_token];
 	//用户id
 	$openid = $arr["openid"];
 	//获取用户信息
 	$getUserInfo = "https://api.weixin.qq.com/sns/userinfo?access_token={$token}&openid={$openid}&lang=zh_CN";
 	$userstr = httpGet($getUserInfo);
 	$userarr = json_decode($userstr,true);
	//print_r($userarr);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>shouye</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/index.css">
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<body>
	<img src="img/timg.gif" id="load" alt="">
	<!-- 第一页 -->
	<div id="box">
		<img src="img/bigmon.png" id="bigmon" alt="">
		<img src="img/down.png" id="down" alt="">
		<img src="img/logo.png" id="logo" alt="">
		<img src="img/tiao.png" id="tiao" class="flipInY animated" alt="">
		<img src="img/ni.png" id="ni" class="lightSpeedIn animated" alt="">
		<img src="img/yin.png" id="yin" class="lightSpeedIn animated" alt="">
		<img src="img/dan.png" id="dan" class="lightSpeedIn animated" alt="">
		<img src="img/wen.png" id="wen" class="zoomInDown animated" alt="">
		<img src="img/money.png" id="money" alt="">
		<div id="btns">
			<button></button>
			<button></button>
			<button></button>
			<button></button>
		</div>
		<img src="img/start.png" id="start" class="fadeInOut animated infinite hinge" alt="">
		<img src="img/hand.png" id="hand" class="fadeInOut animated infinite" alt="">
		<!-- 弹窗 -->
		<div class="zhe">
			<div id="noun" class="t_box">
				<img src="img/cha.png" alt="">
				<div class="s_box">
					<img src="img/noun.png" alt="">
					<ul>
						<li>
							<img class="minc" src="img/yi.png" alt="">
							<img class="headerimg" src="img/w.png" alt="">
							<span class="nick"></span>
							<span class="score"></span>
						</li>
						<li>
							<img class="minc" src="img/san.png" alt="">
							<img class="headerimg" src="img/w.png" alt="">
							<span class="nick"></span>
							<span class="score"></span>
						</li>
						<li>
							<img class="minc" src="img/er.png" alt="">
							<img class="headerimg" src="img/w.png" alt="">
							<span class="nick"></span>
							<span class="score"></span>
						</li>
						<li>
							<span class="minc">4</span>
							<img class="headerimg" src="img/w.png" alt="">
							<span class="nick"></span>
							<span class="score"></span>
						</li>
						<li>
							<span class="minc">5</span>
							<img class="headerimg" src="img/w.png" alt="">
							<span class="nick"></span>
							<span class="score"></span>
						</li>
					</ul>
				</div>
			</div>
			<div id="rule" class="t_box">
				<img src="img/cha.png" alt="">
				<div class="s_box">
					<h2>活动规则</h2>
					<p>1、每人有多次游戏机会，但成绩只能提交一次，且提交之后不能更改！</p>
					<p>2、提交成绩时要提供姓名及手机号码作为兑奖凭证，因用户本人未在规定时间内提供正确的手机号码造成的奖品损失，由用户个人承担。</p>
					<p>3、活动时间为2016年5月11日-5月19日24:00，活动结束后将在“雾灵山庄”微信公布中奖名单。</p>
					<p>4、获奖规则：系统将根据大家提交的成绩，按照由多到少的规则进行排行，排名第1的网友将获得一等奖，排名第2-第21位的网友将分获二等奖，以此类推。</p>
					<p>5、奖品的发放：活动结束后，将由工作人员与您取得联系，并将相应的卡券编号发送到您提供的手机号码上。</p>
				</div>
			</div>
			<div id="prize" class="t_box">
				<img src="img/cha.png" alt="">
				<div class="s_box">
					<h2>活动奖品</h2>
					<p>一等奖1人：价值1488元7号楼1晚豪华标间免费房券1张，并可享康体项目3折优惠；</p>
					<p>二等奖20人：100元订房代金券每人1张，并可享康体项目4折优惠；</p>
					<p>三等奖50人：50元订房代金券每人1张，并可享康体项目5折优惠。</p>
					<p>奖品的有效期：2016年5月20日至6月15日（周五、周六及法定节假日不可用）</p>
				</div>
			</div>
			<div id="instructions" class="t_box">
				<img src="img/cha.png" alt="">
				<div class="s_box">
					<h2>奖券使用说明</h2>
					<p>1、奖品的使用：请务必至少提前一周致电010-81027788或81027799进行预约，并于入住时向前台服务人员出示您手机上收到的卡券编号即可使用（需同时验证获奖人姓名与手机号码）。</p>
					<p>2、代金券仅适用于线下门市价入住客房消费使用，不适用于通过携程或微信等其他线上渠道预定使用。</p>
					<p>3、免费房安排的房间将视当时酒店排房情况而定，如您所预约的时段预订已满，将与您协商调整入住时间。</p>
					<p>4、免费房券及代金券不得用于除订房外其他产品消费，不得与酒店其他优惠折扣或礼券同时使用，且不予退换、兑换现金或找赎。</p>
					<p>5、对于恶意刷奖者和作弊者，主办方有权取消其兑奖资格。</p>
				</div>
			</div>
			<div id="forms" class="t_box">
				<img src="img/cha.png" alt="">
				<div class="s_box">
					<img src="img/formt.png" alt="">
					<p>个人信息将作为领奖依据</p>
					<p>请认真填写</p>
					<form>
						<input type="text" id="name" placeholder="姓名"><br>
						<input type="text" id="phone" placeholder="电话">
						<button type="button">提交并开始游戏</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- 第二页 -->
	<div id="box2">
		<img src="img/zmon.png" class="zmon" id="zmon" alt="">
		<img src="img/hand2.png" id="hand2" class="move animated hinge" alt="">

		<div id="quan">
			<img src="img/quan.png" alt="">
			<div id="lun">
				<ul>
					<li><img src="img/wena3.png" alt=""></li>
					<li><img src="img/wena2.png" alt=""></li>
					<li><img src="img/wena1.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div id="timestore">
			<span>0</span>
			<span>0</span>
			<span>0</span>
			<span>10</span>
			<img src="img/time.png" alt="">
		</div>
		<div id="monbox">
			<img src="img/zmon.png" class="zmon" alt="">
		</div>
		<img src="img/down.png" id="down2" alt="">
	</div>
	<!-- 第三页 -->
	<div id="box3">
		<img src="img/tit.png" id="tit" alt="">
		<p>
			<span class="fens">2</span>
		</p>
		<p>你太客气了，这不是你的挑战极限吧</p>
		<div class="minbox">
			<span>我的辉煌战绩:</span>
			<span id="best"></span>
			<span>当前排名:</span>
			<span id="min"></span>
		</div>
		<div class="btn">
			<img src="img/again.png" alt="">
			<img src="img/fenx.png" alt="">
		</div>
	</div>
	<!-- 分享页面 -->
	<div id="box4"></div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/touch.js"></script>
    <script>
    //微信分享部分
    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: <?php echo $signPackage["timestamp"];?>,
        nonceStr: '<?php echo $signPackage["nonceStr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
        "onMenuShareTimeline"
          // 所有要调用的 API 都要加到这个列表中
        ]
  	});
      wx.ready(function () {
        // 在这里调用 API
          wx.onMenuShareTimeline({
              title: '数钱游戏', // 分享标题
              link: '', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
              imgUrl: 'http://1.yezj.applinzi.com/money/img/money.png', // 分享图标
              success: function () { 
                  // 用户确认分享后执行的回调函数
              },
              cancel: function () { 
                  // 用户取消分享后执行的回调函数
              }
          });
      });
$(function(){
    var nickname = "<?php echo $userarr['nickname']; ?>";
    var headimgurl = "<?php echo $userarr['headimgurl']; ?>";
    var openid = "<?php echo $userarr['openid']; ?>";
    //获取成绩
    $.ajax({
        url:"index.php",
        data:{
            type:"pai",
        },
        dataType:"json",
        success:function(str){
            $(".headerimg").each(function(index){
            	$(this)[0].src = str[index].headimgurl;
            });
            $(".nick").each(function(index){
            	$(this).html(str[index].nickname);
            });
            $(".score").each(function(index){
            	$(this).html("￥"+str[index].score+"00");
            });
            
        }
    })
    // ajax操作
    $("#forms button").on("touchstart",function(){
        $("#box").hide();
        $("#box2").show();
        var name = $("#name").val();
        var phone = $("#phone").val();
        $.ajax({
            url:"index.php",
            data:{
                type:"user",
                openid:openid,
                nickname:nickname,
                headimgurl:headimgurl,
                name:name,
                phone:phone,
                score:0
            },
            dataType:"text",
            success:function(str){
                console.log(str);
            }
        })
    });
	//加载资源
	var img = {
		"again":"img/again.png",
		"bg":"img/bg.png",
		"bg2":"img/bg2.png",
		"bg3":"img/bg3.png",
		"bigmon":"img/bigmon.png",
		"btn":"img/btn.png",
		"cha":"img/cha.png",
		"dan":"img/dan.png",
		"down":"img/down.png",
		"er":"img/er.png",
		"fenx":"img/fenx.png",
		"formt":"img/formt.png",
		"hand":"img/hand.png",
		"hand2":"img/hand2.png",
		"logo":"img/logo.png",
		"money":"img/money.png",
		"ni":"img/ni.png",
		"noun":"img/noun.png",
		"quan":"img/quan.png",
		"san":"img/san.png",
		"start":"img/start.png",
		"tiao":"img/tiao.png",
		"time":"img/time.png",
		"timg":"img/timg.gif",
		"tit":"img/tit.png",
		"w":"img/w.png",
		"wen":"img/wen.png",
		"wena1":"img/wena1.png",
		"wena2":"img/wena2.png",
		"wena3":"img/wena3.png",
		"yi":"img/yi.png",
		"yin":"img/yin.png",
		"zmon":"img/zmon.png"
	}
	function load(imgarr,fn){
		var loadImg = {};
		var len = 0;
		for(i in imgarr){
			len++;
		}
		var num = 0;
		for(i in imgarr){
			var img = new Image();
			img.src = imgarr[i];
			img.onload = (function(index){
				return function(){
					num++;
					loadImg[index] = this;
					//console.log(loadImg)
					if(num>=len){
						fn(loadImg);
					}
				}
			})(i);
		}


	}
	load(img,main);
	function main(loadImg){
        var qw = $(document).innerHeight();
        $("body").height(qw);
		$("#load").hide();
		$("#box").show();
		//菜单
		$("#btns button").on('touchstart',function(index){
			$(".zhe").show();
			$(".t_box").not($(this).index()).hide().eq($(this).index()).show();
		})
		$(".t_box>img").on('touchstart',function(){
			$(".zhe").hide();
		});
		var num = 0;
		var numarr = [];
		var bol = false;
		var time = 10;
		var timer;
		touch.on('#zmon','swipeup',function(){
			$("#hand2").hide();
			num++;
			var imgh = $('<img src="img/zmon.png" class="zmon mon" alt="">');
			$("#monbox").append(imgh);
			if($("#monbox img").length>=5){
				$("#monbox img").eq(1).remove();
			}
			if(num<10){
				num = "00"+num;
			}else if(num>=10&&num<100){
				num = "0"+num;
			}else{
				num = num+'';
			}
			numarr = num.split("");
			$("#timestore span").each(function(index){
				$(this).html(numarr[$(this).index()]);
			})
			bol = true;

			if(bol&&num=="001"){
				timer = setInterval(function(){
					time--;
					time<10?time = "0"+time:time;
					if(time<=0){
						clearInterval(timer);
						$("#box2").hide();
						$("#box3").show();
						$(".fens").html("￥"+parseInt(num)+"00");
                        //时间到了后将数据提交更新成绩
						$.ajax({
							url:"index.php",
							data:{
								type:"score",
                                openid:openid,
								score:parseInt(num)
							},
							dataType:"json",
							success:function(str){
								$("#min").html(str.cheng);
								$("#best").html("￥"+str.best+"00");
							}
						})
					}
					$("#timestore span").eq(3).html(time);
				},1000);
				sl();
			}
		});
		//第二页轮播
		var lih = $("#box").width()*0.826*0.269;
		function sl(){
			setInterval(function(){
				$("#lun ul").animate({top:-lih},function(){
					$("#lun ul").css({top:"0px"});
					$("#lun ul li:first").remove().clone().appendTo("#lun ul");	
				})
			},3000);
		}

		// 页面跳转
		$("#start").on("touchstart",function(){
            $.ajax({
                url:"index.php",
                data:{
                    type:"start",
                },
                dataType:"json",
                success:function(str){
                    if(str.err){
                        $("#box").hide();
        				$("#box2").show();
                    }else{
                        $(".zhe").show();
						$("#forms").show();
                    }
                }
            })
			
		});
		//再来一次
		$(".btn img").eq(0).on("touchstart",function(){
			window.location.href="http://1.yezj.applinzi.com/index.html";
		});
		//分享
		$(".btn img").eq(1).on("touchstart",function(){

			$("#box4").show();
		})
		$("#box4").on("touchstart",function(){
			$("#box4").hide();
		})
	}
})
	</script>
</body>
</html>