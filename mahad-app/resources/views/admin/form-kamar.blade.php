<div class="modal fade" id="modal-kamar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Kamar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kamar.store') }}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="kamar">Kamar</label>
                            <input type="text" class="form-control" id="kamar" name="nama" placeholder="Masukan Nama Kamar">
                        </div>

                        <div class="form-group">
                            <label>Gedung</label>
                            <select class="form-control select2" name="gedung_id" style="width: 100%;">
                                @foreach ($gedung as $index => $gedung)
                                <option value="{{ $gedung->id }}"> {{ $gedung->nama }}</option>
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