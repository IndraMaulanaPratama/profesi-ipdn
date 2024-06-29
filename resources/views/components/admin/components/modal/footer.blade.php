<div class="modal-footer">
    <button type="button" wire:click='resetForm' id="{{ $idReset ?? null }}" class="btn btn-outline-secondary"
        data-bs-dismiss="modal">Batalkan</button>

    <button type="submit" id="{{ $idSubmit ?? null }}" class="btn btn-outline-primary"
        data-bs-dismiss="modal">Simpan</button>
</div>
