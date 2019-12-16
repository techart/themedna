@foreach($additional_actions as $aaction => $adata)
	<a href="{!! url($adata['url']) !!}" title="{!! $adata['title'] ?? ($adata['label'] ?? '')!!}">
		{!! $adata['label'] ?? ($adata['title'] ?? 'Какая-то ссылка')  !!}
	</a>
@endforeach