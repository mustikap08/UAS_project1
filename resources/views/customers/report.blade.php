<!DOCTYPE html>
<html>
    <head>
        <title>Data Laporan Customer</title>
    </head>
    <body>
        <style type="text/css">
            table tr td, table tr th{
            font-size: 9pt;
            }
        </style>
        <h4 align="center">Customer Data</h4>
                    <b>Name</b>                 : {{ $customer->name }} <br>
                    <b>Address</b>              : {{ $customer->address }} <br>
                    <b>Number Telephone</b>     : {{ $customer->number_tlp }} <br>
                    <b>Order Date</b>           : {{ $customer->order_date }} <br>
                    <b>Catalog Theme</b>        : {{ $customer->catalog_theme }} <br>
                    <b>Package</b>              : {{ $customer->package }} <br>
                    <b>Total Product</b>        : {{ $customer->total_product }} <br>
            <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Catalog Theme</th>
                <th>Package</th>
                <th>Total Product</th>
                <th></th>
            </tr>
        </thead>
    <tbody>

             @foreach ($customer->courses as $c)

            @foreach ($customer as $c)
                <tr>
                    <td> {{ $c->name }} </td>
                    <td> {{ $c->address }} </td>
                    <td> {{ $c->catalog_theme }} </td>
                    <td> {{ $c->package }} </td>
                    <td> {{ $c->total_product }} </td>
                </tr>                   
            @endforeach
    </tbody>
    </table>
    </body>
</html>