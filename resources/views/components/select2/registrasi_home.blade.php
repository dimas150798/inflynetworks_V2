<script type="text/javascript">
    // Home 10 Button Pencarian
    $('#kota').each(function() {
        $('#loadKota').show();
        $(this).select2({
            placeholder: 'Pilih Kota / Kabupaten :',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });

    $('#kecamatan').each(function() {
        $('#loadKecamatan').show();
        $(this).select2({
            placeholder: 'Pilih Kecamatan :',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });

    $('#kelurahan').each(function() {
        $('#loadKelurahan').show();
        $(this).select2({
            placeholder: 'Pilih Kelurahan :',
            theme: 'bootstrap-5',
            dropdownParent: $(this).parent(),
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#kota').on('change', function() {
            var kota = $(this).val();

            if (kota) {
                $.ajax({
                    url: '/kecamatan/' + kota,
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data) {
                            $('#kecamatan').empty();
                            $('#kecamatan').append(
                                '<option value="">- Pilih Kecamatan -</option>')

                            $.each(data, function(key, kecamatan) {
                                $('select[name="kecamatan"]').append(
                                    '<option value="' + kecamatan
                                    .id_kecamatan +
                                    '">' + kecamatan.nama_kecamatan +
                                    '<option>'
                                )
                            });
                        } else {

                        }
                    }

                });
            }
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('#kecamatan').on('change', function() {
            var kecamatan = $(this).val();

            if (kecamatan) {
                $.ajax({
                    url: '/kelurahan/' + kecamatan,
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data) {
                            $('#kelurahan').empty();
                            $('#kelurahan').append(
                                '<option value="">- Pilih Kelurahan -</option>')

                            $.each(data, function(key, kelurahan) {
                                $('select[name="kelurahan"]').append(
                                    '<option value="' + kelurahan
                                    .id_kelurahan +
                                    '">' + kelurahan.nama_kelurahan +
                                    '<option>'
                                )
                            });
                        } else {

                        }
                    }

                });
            }
        })
    });
</script>
