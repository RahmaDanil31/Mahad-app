<div class="modal fade" id="modal-jurusan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Jurusan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('jurusan.store') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="fakultas">Jurusan</label>
                            <input type="text" class="form-control" id="fakultas" name="nama" placeholder="Masukan Nama Jurusan">
                        </div>

                        <div class="form-group">
                            <label>Fakultas</label>
                            <select class="form-control select2" name="fakultas_id" style="width: 100%;">
                                @foreach ($fakultas as $index => $fakultas)
                                <option value="{{ $fakultas->id }}"> {{ $fakultas->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>