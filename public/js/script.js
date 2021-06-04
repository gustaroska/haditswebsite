let base_url = window.location.protocol + "//" + window.location.host + "/"

function setAction(event) {
    let _data = {
        user_id: event.currentTarget.value,
        action: event.currentTarget.name
    }
    fetch(`${base_url}api/ajax_user_action`, {
        body: JSON.stringify(_data),
        method: "POST",
        headers: {}
    })
        .then(stream => stream.json())
        .then(data => {
            if (data.message)
                $.notify('<strong>Info</strong> Berhasil ubah status', {
                    delay: 500,
                    timer: 500,
                    type: 'success',
                    allow_dismiss: true,
                    showProgressbar: true
                });
            else
                $.notify('<strong>Info</strong> Gagal ubah status', {
                    delay: 1000,
                    type: 'danger',
                    allow_dismiss: true,
                    showProgressbar: true
                });
        })
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function () {


    if ($("#home").length > 0)
        requirejs(["app/home"]);
    if ($("#admin").length > 0)
        requirejs(["app/admin"]);
    if ($("#quran").length > 0)
        requirejs(["app/quran"]);

    if ($('#datatables-tathbiq').length > 0)
        $('#datatables-tathbiq').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            stateSave: true,
            responsive: true,
        });

    if ($('#datatables-logs').length > 0)
        $('#datatables-logs').DataTable({
            stateSave: true,
            processing: true,
            serverSide: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json',
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>'
            },
            bDestroy: true,
            responsive: true,
            order: [
                [0, "desc"]
            ],
            ajax: {
                url: `${base_url}/api/ajax_list_logs`,
                type: "POST",
                data: {},
            }
        });

    if ($('#datatables-users').length > 0)
        $('#datatables-users').DataTable({
            stateSave: true,
            processing: true,
            serverSide: true,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json',
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>'
            },
            bDestroy: true,
            responsive: true,
            order: [],
            ajax: {
                url: `${base_url}/api/ajax_list_users`,
                type: "POST",
                data: {},
            }
        });

    if ($('#datatables-tafsir').length > 0)
        $('#datatables-tafsir').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            stateSave: true,
            responsive: true,
        });

    if ($('#datatables-ayat-hadits').length > 0) {
        let href_split = window.location.href.split('/');
        let post_data;
        if (href_split[3] === "ayat-hadist-ekonomi")
            post_data = {
                home: true
            }
        else
            post_data = {}
        $('#datatables-ayat-hadits').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            stateSave: true,
            responsive: true,
        });
    }

    if ($('#datatables-tahsin').length > 0)
        $('#datatables-tahsin').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            stateSave: true,
            responsive: true,
        });

    if ($('#datatables-index-ayat').length > 0)
        $('#datatables-index-ayat').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json'
            },
            scrollY: false,
            scrollX: true,
            scrollCollapse: true,
            columnDefs: [{
                width: '200',
                targets: 0
            }],
            fixedColumns: true,
            responsive: true,
            ordering: false,
        });
})