var PeopleContactUs = function () {

    var view_tbl;
    var view_url = 'people-contact-us';
    var list_url = 'people-contact-us/getPeopleContactUs';


    /////////////////// View //////////////////
    ///////////////////////////////////////////
    var viewTable = function () {

        var link = list_url;

        var columns = [
            {"data": "index", "title": "#", "orderable": false, "searchable": false},
            {"data": "name", "orderable": true, "searchable": false},
            {"data": "subject", "orderable": true, "searchable": false},
            {"data": "message", "orderable": false, "searchable": false},
            {"data": "created_at", "orderable": true, "searchable": false},
            {"data": "actions", "orderable": false, "searchable": false}
        ];
        var perPage = 25;
        var order = [[4, 'desc']];


        var ajaxFilter = function (d) {
            d.name = $('#generalSearch').val();


        };

        view_tbl = DataTable.init($('#people_contact_us_table'), link, columns, order, ajaxFilter, perPage);
    };
    /////////////////// ADD ///////////////////
    ///////////////////////////////////////////




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

            viewTable();
            search();
            updateStatus();

        }
    }
}();
