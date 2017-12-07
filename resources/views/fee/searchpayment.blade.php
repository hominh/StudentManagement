@extends('master')
@section('content')
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        white-space: nowrap;
    }
    th {
        padding: 3px;
    }
    tr,td,th {
        border: 1px solid #CCC;
        padding: 2px 2px 2px;
    }
    tbody.last-row > tr:last-child {
        background: #FFC;
    }
    tbody.first-row > tr.first-child {
        background: #FFC;
    }
    thead > th {
        border: 1px solid;
    }
    p {
        text-align: center;
        color: green;
        margin-top: -10px;
    }
    .list-student-fee > thead > tr > th {
        border: 1px solid;
        padding: 5px 5px;
    }
    .list-student-fee > tbody > tr > td {
        border: 1px solid;
        padding: 5px 5px;
    }
    table tr > td > input[type='text'] {
        height: 30px;
        width: 100%;
        padding: 5px;
    }

    select {
        height: 30px;
        width: 190px;
    }
    caption {
        background: transparent;
        border: none;
        color: #e410a1;
        padding-bottom: 5px;
        font-size: 11pt;
    }
    .panel-heading {
        display: inline-flex;
        width: 100%;
    }
    .eng-name {
        margin-top: 10px;
    }
    .date-invoice {
        margin: 10px;
        text-align: right;
    }
    .invoice-number {
        margin: 10px;
        text-align: right;
    }
    .search {
        display: inline-block;
    }
    .disabled-bg {
        background: #e8e8e8;
    }
    .balance-red {
        font-weight: bold;
        color: red;
    }
    .balance-green {
        font-weight: bolder;
        color: blue;
    }
    .bg-flat {
        background: #eee;
        border: 1px solid #ccc;
    }
    #dialog-form-student-school-fee {
        display: none;
    }
    #dialog-form-list-sale-product {
        display: none;
    }
    #Fee {
        height: 30px;
        width: 100%;
        padding: 5px;
        background: rgb(245,245,245);
        border: 1px solid rgb(204,204,204);
    }
    .search-payment {
        width: 200px;
        margin-left: -15px;
        margin-top: 10px;
    }

</style>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="col-md-3">
            <form action="" method="post" id="frm-create-student" class="search-payment" enctype="multipart/form-data">
                <input class="form-control" name="student_id" placeholder="Student id" type="text">
            </form>
        </div>
        <div class="col-md-3">
            <label class="eng-name">Name: <b class="student-name"></b> </label>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3" style="text-align: right">
            <label class="date-invoice">Date: <b>{{ date('d-M-Y')  }}</b></label>
        </div>
        <div class="col-md-3" style="text-align: right">
            <label class="invoice-number">Receipt N: <sup>0</sup> <b></b></label>
        </div>
    </div>
    <div class="panel-body">
        <table style="margin-top: -12px">
            <caption class="academicDetail"></caption>
            <thead>
                <tr>
                    <th>Program</th>
                    <th>Level</th>
                    <th>School fee($)</th>
                    <th>Amount</th>
                    <th>Dis</th>
                    <th>Paid</th>
                    <th>Amount lack</th>
                </tr>
            </thead>
            <tr>
                <td>
                    <select id="academic_id" name="academic_id">
                        <option value="">---------</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="">---------</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="fee" id="Fee" readonly="true">
                    <input type="hidden" name="fee_id" id="Feeid" readonly="true">
                    <input type="hidden" name="student_id" id="student_id" readonly="true">
                    <input type="hidden" name="level_id" id="level_id" readonly="true">
                    <input type="hidden" name="user_id" id="user_id" readonly="true">
                    <input type="hidden" name="transacdate" id="transacdate" readonly="true">
                </td>
                <td>
                    <input type="text" name="amount" id="amount" required>
                </td>
                <td>
                    <input type="text" name="discount" id="discount">
                </td>
                <td>
                    <input type="text" name="paid" id="paid">
                </td>
                <td>
                    <input type="text" name="balance" id="balance">
                </td>
            </tr>
            <thead>
                <tr>
                    <th colspan="2">Remark</th>
                    <th colspan="5">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <input type="text" name="description" id="description">
                    </td>
                    <td colspan="5">
                        <input type="text" name="remark" id="remark">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="panel-footer" style="height: 40px"></div>
</div>
@endsection