<!DOCTYPE html>
<html>

<head>
    <title>DataTables AJAX pagination with Custom filter in CodeIgniter</title>

    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Datatable JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>

<body>

    <!-- Search filter -->
    <div>
        <!-- City -->
        <select id='sel_city'>
            <option value=''>-- Select city --</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>

        <!-- Gender -->
        <select id='sel_gender'>
            <option value=''>-- Select Gender --</option>
            <option value='2019'>2019</option>
            <option value='2020'>2020</option>
        </select>

        <!-- Name -->
        <input type="text" id="searchName" placeholder="Search Name">
    </div>

    <!-- Table -->
    <!-- <table id='userTable' class='display dataTable'>
        <thead>
            <tr>
                <th>Indikator</th>
                <th>Ka</th>
                <th>Ka</th>
            </tr>
        </thead>

    </table> -->

    <table id='userTable' class="display DataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
            </tr>
        </thead>
    </table>

    <!-- Script -->

    <script type="text/javascript">
        $(document).ready(function() {

            var userDataTable = $('#userTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url': '<?= base_url() ?>Penilaian/userList',
                    'data': function(data) {
                        data.searchCity = $('#sel_city').val();
                        data.searchGender = $('#sel_gender').val();
                        data.searchName = $('#searchName').val();
                    }
                },
                'columns': [{
                        data: 'indikator_kd'
                    },
                    {
                        data: 'tahun_ajaran'
                    },
                    {
                        data: 'kompetensi_dasar'
                    },
                ]
            });

            $('#sel_city,#sel_gender').change(function() {
                userDataTable.draw();
            });
            $('#searchName').keyup(function() {
                userDataTable.draw();
            });
        });
    </script>
</body>

</html>