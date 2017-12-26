@extends('teller.layout.main')

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.0/b-html5-1.5.0/b-print-1.5.0/r-2.2.1/sl-1.2.4/datatables.min.css"/>
    <style>

    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-10 offset-1">
                <table class="table table-bordered table-striped datatable" id="borrower-list">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered on</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/b-1.5.0/b-html5-1.5.0/b-print-1.5.0/r-2.2.1/sl-1.2.4/datatables.min.js"></script>
    <script>
        $(function() {
            $('#borrower-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/borrower/get-borrower-list',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                ],
            });
        });
    </script>
@endsection