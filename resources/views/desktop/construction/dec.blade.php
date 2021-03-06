@extends('desktop.construction.index')
@section('sub_content')
	<section class="description">
		<h3>데크재</h3>
		<img src="{{URL::asset('images/construction/dec_1.jpg')}}" alt="데크재" class="mb10">
	</section>
	<section class="cf">
		<h3>목재 상세 이미지</h3>
		<div>
			<p><img src="{{URL::asset('images/construction/dec_2-1.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
		<div class="mgr full">
			<p><img src="{{URL::asset('images/construction/dec_2-2.png')}}" alt="아피통(apitong)"></p>
			<span>아피통(APITONG)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/dec_2-3.png')}}" alt="동남아산 하드우드(MLH)"></p>
			<span>동남아산 하드우드(MLH)</span>
		</div>
		<div class="mgr full">
			<p><img src="{{URL::asset('images/construction/dec_2-4.png')}}" alt="동남아산 하드우드(MLH)"></p>
			<span>동남아산 하드우드(MLH)</span>
		</div>
		<div>
			<p><img src="{{URL::asset('images/construction/dec_2-5.png')}}" alt="꾸메아(KUMEA)"></p>
			<span>꾸메아(KUMEA)</span>
		</div>
		<div class="mgr full">
			<p><img src="{{URL::asset('images/construction/dec_2-6.png')}}" alt="꾸메아(KUMEA)"></p>
			<span>꾸메아(KUMEA)</span>
		</div>
	</section>
@endsection