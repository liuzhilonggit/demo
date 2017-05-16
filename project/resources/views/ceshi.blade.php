@extends('layouts.index')

@section('cont')
<div id='section'>
 jajaj
	@if($total > 90 && $total <=100)
		给你买个电脑

	@elseif($total >80 && $total <=90)
		给你买个望远镜
	@elseif($total >70 && $total <=80)
		给你买个铅笔盒
	@else
		给你买个锤子
	@endif 
	@foreach($array as $k=>$v)
		{{$v}}--
	@endforeach
	

</div>
<div>
	@foreach($aaa as $k=>$v)
		{{$v}}--
	@endforeach
</div>
@endsection