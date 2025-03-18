@extends('Web.main')

@section('content')
<section id="content" class="clearfix container">
    @include('Web.sidebar')
    <div id="page">
        <div class="col-md-9 col-xs-12" id="layout-page">
            <span class="header-contact header-page clearfix">
                <h1>Liên hệ Tâm Lộc</h1>
            </span>
            <div class="content-contact content-page">
                <p class="text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30764.124377277916!2d108.63803715446083!3d15.456676962440488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169cf23bd68ae97%3A0x1db1c225d87e7ca2!2zVGFtIEdpYW5nLCBOw7ppIFRow6BuaCBEaXN0cmljdCwgUXXhuqNuZyBOYW0sIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1742108622866!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
                <div class="col-md-7" id="col-left contactFormWrapper">
                    <h3>Viết nhận xét</h3>
                    <hr class="line-left" />
                    <p>
                        Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn
                        sớm nhất có thể.
                    </p>
                    <form accept-charset='UTF-8' action='' class='contact-form' method='post'>
                        @csrf
                        <div class="form-group">
                            <label for="contactFormName" class="sr-only">Tên</label>
                            <input required type="text" class="form-control input-lg" name="name"
                                placeholder="Tên của bạn" autocapitalize="words" value="">
                        </div>
                        <div class="form-group">
                            <label for="contactFormEmail" class="sr-only">Email</label>
                            <input required type="email" name="email" placeholder="Email của bạn"
                                class="form-control input-lg" autocorrect="off" autocapitalize="off" value="">
                        </div>
                        <div class="form-group">
                            <label for="contactFormMessage" class="sr-only">Nội dung</label>
                            <textarea required rows="6" name="content" class="form-control"
                                placeholder="Viết bình luận"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg" value="Gửi liên hệ" />
                    </form>
                    <h1 style="color:red" id="message"></h1>
                </div>
                <div class="col-md-5" id="col-right">
                    <h3>Chúng tôi ở đây</h3>
                    <hr class="line-right" />
                    <h3 class="name-company">Công ty TNHH Thương mại và Tổng hợp Tâm Lộc</h3>
                    <p>Tâm Lộc cung cấp dịch vụ thương mại và tổng hợp chất lượng cao tại Việt Nam.</p>
                    <ul class="info-address">
                        <li>
                            <i class="glyphicon glyphicon-map-marker"></i>
                            <span>Xã Tam Giang, huyện Núi Thành, tỉnh Quảng Nam</span>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span>muctamloctamgiang@gmail.com</span>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-phone-alt"></i>
                            <span>0988 437 181; 0837 200 111</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</section>
@endsection
@section('footer')
@include('Web.footer')
@endsection
@section('Web.footer-js')
@if (Session::has('error'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("message").innerHTML = "Gửi liên hệ lỗi";
    });
</script>
@endif
@if (Session::has('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("message").innerHTML = "Liên hệ đã được gửi đi. Cảm ơn bạn đã liên hệ chúng tôi";
    });
</script>
@endif
@endsection