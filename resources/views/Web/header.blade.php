<header class="container clearfix">
    <div class="logo col-md-3 col-xs-12">
        <!-- LOGO -->

        <h1>
            <a href="/">
                <img style="width: 240px;" src="{{ asset('logo.jpg') }}" alt="Mực Tâm Lộc" class="img-responsive" />
            </a>
        </h1>

    </div>
    <div class="seach-header col-md-6 col-sm-6 col-xs-12">
    <div id="SearchForm">
        <div id="SearchFormContainer">
            <form id="search-form" action="/search" method="GET">
                <input type="hidden" name="type" value="product" class="search-input" placeholder="Tìm kiếm ..." />
                <input type="text" name="q" class="search-input" placeholder="Tìm kiếm ..." value="{{ app('request')->input('q') }}" />
                <button id="ctlSearch_ctl00_btnSearch">
                    <img src="https://sw001.hstatic.net/6/014cbf7c2aac46/icon-search1.png">
                </button>
            </form>
        </div> 
    </div>
</div>


    <!-- <div class="phone-header col-md-3 col-sm-12 col-xs-12 pull-right" id="phoneHeader" style="display: none;">
        <span>Tư vấn</span><br />
        <a href="tel:0988437181">
            <i class="fa fa-mobile" aria-hidden="true" style="font-size: 25px;"></i> 0988 437 181
        </a>
    </div> -->

    <div class="social-header col-md-3 col-sm-12 col-xs-12 pull-right text-right">
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank" class="social-icon" style="margin-right: 10px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" style="width: 20px; height: 20px;">
            </a>
            <a href="https://www.instagram.com" target="_blank" class="social-icon" style="margin-right: 10px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 20px; height: 20px;">
            </a>
            <a href="https://zalo.me/0988437181" target="_blank" class="social-icon">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Icon_of_Zalo.svg/2048px-Icon_of_Zalo.svg.png" alt="Zalo" style="width: 20px; height: 20px;">
            </a>
        </div>
    </div>



</header>


<script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của form

        // Lấy giá trị từ ô input
        var searchQuery = document.getElementById('search-form').elements['q'].value;

        // Kiểm tra xem ô input có giá trị không
        if (searchQuery.trim() !== '') {
            // Tạo đường dẫn tới trang tìm kiếm với tham số q
            var searchUrl = '/search/' + encodeURIComponent(searchQuery);

            // Chuyển hướng tới trang tìm kiếm
            window.open(searchUrl, '_blank');
        }
    });

    $(document).ready(function() {
        $('.flexslider').flexslider({
            animation: "slide", 
            controlNav: true, 
            directionNav: true, 
            slideshow: true, 
            slideshowSpeed: 7000, 
            animationSpeed: 600 
        });
    });
</script>

<script>
    // Chờ cho tất cả nội dung được load xong trước khi kiểm tra kích thước màn hình
    window.onload = function() {
        checkScreenSize();

        // Kích thước màn hình thay đổi
        window.onresize = checkScreenSize;
    };

    function checkScreenSize() {
        var phoneHeader = document.getElementById('phoneHeader');

        // Kiểm tra nếu kích thước màn hình nhỏ hơn một ngưỡng nào đó (ví dụ: 768px)
        if (window.innerWidth < 768) {
            phoneHeader.style.display = 'block'; // Hiển thị phần tử
        } else {
            phoneHeader.style.display = 'none'; // Ẩn phần tử
        }
    }
</script>