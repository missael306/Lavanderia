@extends('welcome')
@section('content')

<!--================End Header Area =================-->
<section class="slider_two_area" id="home">
	<div id="main_slider_ten" class="rev_slider" data-version="5.3.1.6">
		<ul>
			<li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default"
				data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
				data-masterspeed="default" data-thumb="{{asset('plugins/plantilla/img/home-slider/slider-1.jpg')}}"
				data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2=""
				data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
				data-param10="" data-description="">
				<!-- MAIN IMAGE -->
				<!-- LAYERS -->
				<div class="slider_text_box">
					
					<div class="tp-caption secand_text" data-x="['right','right','center','center']"
						data-y="['middle','middle','middle','middle']" data-hoffset="['25','36','0','0']"
						data-voffset="['-100','0','0','0','-20']" data-fontsize="['60','40','40','40','30']"
						data-lineheight="['60','50','50','50','40']" data-width="none" data-height="none"
						data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
						data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
						data-textAlign="['right','right','center','center','center']" data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
						La ropa sucia <br />se lava en Drimo</div>
					<div class="tp-caption third_text" data-x="['right','right','center','center','center']"
						data-y="middle" data-hoffset="['20','0','0','0']" data-voffset="['0','120','120','120','105']"
						data-fontsize="['16','16','28','28']" data-lineheight="['28','28','38','38']"
						data-width="['450','840','820','600','450','350','380']" data-height="none"
						data-transform_idle="o:1;" data-whitespace="normal"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
						data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
						data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
						data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none"
						data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
						data-textAlign="['right','right','center','center']">
						<a href="#"><img src="{{asset('plugins/plantilla/img/home-slider/apple-btn.png')}}" alt=""></a>
						<a href="#"><img src="{{asset('plugins/plantilla/img/home-slider/google-btn.png')}}" alt=""></a>
					</div>
					<div class="tp-caption tp-resizeme rs-parallaxlevel-2 ten_mobile" data-x="['-50','-50','-50','-50']"
						data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
						data-voffset="['-50','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap"
						data-type="image" data-responsive_offset="on"
						data-frames='[{"from":"x:right(R);","speed":800,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":800,"to":"x:left(R);","ease":"Power4.easeIn"}]'
						data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
						style="z-index: 5;"><img src="{{asset('plugins/plantilla/img/home-slider/airpod.png')}}" alt=""
							data-no-retina>
					</div>
				</div>
			</li>			
		</ul>
	</div>
</section>
<!--================End Header Area =================-->
@endsection