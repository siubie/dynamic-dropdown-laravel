<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select2 Demo Page</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                    <select name="provinsi" id="provinsi" class="form-select single-select-field"
                        data-placeholder="Pilih Provinsi">
                        <option></option>
                        @foreach ($provinsi as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kota</label>
                    <select name="kota" id="kota" class="form-select single-select-field"
                        data-placeholder="Pilih Kota">
                        <option></option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-select single-select-field"
                        data-placeholder="Pilih Kecamatan">
                        <option></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        //document ready jquery
        $(document).ready(function() {
            function onChangeSelect(url, id, name) {
                // send ajax request to get the cities of the selected province and append to the select tag
                $.ajax({
                    url: url + '/' + id,
                    type: 'GET',
                    success: function(data) {
                        let target = $('#' + name);
                        target.attr('disabled', false);
                        target.empty()
                        target.attr('placeholder', target.data('placeholder'))
                        target.append(`<option> ${target.data('placeholder')} </option>`)
                        $.each(data, function(key, value) {
                            target.append(`<option value="${key}">${value}</option>`)
                        });
                    }
                });
            }

            $('.single-select-field').select2({
                theme: "bootstrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
            });

            $('#kota').prop('disabled', true);
            $('#kecamatan').prop('disabled', true);

            // on change province
            $('#provinsi').on('change', function() {
                var id = $(this).val();
                var url = `{{ URL::to('kota/getKotaList') }}`;
                $('#kota').empty().prop('disabled', false);
                $('#kecamatan').empty().prop('disabled', true);
                onChangeSelect(url, id, 'kota');
            });

            $('#kota').on('change', function() {
                var id = $(this).val();
                var url = `{{ URL::to('kota/get-kecamatan-list') }}`;
                $('#kecamatan').empty().prop('disabled', true);
                onChangeSelect(url, id, 'kecamatan');
            });
        });
    </script>
</body>

</html>
