<ul class="list-inline mb-0">
    @if(isset($show))
        <li class="list-inline-item">
            <a href="{{$show}}" class="avtar avtar-xs btn-link-success btn-pc-default pointer-cursor"> <i
                    class="ti ti-eye f-20"></i></a>
        </li>
    @endif
    @if(isset($edit_modal))
        <li class="list-inline-item">
            <a data-url="{{$edit_modal}}"
                 class="_dataTable-modify-btn avtar avtar-xs btn-link-warning btn-pc-default pointer-cursor">
                <i class="ti ti-edit f-20"></i>
            </a>
        </li>
    @endif
    @if(isset($edit))
        <li class="list-inline-item">
            <a href="{{$edit}}" class="avtar avtar-xs btn-link-warning btn-pc-default pointer-cursor">
                <i class="ti ti-edit f-20"></i>
            </a>
        </li>
    @endif
    @if(isset($delete))
        <li class="list-inline-item">
            <a data-url="{{$delete}}" class="_dataTable-delete-btn avtar avtar-xs btn-link-danger btn-pc-default pointer-cursor">
                <i class="ti ti-trash f-20"></i>
            </a>
        </li>
    @endif

</ul>
