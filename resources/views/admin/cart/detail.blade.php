@extends('admin.main')

@section('admin.head')

@endsection

@section('content')
<div class="customer mt-3">
    <ul>
        <li>Tên khách hàng: <strong>{{$customer->name}}</strong></li>
        <li>Số điện thoại: <strong>{{$customer->phone}}</strong></li>
        <li>Địa chỉ: <strong>{{$customer->address}}</strong></li>
        <li>Email: <strong>{{$customer->email}}</strong></li>
        <li>Tỉnh,thành phố: <strong>{{$customer->province}}</strong></li>
    </ul>

</div>

<div class="wrap-table-shopping-cart">
    @php $total = 0; @endphp
    <table class="table">
        <tbody>
            <tr class="table_head">
                <th class="column-1">Hình ảnh</th>
                <th class="column-2">Sản phẩm</th>
                <th class="column-3">Giá</th>
                <th class="column-4">Số lượng</th>
                <th class="column-5">Tổng</th>
            </tr>
            @foreach($cart as $carts )
            @php

            $priceEnd = $carts['product']->price *$carts['qty'];
            $total += $priceEnd;
            @endphp
            <tr class="table_row">
                <td class="column-1">


                    <div class="how-itemcart1">
                        <img src="{{ "/images/" .  $carts['firstImage']->name }}" alt="IMG" style="width: 100px;">
                    </div>


                </td>
                <td class="column-2">{{$carts['product']->name}}</td>
                <td class="column-3">
                    {{number_format($priceEnd,0,'','.')}} VNĐ
                </td>
                <td class="column-4">
                    {{$carts['qty']}}
                </td>
                <td class="column-5">
                    {{number_format($priceEnd,0,'','.')}} VNĐ
                </td>

            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-right">Tổng tiền</td>
                <td> {{number_format($total,0,'','.')}} VNĐ</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection

@section('admin.footer-js')



@endsection