@if ($crud->hasAccess('create'))

<a href="{{ url($crud->route.'/create') }} " class="btn btn-xs btn-default">
    <span class="ladda-label">
        <i class="la la-plus"></i> Створити
    </span>
</a>
@endif
