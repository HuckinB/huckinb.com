@if (session('success'))
	<script>
        $.notify('{{ session('success') }}',{
            type: 'success',
            allow_dismiss: false,
            offset: {
                x: 40,
                y: 40
            },
            mouse_over: 'pause'
        });
	</script>
@endif
@if (session('danger'))
	<script>
        $.notify('{{ session('danger') }}',{
            type: 'danger',
            allow_dismiss: false,
            offset: {
                x: 40,
                y: 40
            },
            mouse_over: 'pause'
        });
	</script>
@endif
@if (session('warning'))
	<script>
        $.notify('{{ session('warning') }}',{
            type: 'warning',
            allow_dismiss: false,
            offset: {
                x: 40,
                y: 40
            },
            mouse_over: 'pause'
        });
	</script>
@endif
@if (session('info'))
	<script>
        $.notify('{{ session('info') }}',{
            type: 'info',
            allow_dismiss: false,
            offset: {
                x: 40,
                y: 40
            },
            mouse_over: 'pause'
        });
	</script>
@endif