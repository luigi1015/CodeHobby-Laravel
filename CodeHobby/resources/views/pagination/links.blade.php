@if( $paginator->lastPage() > 1 )
	@if( $paginator->currentPage() == 1 )
		Previous
	@else
		<a href='{{ $paginator->previousPageUrl() }}'>Previous</a>
	@endif
	@for ($i = 1; $i <= $paginator->lastPage(); $i++)
			<a class="{{ ($paginator->currentPage() == $i) ? 'currentPage' : '' }}" href='{{ $paginator->url($i) }}'>{{ $i }}</a>
	@endfor
	@if( $paginator->currentPage() == $paginator->lastPage() )
		Next
	@else
		<a href='{{ $paginator->url($paginator->currentPage()+1) }}' >Next</a>
	@endif
@endif
