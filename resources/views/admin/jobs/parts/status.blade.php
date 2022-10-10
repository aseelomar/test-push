@if($active == false)
   <span style="cursor: pointer" href="{{ route('admin.job.status', $id) }}" id="{{ $id }}" class="m--font-bold btn btn-sm m-btn--pill btn-danger  change-status">{{ 'غير فعال' }}</span>
@elseif($active == true)
    <span style="cursor: pointer" href="{{ route('admin.job.status', $id) }}" id="{{ $id }}" class="m--font-bold btn btn-sm m-btn--pill btn-success  change-status">{{ 'فعال' }}</span>
@endif
