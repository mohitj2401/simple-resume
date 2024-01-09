<div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"> {{ $title }}`s Permissions</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="card height-equal">
            <div class="card-body">
                @foreach ($role->permissions as $item)
                    <div class="large-modal-header"><i data-feather="chevrons-right"></i>
                        <h5 class="f-w-600"> {{ $item->name }}</h5>
                    </div>
                    {{-- <div class="col-6">
                        <i data-feather="chevrons-right"></i>
                    </div> --}}
                @endforeach


            </div>
        </div>
    </div>
</div>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
