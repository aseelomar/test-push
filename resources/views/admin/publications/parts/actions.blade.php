<a href="{{route('admin.publications.edit',['id'=> $id_hash])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill tooltips update_btn" title="تعديل">
    <i style="color: #0a8cf0" class="la la-edit"></i>
</a>
<a href="{{route('admin.publications.show',['id'=> $id_hash])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill tooltips update_btn" title="عرض التفاصيل">
    <i style="color: #0a8cf0" class="bi bi-filter-square"></i>
</a>

<a data-url="{{ route('admin.publications.delete',['id' => $id_hash]) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill tooltips delete_btn" title="حذف">
    <i class="la la-trash-o"></i>
</a>
