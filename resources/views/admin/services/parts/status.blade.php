
@if($active == 0)
    <span style="cursor: pointer" href="{{ route('admin.services.status', $id) }}" id="{{ $id }}" class="m--font-bold btn btn-sm m-btn--pill btn-danger  change-status">غير فعال</span>
@elseif($active == 1)
    <span style="cursor: pointer" href="{{ route('admin.services.status', $id) }}" id="{{ $id }}" class="m--font-bold btn btn-sm m-btn--pill btn-success  change-status">فعال</span>
@endif


