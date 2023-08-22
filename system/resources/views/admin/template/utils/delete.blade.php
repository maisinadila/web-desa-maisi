<div class="btn-group">
<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger shadow btn-sm sharp"> <i class="fa fa-trash"></i> Hapus </button>

</form>
</div>