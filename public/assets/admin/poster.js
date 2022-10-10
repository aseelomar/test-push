
var Poster = function () {

    var view_tbl;
    var view_url = 'poster';
    var list_url = 'poster/getPoster';


    /////////////////// View //////////////////
    ///////////////////////////////////////////
    var viewTable = function () {

        var link = list_url;

        var columns = [
            {"data": "index", "title": "#", "orderable": false, "searchable": false},
            {"data": "title", "orderable": true, "searchable": false},
            {"data": "description", "orderable": true, "searchable": false},
            {"data": "image", "orderable": false, "searchable": false},
            {"data": "created_at", "orderable": true, "searchable": false},
            {"data": "active", "orderable": true, "searchable": true},
            {"data": "actions", "orderable": false, "searchable": false}
        ];
        var perPage = 25;
        var order = [[4, 'desc']];


        var ajaxFilter = function (d) {
            d.title = $('#generalSearch').val();
            d.active=$('#status').val();
        };

        view_tbl = DataTable.init($('#poster_table'), link, columns, order, ajaxFilter, perPage);
    };
    /////////////////// ADD ///////////////////
    ///////////////////////////////////////////





    var add = function () {
        $('#add-poster').on('click', function (e) {
            let form = document.getElementById('add-new-poster');
            var formData = new FormData(form);
            let method = form.getAttribute('method');
            let link = form.getAttribute('action');
            Forms.doAction(link, formData, method, null, addCallBack);
        });
    }

    var updateStatus = function () {
        $(document).on('click', '.change-status', function (e) {
            var link = $( this ).attr('href');
            Forms.doAction(link, "", "", null, updateStatusCallBack);
        });
    }

    var  updateStatusCallBack = function () {
        view_tbl.draw();
    }


    var addCallBack = function (obj) {
        if(obj.code === 200) {
            var delay = 1750;

            setTimeout(function () {
                history.back(0);
            }, delay);
        }
    };
    /////////////////// EDIT //////////////////
    ///////////////////////////////////////////


    var edit = function () {
        $('.update_btn').click(function (e) {
            e.preventDefault();
            var link = $(this).attr('action');
            var formData = $(this).serialize();
            var method = $(this).attr('method');
            Forms.doAction(link, formData, method, null, editCallBack);
        });
    };



    var updatePoster=function () {
        $('#update-poster').on('click', function (e) {
            e.preventDefault();
            let form = document.getElementById('update-posters');
            var formData = new FormData(form);
            let method = form.getAttribute('method');
            let link = form.getAttribute('action');
            Forms.doAction(link, formData, method, null, addCallBack);
        });
    }
    var editCallBack = function (obj) {
        if (obj.code === 200) {
            var delay = 1750;

            setTimeout(function () {
                window.location = view_url;
            }, delay);
        }
    };

    //////////////// DELETE ///////////////////
    ///////////////////////////////////////////
    var deleteItem = function () {
        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();
            var btn = $(this);

            Common.confirm(function () {
                var link = btn.data('url');
                var formData = {};
                var method = "GET";

                Forms.doAction(link, formData, method, view_tbl);
            });
        });
    };
    //////////////// Search ///////////////////
    ///////////////////////////////////////////


    var search = function () {

        $('#generalSearch').on('input', function (e) {
            e.preventDefault();
            view_tbl.search($(this).val()).draw();
        });

        $('#status').on('change', function (e) {
            e.preventDefault();
            view_tbl.search($(this).val()).draw();
        })


        $('.search').on('click', function (e) {
            e.preventDefault();
            view_tbl.draw(false);
        });

        $('form input').keydown(function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                view_tbl.draw(false);
            }
        });

        $('.btn-clear').on('click', function (e) {
            e.preventDefault();
            $('.clear').val('');
            $('.clear').selectpicker("refresh");
        });
    };




    ///////////////// INITIALIZE //////////////
    ///////////////////////////////////////////
    return {
        init: function () {
            add();
            edit();
            viewTable();
            search();
            deleteItem();
            updateStatus();
            updatePoster()

        }
    }
}();
