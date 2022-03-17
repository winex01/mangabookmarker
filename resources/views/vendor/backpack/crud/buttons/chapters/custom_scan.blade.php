@if ($crud->hasAccess('scan'))
	<a 
        href="javascript:void(0)" 
        onclick="scanEntries(this)" 
        class="btn btn-warning" 
        data-style="zoom-in">
            <span class="ladda-label">
                <i class="la la-plus"></i> 
                {{ trans('lang.scan_operation_button') }} {{ $crud->entity_name }}
            </span>
    </a>
@endif

@push('after_scripts')
<script>
	if (typeof scanEntries != 'function') {
	  function scanEntries(button) {

          swalLoader();

      } // end function scanEntries
	}
</script>
@endpush


