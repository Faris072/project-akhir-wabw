@extends('parts/bodyadmin')

@section('bodyadmin')
    <form action="/logout" method="POST">
        @csrf
        <input type="submit"class="btn btn-success" value="Logout">
    </form>

    <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }
        .table-responsive {
            margin: 30px 0;
        }
        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }
        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }
        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 60px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }
        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }
        table.table td a:hover {
            color: #2196F3;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }
        table.table td i {
            font-size: 19px;
        }
        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }
        .pagination li.active a, .pagination li.active a.page-link {
            background: #03A9F4;
        }
        .pagination li.active a:hover {
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }
        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }
        .custom-checkbox label:before{
            width: 18px;
            height: 18px;
        }
        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }
        .custom-checkbox input[type="checkbox"]:checked + label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }
        .custom-checkbox input[type="checkbox"]:checked + label:after {
            border-color: #fff;
        }
        .custom-checkbox input[type="checkbox"]:disabled + label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }
        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }
        .modal .modal-header, .modal .modal-body, .modal .modal-footer {
            padding: 20px 30px;
        }
        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }
        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }
        .modal .modal-title {
            display: inline-block;
        }
        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }
        .modal textarea.form-control {
            resize: vertical;
        }
        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }
        .modal form label {
            font-weight: normal;
        }
        </style>
        <script>

        </script>
        </head>
        <body>
        <br>
        <h1> Admin Page </h1>
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>User <b>List</b></h2>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th colspan="3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $x)
                            <tr>
                                <td>{{ $x->id }}</td>
                                <td>{{ $x->username }}</td>
                                <td>{{ $x->email }}</td>
                                <td>{{ $x->phone }}</td>
                                <td><a href="#infoEmployeeModal" class="btn btn-primary" data-toggle="modal">Info</a></td>
                                <td><a href="#editEmployeeModal{{ $x->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
                                <td><a href="#deleteEmployeeModal{{ $x->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                            </tr>
                            <!-- Edit Modal HTML -->
                            <div id="editEmployeeModal{{ $x->id }}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/{{ $x->id }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit User</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input type="text" class="form-control" name="id" value="{{ $x->id }}" disabled required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="username" value="{{ $x->username }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" value="{{ $x->email }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" name="phone" value="{{ $x->phone }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <p>Be Admin:</p>
                                                    <label class="container">
                                                        <input type="radio" @if( $x->admin == true ) checked="checked" @endif name="admin" value="1">
                                                        <span class="checkmark"></span>Yes
                                                    </label>
                                                    <label class="container">
                                                        <input type="radio" @if( $x->admin == false ) checked="checked" @endif name="admin" value="0">
                                                        <span class="checkmark"></span>No
                                                    </label>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-info" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Delete Modal HTML -->
                            <div id="deleteEmployeeModal{{ $x->id }}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete User</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah anda akan siap menghapusnya?</p>
                                                <p class="text-danger"><small>Tindakan ini tidak bisa dibatalkan.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <form action="/admin/{{ $x->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- endDeleteModal --}}
                        @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>1</b> out of <b>3</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Modal HTML -->
        <div id="infoEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Detail</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <label>Photo Profile:</label>
                                <br>

                                <br>
                            </div>
                            <div>
                                <label>Name:</label>
                                <p>Rifa'i Angga Pratama</p>
                            </div>
                            <div>
                                <label>Email:</label>
                                <p>anggarifai@mail.com</p>
                            </div>
                            <div>
                                <label>Phone:</label>
                                <p>(313) 555-5735</p>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
