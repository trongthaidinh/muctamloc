@extends('admin.main')

@section('admin.head')

@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th style="width: 200px;">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customer as $key => $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td style="max-width: 200px; word-wrap: break-word;">{{$item->address}}</td>
            <td>
                <form action="/admin/cart/edit/{{$item->id}}" method="POST" class="order-form" data-id="{{$item->id}}">
                    <div class="btn-group d-flex flex-column" role="group" aria-label="Trạng thái đơn hàng">
                        <div class="d-flex">
                        <input type="radio" name="status" value="Chưa xong" id="status_delivering_{{$item->id}}"
                            class="order-status-radio" {{ $item->status == "Chưa xong" ? 'checked' : '' }}
                            onchange="updateStatus(this)">
                        <label for="status_delivering_{{$item->id}}" class="btn btn-secondary rounded btn-sm mr-1">Chưa
                            xong</label>
                        </div>
                        <div class="d-flex">
                        <input type="radio" name="status" value="Đã xong" id="status_completed_{{$item->id}}"
                            class="order-status-radio" {{ $item->status == "Đã xong" ? 'checked' : '' }}
                            onchange="updateStatus(this)">
                        <label for="status_completed_{{$item->id}}" class="btn btn-info rounded btn-sm mr-1">Đã xong</label>
                        </div>
                    </div>

                    @csrf
                </form>
            </td>


            <td>
                <div class="btn-group" role="group">
                    <a class="btn btn-primary btn-sm" href="/admin/cart/view/{{$item->id}}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <span style="margin-right: 8px;"></span>
                    <a class="btn btn-danger btn-sm" href="#"
                        onclick="removeRow('{{ $item->id }}', '/admin/cart/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>

<div class="col-md-12 d-flex justify-content-center" style="margin-top: 20px;">
    {{ $customer->links('pagination::bootstrap-4') }}
</div>
<script>

</script>
<div class="card-footer clearfix">
</div>
@endsection

@section('admin.footer-js')

@endsection