<style>
    .navbar-default {
        background: #1973a5 !important;
    }

    * {
        font-family: Open Sans, sans-serif !important;
    }

    .glyphicon {
        font-family: 'Glyphicons Halflings' !important;
    }

    .fa {
        font-family: 'FontAwesome' !important;
    }

    html,
    body {
        border: 0;
        background-color: #fff;
    }

    * {
        margin: 0;
        padding: 0;
    }

    html {
        font-size: 62.5%;
        -webkit-overflow-scrolling: touch;
        -webkit-text-size-adjust: none;
        -ms-text-size-adjust: 100%;
    }

    li.dropdown.open a {
        color: #333 !important;
    }

    body {
        line-height: 21px;
        font-size: 14px;
        color: #555555;
        overflow-x: hidden;
        background: #1973a5;
        position: initial !important;
    }

    span.sub-arrow {
        width: 6px;
        height: 6px;
    }

    header {
        padding: 10px 0;
    }

    .header-items {
        float: right;
        padding: 7px 15px;
        background: #34495E;
        -webkit-border-bottom-right-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-bottomright: 5px;
        -moz-border-radius-bottomleft: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .header-items ul {
        padding: 0;
    }

    .header-items li {
        margin-left: 5px;
        margin-right: 5px;
        float: left;
        border-right: 1px solid #3F5973;
        padding-right: 9px;
        white-space: nowrap;
    }

    .header-items li:last-child {
        border: 0;
        padding-right: 0;
    }


    /* 1.2 - HTML5 Elements */
    article,
    aside,
    details,
    figcaption,
    figure,
    dialog,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    /* 1.4 - Typography */
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: #333333;
        margin: 0 0 13px 0;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .cart-summary,
    .toolbar {}

    h1 {
        font-weight: 400;
        color: #333333;
        font-size: 36px;
        line-height: 36px;
    }

    h2 {
        font-weight: 400;
        color: #333333;
        font-size: 28px;
        line-height: 28px;
    }

    h3 {
        font-weight: 400;
        color: #333333;
        font-size: 24px;
        line-height: 24px;
    }

    h4 {
        font-size: 13px;
        line-height: 18px;
    }

    h5 {
        font-size: 12px;
        line-height: 18px;
    }

    h6 {
        font-size: 10px;
        line-height: 18px;
        text-transform: uppercase;
    }

    h1 .note,
    h2 .note,
    h3 .note,
    h4 .note,
    h5 .note,
    h6 .note {
        margin-left: 8px;
        font-weight: 400;
        font-size: 12px;
    }

    h1 .note a,
    h2 .note a,
    h3 .note a,
    h4 .note a,
    h5 .note a,
    h6 .note a {
        color: #ef8742;
    }

    p {
        margin: 0 0 20px 0;
        line-height: 21px
    }

    /* 1.5 - Links and Buttons */
    a {
        text-decoration: none;
        outline: none;
        color: #000000;
    }

    a#view_address {
        color: #000000;
    }

    a#view_address:hover {
        color: #000000;
    }

    a:active {
        outline: none;
    }


    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a {
        color: #000000;
    }

    .accent-color {
        color: #ef8742 !important;
    }

    #product .add-to-cart .icon,
    a.btn,
    input.btn,
    .searchform input.submit,
    .cart-summary a .icon {
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
    }

    #zoom-image {
        -webkit-border-radius: 0 2px 0 0;
        -moz-border-radius: 0 2px 0 0;
        border-radius: 0 2px 0 0;
    }

    /* 1.6 - Tables */
    table {
        width: 100%;
        border-spacing: 0;
    }

    table tr td {
        border-top: 1px solid #dddddd;
    }

    table tr td,
    table tr th {
        padding: 10px;
        text-align: left;
    }

    table tr td:first-child,
    table tr th:first-child {
        padding-left: 0px;
    }

    table tr td:last-child,
    table tr th:last-child {
        padding-right: 0px;
    }

    strong {
        font-weight: 700;
    }

    em {
        font-style: italic;
    }

    /* 1.7 - Icons */
    .icon-social {
        float: left;
        display: block;
        width: 32px;
        height: 32px;
        overflow: hidden;
        text-indent: -9999px;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .icon-social {
        background: url('//hstatic.net/0/0/global/design/theme-default/social-icons-light-bg.png') no-repeat;
    }

    .icon-social {
        filter: alpha(opacity=50);
        /* internet explorer */
        -khtml-opacity: 0.5;
        /* khtml, old safari */
        -moz-opacity: 0.5;
        /* mozilla, netscape */
        opacity: 0.5;
        /* fx, safari, opera */
    }

    .icon-social:hover {
        filter: alpha(opacity=100);
        /* internet explorer */
        -khtml-opacity: 1;
        /* khtml, old safari */
        -moz-opacity: 1;
        /* mozilla, netscape */
        opacity: 1;
        /* fx, safari, opera */
    }

    .icon-social.twitter {
        background-position: 0 0;
    }

    .icon-social.facebook {
        background-position: -50px 0;
    }

    .icon-social.youtube {
        background-position: -100px 0;
    }

    .icon-social.atom {
        background-position: -150px 0;
    }

    .icon-social.instagram {
        background-position: -200px 0;
    }

    .icon-social.pinterest {
        background-position: -250px 0;
    }

    .icon-social.vimeo {
        background-position: -300px 0;
    }

    .icon-social.tumblr {
        background-position: -350px 0;
    }

    .icon-social.google {
        background-position: -400px 0;
    }

    .icon-facebook {
        float: left;
        margin-top: 1px;
        width: 40px;
        overflow: hidden;
    }

    .icon-cart {
        float: left;
        display: block;
        width: 20px;
        height: 16px;
        margin: 4px 10px 0 0;
        opacity: 0.8;
        filter: alpha(opacity=60);
    }

    #social .google-plus,
    #product .tweet-btn,
    #product .pinterest,
    #product .facebook-like {
        display: block;
        float: left;
        margin-right: 10px;
    }

    #social .pinterest {
        width: 70px;
    }

    #social .share-this {
        float: left;
        margin: 0 10px 0 0;
    }

    .credit-cards {
        margin: 0 auto;
        list-style: none outside none;
        text-align: center;
    }

    .credit-cards li {
        display: inline;
        margin-right: 10px;
    }

    #customer_orders,
    #customer_sidebar,
    #order_payment,
    #order_shipping {
        margin-bottom: 30px;
        margin-top: 30px;
    }

    #address_tables {
        margin: 20px 15px 0px 0px;
    }

    .col-md-6 #address_tables {
        padding-left: 0px;
        margin-bottom: 30px;
    }

    /* =================== */
    /*      SECTION 2      */
    /* =================== */
    /* 2.1 - Helper Classes */
    .row:before,
    .row:after,
    .clearfix:before,
    .clearfix:after {
        content: "\0020";
        display: block;
        height: 0;
        visibility: hidden
    }

    .clearfix:after,
    .row:after {
        clear: both;
    }

    .clearfix,
    .row {
        zoom: 1;
    }

    .p0 {
        margin-bottom: 0px !important;
    }

    .pl0 {
        padding-left: 0px !important;
    }

    .p5 {
        margin-bottom: 5px !important;
    }

    .p10 {
        margin-bottom: 10px !important;
    }

    .p15 {
        margin-bottom: 15px !important;
    }

    .p20 {
        margin-bottom: 20px !important;
    }

    .p25 {
        margin-bottom: 25px !important;
    }

    .p30 {
        margin-bottom: 30px !important;
    }

    .p35 {
        margin-bottom: 35px !important;
    }

    .p40 {
        margin-bottom: 40px !important;
    }

    .p50 {
        margin-bottom: 50px !important;
    }

    .p60 {
        margin-bottom: 60px !important;
    }

    .pt20 {
        padding-top: 20px !important;
    }

    .plr10 {
        padding: 0px 10px 0px 10px;
    }

    .hidden {
        display: none !important
    }

    .border-top {
        border-top: 1px solid #dddddd;
    }

    .border-right {
        border-right: 1px solid #dddddd;
    }

    .border-bottom {
        border-bottom: 1px solid #dddddd;
    }

    .border-left {
        border-left: 1px solid #dddddd;
    }

    .display-table {
        display: table !important;
        width: 100%;
    }

    .display-table-cell {
        display: table-cell !important;
        vertical-align: middle;
    }

    .table {
        display: table;
        margin: 0 auto;
    }

    .fixed {
        position: fixed;
    }

    .note {
        border: 2px dashed #ACDFFB;
        padding: 9px;
    }

    hr.divider {
        margin: 15px 0;
        background: #dddddd;
        height: 1px;
        border: 0;
    }

    /* 2.2 - Grid System */
    .toolbar-wrapper {
        width: 100%;
        height: 35px;
        background: #000000;
    }

    #transparency>.row:before,
    #transparency>.row:after {
        content: "";
        display: table;
    }

    #transparency>.row:after {
        clear: both;
    }

    #transparency>.row {
        zoom: 1;
    }


    footer {
        margin: 0 auto;
    }

    .inner-left {
        margin-left: 0px !important;
    }

    .inner-right {
        margin-right: 0px !important;
    }

    /* 2.3 - Lists */
    ul {
        padding: 0;
        list-style-type: none;
    }

    ul.unstyled,
    ol.unstyled {
        margin: 0;
        list-style: none outside none;
    }

    ul.unstyled>li,
    ol.unstyled>li {
        list-style: none;
    }

    ul.horizontal>li,
    ol.horizontal>li {
        display: block;
        float: left;
    }

    ul.horizontal-inline,
    ol.horizontal-inline {
        text-align: center;
    }

    ul.horizontal-inline>li,
    ol.horizontal-inline>li {
        display: inline;
        margin: 0 5px;
    }

    ul.expanded>li,
    ol.expanded>li {
        margin-bottom: 10px;
    }

    /* =================== */
    /*      SECTION 3      */
    /* =================== */
    /* 3.1 - Toolbar */
    .toolbar {
        color: #bbbbbb;
        font-size: 15px;
    }

    .toolbar li {
        float: right;
        line-height: 35px;
        list-style: none;
        padding-right: 25px;
        margin-bottom: 0 !important;
    }

    .toolbar a {
        color: #bbbbbb;
    }

    .toolbar a:hover {
        color: #bbbbbb;
        opacity: 0.7;
        filter: alpha(opacity=70);
    }

    .toolbar .search_box {
        height: 34px;
        padding: 0 10px 0 26px;
        border: none;
        vertical-align: middle;
        line-height: normal;
        color: #bbbbbb !important;
        border-radius: 4px
    }

    .toolbar #go {
        position: absolute;
        width: 11px;
        height: 11px;
        border: none;
        margin: 21px 0 0 5px;
        box-shadow: none;
    }

    .toolbar .or {
        color: #888;
    }

    .toolbar-customer {
        padding-left: 0 !important;
    }

    .toolbar li.toolbar-cart {
        padding-right: 0;
    }

    .toolbar li.search-field {
        padding-right: 0;
    }

    #cart-animation {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        position: absolute;
        display: block;
        z-index: 15;
        text-align: center;
        line-height: 35px;
        background: #f45b4f !important;
        color: #fff !important;
        font-weight: bold;
        border: 3px solid #f45b4f;
        font-size: 16px;
    }



    /************** CARD **************/
    .navbar-main .navbar-nav li .toolbar-cart {
        line-height: 20px;
        position: relative;
        display: block;
        padding: 15px 10px;
        text-transform: uppercase;
        white-space: nowrap;
        font-size: 14px;
        border-right: 1px solid #5192b6;
        border-left: 1px solid #5192b6;
    }

    .navbar-main .navbar-nav li .toolbar-cart .icon-cart {
        float: left;
        display: block;
        width: 24px;
        height: 22px;
        margin: 0px 10px 0 0;
        opacity: 0.8;
        filter: alpha(opacity=60);
    }

    .icon-cart {
        background: url('//hstatic.net/0/0/global/design/theme-default/cart.png') no-repeat;
    }

    /* 3.4 - Footer */

    footer {
        padding: 0;
    }


    footer .row {
        margin-bottom: 0;
    }

    footer,
    footer p {
        color: rgb(173, 173, 173);
    }

    footer h1,
    footer h2,
    footer h3,
    footer h4,
    footer h5 {
        color: #333333;
    }

    footer a {
        text-transform: uppercase;
    }

    footer a:hover {
        opacity: 0.7;
        filter: alpha(opacity=70);
    }

    footer h4 {
        font-size: 16px;
        font-weight: 400;
        border-bottom: 1px solid #ffffff;
        padding-bottom: 10px
    }

    footer ul li {
        margin-bottom: 5px;
    }

    footer .btn.newsletter {
        font-size: 14px;
        font-weight: bold;
        height: 34px;
        line-height: 34px;
        margin-left: 15px;
        background: #f45b4f;
        color: #fff;
    }

    footer .btn.newsletter:hover {
        background: #f45b4f;
        color: #fff;
    }

    footer #mail {
        width: 168px;
    }

    .oldie .credit-cards {
        display: none;
    }

    /* 3.5 - Homepage */
    .intro h2 {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .intro h3 {
        font-size: 14px;
        line-height: 27px;
    }

    .intro h3 a {
        color: #ef8742 !important;
    }

    .intro h3 a:hover {}

    .featured-product .display-table-cell:first-child {
        padding-right: 40px;
    }

    .featured-product h2 {
        margin-bottom: 5px;
    }

    .featured-product .price {
        opacity: 0.5;
        font-size: 18px;
        margin-bottom: 10px;
        display: block;
    }

    .featured-product-description {
        margin: 15px 0;
    }

    .featured-product-header {
        opacity: 0.5;
        font-size: 11px;
        text-transform: uppercase;
    }

    .featured-product-image {
        width: 50%;
    }

    .sample-product-wrapper {
        background: #eee url('//hstatic.net/0/0/global/design/theme-default/blankslate-producticon.png') no-repeat center center;
        width: 100%;
        height: 170px;
        display: table;
        text-align: center;
        color: #aaa;
    }

    .sample-product {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        padding: 0 10px;
        font-size: 13px
    }

    .helper-note {
        font-size: 16px;
        padding: 20px;
        position: absolute;
        max-width: 500px;
        margin-left: -270px;
        margin-top: 30px;
        left: 50%;
        z-index: 99999;
        display: none;
    }

    .helper-note p {
        line-height: 23px;
        margin-bottom: 10px;
    }

    .helper-note h3 {
        font-size: 19px;
        font-weight: bold;
    }

    .helper-section {
        clear: both;
    }

    .helper-section:hover .helper-note {
        display: inline-block !important;
        -webkit-animation: fadeInUp 0.2s ease-in;
        -moz-animation: fadeInUp 0.2s ease-in;
        animation: fadeInUp 0.2s ease-in;
    }

    .helper-section .helper-content {
        opacity: 1;
        -webkit-transition: opacity 0.25s ease-in;
        -moz-transition: opacity 0.25s ease-in;
        transition: opacity 0.25s ease-in;
    }

    .helper-section:hover .helper-content {
        opacity: 0.2;
        -webkit-transition: opacity 0.2s ease-out;
        -moz-transition: opacity 0.2s ease-out;
        transition: opacity 0.2s ease-out;
    }

    /* 3.6 - Product & Collections */
    .product {
        position: relative;
        margin-bottom: 20px;
    }

    .product .image {
        position: relative;
        overflow: hidden;
        z-index: 8888;
        margin: 0 0 5px;
    }

    .product .image a {
        text-align: center;
    }

    .image a#placeholder.zoom,
    .thumbs .image a {
        text-align: center;
    }

    .product .image.loading {
        background-position: 50% 50%;
    }

    .product img {
        margin: 0 auto;
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-transition: opacity 0.15s;
        -moz-transition: opacity 0.15s;
        transition: opacity 0.15s;
    }

    .product:hover img {
        opacity: 0.7;
        filter: alpha(opacity=70);
    }

    .product img,
    .product .image a {
        display: block;
        margin: 0 auto;
    }

    .product a {
        text-decoration: none;
    }

    .product .details a {
        display: block;
        padding: 5px 0;
    }

    .product .title,
    .product .vendor {
        display: block;
        margin: 0;
        line-height: 22px;
        display: block;
        color: #333333;
    }

    .product .title {
        font-weight: bold;
        font-size: 14px;
    }

    .product .vendor {
        font-size: 13px;
        margin-bottom: 2px;
    }

    .product .circle,
    #product .circle {
        position: absolute;
        text-transform: uppercase;
        z-index: 9999;
        font-size: 11px;
        line-height: 14px;
        right: -10px;
        top: -10px;
        color: #fff !important;
        padding: 17px 10px;
        -moz-border-radius: 40px;
        -webkit-border-radius: 40px;
        border-radius: 40px;
        font-weight: 700;
        -webkit-font-smoothing: subpixel-antialiased;
    }

    .product .circle.sale,
    #product .circle.sale {
        font-family: helvetica;
        background-color: #f45b4f;
        opacity: .9;
        filter: alpha(opacity=90);
        -webkit-font-smoothing: subpixel-antialiased;
    }

    .product .title {
        overflow: hiden;
        white-space: pre-wrap;
    }

    .product .circle,
    #product .circle {
        font-size: 7px;
        line-height: 18px;
    }

    .purchase h2.price {
        margin: 0 0 10px;
        display: block;
        font-size: 24px !important;
        color: #555555;
        opacity: 0.7;
    }

    .details .price {
        color: #555555;
        opacity: 0.7;
    }

    #product .featured {
        margin-bottom: 15px;
    }

    #product .description {
        margin-bottom: 15px;
    }

    #product .thumbs .image {
        margin-bottom: 15px;
    }

    #product .thumbs .image:nth-child(3n+4) {
        clear: left;
    }

    #product h3.collection-title {
        font-size: 20px;
        padding-bottom: 30px;
        border-bottom: 1px solid #dddddd;
    }

    .product-options {
        padding: 15px 0 20px;
        margin-bottom: 15px;
        border-top: 1px solid #dddddd;
        border-bottom: 1px solid #dddddd;
    }

    .product-options label {
        display: block;
        margin-bottom: 3px;
    }

    .product-options select {
        margin-bottom: 20px;
    }

    .product-options textarea {
        width: 30px;
        line-height: 18px;
        height: 18px;
        min-height: 18px;
        margin-bottom: 20px;
    }

    #quantity {
        width: 50px;
        margin-bottom: 20px;
    }

    @-moz-document url-prefix() {
        .product-options select {
            height: 30px;
            line-height: 30px;
        }
    }

    /* Firefox fix */

    #collection h1 {
        float: left;
        font-size: 18px;
        color: #1973a5;
        text-transform: uppercase;
    }

    #collection .browse-tags {
        float: right;
        padding-bottom: 10px;
        padding-left: 15px;
    }

    #collection .browse-tags label {
        float: left;
        display: block;
        margin: 1px 8px 0 0;
    }

    @-moz-document url-prefix() {
        #collection .browse-tags label {
            margin: 7px 8px 0 0;
        }

        #collection .browse-tags select {
            float: right;
            height: 30px !important;
            line-height: 30px !important;
        }
    }

    .product-block .sold-out {
        background-color: #ff0000;
        position: absolute;
        color: #fff;
        padding: 0 15px;
        font-weight: 500;
        right: -5px;
        z-index: 1;
    }

    .product-block .sold-out:before {
        border-color: #ff0000 transparent transparent transparent;
        border-width: 6px 6px 0 0;
        right: 0;
        width: 0;
        height: 0;
        border-style: solid;
        content: '';
        display: block;
        position: absolute;
        top: 100%;
    }

    .collection-item>div {
        background: #fff;
        background: #fff;
        border: 1px solid;
        border-color: #e5e6e9 #dfe0e4 #d0d1d5;
        -webkit-border-radius: 3px;
        margin-bottom: 30px;
    }

    .collection-item .image {
        text-align: center;
    }

    .collection-item .details {
        padding: 5px;
    }

    .collection-item h4 {
        color: #53A1CC
    }

    @media(min-width:992px) {
        .collection-item:nth-child(3n+1) {
            clear: both
        }
    }

    @media(max-width:480px) {
        .collection-item {
            width: 100%
        }

    }

    /* 3.7 - Cart */
    #cart .buttons {
        margin-top: 30px;
    }

    #cart .extra-checkout-buttons {
        float: right;
        text-align: right;
        padding-top: 15px;
    }

    #cart .extra-checkout-buttons input {
        border: none;
        box-shadow: none;
        height: 42px;
    }

    #cart .qty {
        text-align: center;
    }

    #cart .price,
    #cart .remove {
        text-align: right;
    }

    #checkout {
        float: right;
        margin-left: 15px;
    }

    #update-cart {
        float: right;
    }

    #cart .image {
        text-align: center;
    }

    #cart .image a,
    #cart .image img {
        margin: 0;
        border: none;
        max-height: 100px
    }

    #cart a .variant_title {
        display: block;
        color: #555555;
    }

    #cart a:hover .variant_title {}

    #cart .item {
        max-width: 400px;
    }

    #cart .item-description {
        font-size: 12px;
    }

    #cart .item-quantity {
        width: 50px;
        text-align: center;
    }

    .subtext.success {
        font-weight: 700;
        color: #40954a;
    }

    div.errors,
    .subtext.error {
        font-weight: 700;
        color: #f00;
    }

    div.errors a {
        color: #53A1CC
    }

    div.errors {
        margin-bottom: 15px;
    }

    .cart-buttons {
        float: right !important
    }

    /* 3.8 - Blog / Articles / Search */
    /*#blog .pagination { margin-top:40px; }*/
    .sidebar h3 {
        font-size: 18px;
    }

    .sidebar .article {
        margin: 0 0 15px;
    }

    .sidebar .article a {
        display: block;
    }

    .sidebar .tags li {
        margin: 0;
    }

    .article h1 {
        font-size: 26px;
    }

    .article h1 a {
        display: block;
        color: #ef8742;
    }

    .article h1 .article-title {
        display: block;
    }

    .article h1 a:hover {}

    .article h1 .date,
    .article-body h1 .date {
        font-size: 13px;
    }

    .article .continue {
        display: block;
        margin-top: 15px;
    }

    #article .comment {
        margin-bottom: 15px;
    }

    #article .comment_form {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    #article .comment_form .subtext {
        margin-bottom: 15px;
    }

    #article .comment_form label {
        display: block;
    }

    #article .comment_form .text {
        margin-bottom: 15px;
        display: block;
    }

    #article h2.comment-title {
        font-size: 20px;
    }

    #article #comment_body {
        width: 100%;
        height: 200px;
    }

    #article h3.author {
        font-size: 14px;
        font-style: normal;
        text-transform: capitalize;
    }

    #article-content h1 {
        color: #333333;
        font-size: 36px;
        line-height: 36px;
    }

    #article-content h2 {
        color: #333333;
        font-size: 28px;
        line-height: 36px;
    }

    #article-content h3 {
        color: #333333;
        font-size: 28px;
        line-height: 28px;
    }

    #article .body-content {
        white-space: pre-line;
    }

    #search .results .thumbnail a {
        display: block;
        float: right;
    }

    #search .search-border {
        border-bottom: 1px solid #dddddd;
    }

    #search .results .thumbnail a {
        float: none;
    }

    #search .search-field {
        position: relative;
        height: 60px;
        line-height: 60px;
        width: 300px;
        margin-top: 15px;
    }

    #search .search_box {
        height: 34px;
        width: 100%;
        padding: 0 10px 0 26px;
        border: none;
        vertical-align: middle;
        line-height: normal;
        color: #555555 !important;
        border: 1px solid #dddddd;
    }

    #search #go {
        position: absolute;
        width: 11px;
        height: 11px;
        border: none;
        margin: 22px 0 0 5px;
        box-shadow: none;
        top: 5px;
        right: 5px
    }

    /* 3.9 - Customer Pages */
    #customer-account p,
    #customer-order p {
        line-height: 14px;
    }

    #login input.text {
        width: 220px;
    }

    #customer-activate .create-password {
        margin-bottom: 30px;
    }

    #customer-activate .label,
    #customer-login .label,
    #customer-reset-password .label,
    #customer-register .label {
        display: block;
    }

    #customer-activate .text,
    #customer-login .text,
    #customer-reset-password .text,
    #customer-register .text {
        display: block;
        margin-bottom: 15px;
    }

    #customer-login .action_bottom,
    #customer-register .action_bottom,
    .address_actions {
        margin-top: 15px;
    }

    #order_cancelled {
        margin-bottom: 30px;
    }

    #customer-addresses .add-new-address {
        display: block;
    }

    .action_bottom span {
        line-height: 40px;
    }

    /* =================== */
    /*      SECTION 5      */
    /* =================== */
    /* 5.1 - IE Fixes */
    .ie8 .product .circle,
    .ie8 #product .circle {
        right: 0;
        top: 0;
        padding: 8px 12px;
    }

    .ie7 nav>ul>li {
        float: left !important;
        display: inline-block !important;
    }

    /* added by kevin @ haravan */
    input[type="radio"] {
        -webkit-appearance: radio;
        /* fix for Minimal, Launchpad, and React */
    }

    /* ANIMATE.css */
    body {
        -webkit-backface-visibility: hidden
    }

    .animated {
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        -moz-animation-fill-mode: both;
        -o-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .animated.hinge {
        -webkit-animation-duration: 2s;
        -moz-animation-duration: 2s;
        -o-animation-duration: 2s;
        animation-duration: 2s
    }

    @-webkit-keyframes flash {

        0%,
        50%,
        100% {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    @-moz-keyframes flash {

        0%,
        50%,
        100% {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    @-o-keyframes flash {

        0%,
        50%,
        100% {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    @keyframes flash {

        0%,
        50%,
        100% {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    .flash {
        -webkit-animation-name: flash;
        -moz-animation-name: flash;
        -o-animation-name: flash;
        animation-name: flash
    }

    @-webkit-keyframes shake {

        0%,
        100% {
            -webkit-transform: translateX(0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translateX(-10px)
        }

        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translateX(10px)
        }
    }

    @-moz-keyframes shake {

        0%,
        100% {
            -moz-transform: translateX(0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -moz-transform: translateX(-10px)
        }

        20%,
        40%,
        60%,
        80% {
            -moz-transform: translateX(10px)
        }
    }

    @-o-keyframes shake {

        0%,
        100% {
            -o-transform: translateX(0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -o-transform: translateX(-10px)
        }

        20%,
        40%,
        60%,
        80% {
            -o-transform: translateX(10px)
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translateX(-10px)
        }

        20%,
        40%,
        60%,
        80% {
            transform: translateX(10px)
        }
    }

    .shake {
        -webkit-animation-name: shake;
        -moz-animation-name: shake;
        -o-animation-name: shake;
        animation-name: shake
    }

    @-webkit-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -webkit-transform: translateY(0)
        }

        40% {
            -webkit-transform: translateY(-30px)
        }

        60% {
            -webkit-transform: translateY(-15px)
        }
    }

    @-moz-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -moz-transform: translateY(0)
        }

        40% {
            -moz-transform: translateY(-30px)
        }

        60% {
            -moz-transform: translateY(-15px)
        }
    }

    @-o-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -o-transform: translateY(0)
        }

        40% {
            -o-transform: translateY(-30px)
        }

        60% {
            -o-transform: translateY(-15px)
        }
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0)
        }

        40% {
            transform: translateY(-30px)
        }

        60% {
            transform: translateY(-15px)
        }
    }

    .bounce {
        -webkit-animation-name: bounce;
        -moz-animation-name: bounce;
        -o-animation-name: bounce;
        animation-name: bounce
    }

    @-webkit-keyframes tada {
        0% {
            -webkit-transform: scale(1)
        }

        10%,
        20% {
            -webkit-transform: scale(0.9) rotate(-3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale(1.1) rotate(3deg)
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale(1.1) rotate(-3deg)
        }

        100% {
            -webkit-transform: scale(1) rotate(0)
        }
    }

    @-moz-keyframes tada {
        0% {
            -moz-transform: scale(1)
        }

        10%,
        20% {
            -moz-transform: scale(0.9) rotate(-3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -moz-transform: scale(1.1) rotate(3deg)
        }

        40%,
        60%,
        80% {
            -moz-transform: scale(1.1) rotate(-3deg)
        }

        100% {
            -moz-transform: scale(1) rotate(0)
        }
    }

    @-o-keyframes tada {
        0% {
            -o-transform: scale(1)
        }

        10%,
        20% {
            -o-transform: scale(0.9) rotate(-3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -o-transform: scale(1.1) rotate(3deg)
        }

        40%,
        60%,
        80% {
            -o-transform: scale(1.1) rotate(-3deg)
        }

        100% {
            -o-transform: scale(1) rotate(0)
        }
    }

    @keyframes tada {
        0% {
            transform: scale(1)
        }

        10%,
        20% {
            transform: scale(0.9) rotate(-3deg)
        }

        30%,
        50%,
        70%,
        90% {
            transform: scale(1.1) rotate(3deg)
        }

        40%,
        60%,
        80% {
            transform: scale(1.1) rotate(-3deg)
        }

        100% {
            transform: scale(1) rotate(0)
        }
    }

    .tada {
        -webkit-animation-name: tada;
        -moz-animation-name: tada;
        -o-animation-name: tada;
        animation-name: tada
    }

    @-webkit-keyframes swing {

        20%,
        40%,
        60%,
        80%,
        100% {
            -webkit-transform-origin: top center
        }

        20% {
            -webkit-transform: rotate(15deg)
        }

        40% {
            -webkit-transform: rotate(-10deg)
        }

        60% {
            -webkit-transform: rotate(5deg)
        }

        80% {
            -webkit-transform: rotate(-5deg)
        }

        100% {
            -webkit-transform: rotate(0deg)
        }
    }

    @-moz-keyframes swing {
        20% {
            -moz-transform: rotate(15deg)
        }

        40% {
            -moz-transform: rotate(-10deg)
        }

        60% {
            -moz-transform: rotate(5deg)
        }

        80% {
            -moz-transform: rotate(-5deg)
        }

        100% {
            -moz-transform: rotate(0deg)
        }
    }

    @-o-keyframes swing {
        20% {
            -o-transform: rotate(15deg)
        }

        40% {
            -o-transform: rotate(-10deg)
        }

        60% {
            -o-transform: rotate(5deg)
        }

        80% {
            -o-transform: rotate(-5deg)
        }

        100% {
            -o-transform: rotate(0deg)
        }
    }

    @keyframes swing {
        20% {
            transform: rotate(15deg)
        }

        40% {
            transform: rotate(-10deg)
        }

        60% {
            transform: rotate(5deg)
        }

        80% {
            transform: rotate(-5deg)
        }

        100% {
            transform: rotate(0deg)
        }
    }

    .swing {
        -webkit-transform-origin: top center;
        -moz-transform-origin: top center;
        -o-transform-origin: top center;
        transform-origin: top center;
        -webkit-animation-name: swing;
        -moz-animation-name: swing;
        -o-animation-name: swing;
        animation-name: swing
    }

    @-webkit-keyframes wobble {
        0% {
            -webkit-transform: translateX(0%)
        }

        15% {
            -webkit-transform: translateX(-25%) rotate(-5deg)
        }

        30% {
            -webkit-transform: translateX(20%) rotate(3deg)
        }

        45% {
            -webkit-transform: translateX(-15%) rotate(-3deg)
        }

        60% {
            -webkit-transform: translateX(10%) rotate(2deg)
        }

        75% {
            -webkit-transform: translateX(-5%) rotate(-1deg)
        }

        100% {
            -webkit-transform: translateX(0%)
        }
    }

    @-moz-keyframes wobble {
        0% {
            -moz-transform: translateX(0%)
        }

        15% {
            -moz-transform: translateX(-25%) rotate(-5deg)
        }

        30% {
            -moz-transform: translateX(20%) rotate(3deg)
        }

        45% {
            -moz-transform: translateX(-15%) rotate(-3deg)
        }

        60% {
            -moz-transform: translateX(10%) rotate(2deg)
        }

        75% {
            -moz-transform: translateX(-5%) rotate(-1deg)
        }

        100% {
            -moz-transform: translateX(0%)
        }
    }

    @-o-keyframes wobble {
        0% {
            -o-transform: translateX(0%)
        }

        15% {
            -o-transform: translateX(-25%) rotate(-5deg)
        }

        30% {
            -o-transform: translateX(20%) rotate(3deg)
        }

        45% {
            -o-transform: translateX(-15%) rotate(-3deg)
        }

        60% {
            -o-transform: translateX(10%) rotate(2deg)
        }

        75% {
            -o-transform: translateX(-5%) rotate(-1deg)
        }

        100% {
            -o-transform: translateX(0%)
        }
    }

    @keyframes wobble {
        0% {
            transform: translateX(0%)
        }

        15% {
            transform: translateX(-25%) rotate(-5deg)
        }

        30% {
            transform: translateX(20%) rotate(3deg)
        }

        45% {
            transform: translateX(-15%) rotate(-3deg)
        }

        60% {
            transform: translateX(10%) rotate(2deg)
        }

        75% {
            transform: translateX(-5%) rotate(-1deg)
        }

        100% {
            transform: translateX(0%)
        }
    }

    .wobble {
        -webkit-animation-name: wobble;
        -moz-animation-name: wobble;
        -o-animation-name: wobble;
        animation-name: wobble
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(1)
        }

        50% {
            -webkit-transform: scale(1.1)
        }

        100% {
            -webkit-transform: scale(1)
        }
    }

    @-moz-keyframes pulse {
        0% {
            -moz-transform: scale(1)
        }

        50% {
            -moz-transform: scale(1.1)
        }

        100% {
            -moz-transform: scale(1)
        }
    }

    @-o-keyframes pulse {
        0% {
            -o-transform: scale(1)
        }

        50% {
            -o-transform: scale(1.1)
        }

        100% {
            -o-transform: scale(1)
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1)
        }

        50% {
            transform: scale(1.1)
        }

        100% {
            transform: scale(1)
        }
    }

    .pulse {
        -webkit-animation-name: pulse;
        -moz-animation-name: pulse;
        -o-animation-name: pulse;
        animation-name: pulse
    }

    @-webkit-keyframes flip {
        0% {
            -webkit-transform: perspective(400px) rotateY(0);
            -webkit-animation-timing-function: ease-out
        }

        40% {
            -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
            -webkit-animation-timing-function: ease-out
        }

        50% {
            -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
            -webkit-animation-timing-function: ease-in
        }

        80% {
            -webkit-transform: perspective(400px) rotateY(360deg) scale(.95);
            -webkit-animation-timing-function: ease-in
        }

        100% {
            -webkit-transform: perspective(400px) scale(1);
            -webkit-animation-timing-function: ease-in
        }
    }

    @-moz-keyframes flip {
        0% {
            -moz-transform: perspective(400px) rotateY(0);
            -moz-animation-timing-function: ease-out
        }

        40% {
            -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
            -moz-animation-timing-function: ease-out
        }

        50% {
            -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
            -moz-animation-timing-function: ease-in
        }

        80% {
            -moz-transform: perspective(400px) rotateY(360deg) scale(.95);
            -moz-animation-timing-function: ease-in
        }

        100% {
            -moz-transform: perspective(400px) scale(1);
            -moz-animation-timing-function: ease-in
        }
    }

    @-o-keyframes flip {
        0% {
            -o-transform: perspective(400px) rotateY(0);
            -o-animation-timing-function: ease-out
        }

        40% {
            -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
            -o-animation-timing-function: ease-out
        }

        50% {
            -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
            -o-animation-timing-function: ease-in
        }

        80% {
            -o-transform: perspective(400px) rotateY(360deg) scale(.95);
            -o-animation-timing-function: ease-in
        }

        100% {
            -o-transform: perspective(400px) scale(1);
            -o-animation-timing-function: ease-in
        }
    }

    @keyframes flip {
        0% {
            transform: perspective(400px) rotateY(0);
            animation-timing-function: ease-out
        }

        40% {
            transform: perspective(400px) translateZ(150px) rotateY(170deg);
            animation-timing-function: ease-out
        }

        50% {
            transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
            animation-timing-function: ease-in
        }

        80% {
            transform: perspective(400px) rotateY(360deg) scale(.95);
            animation-timing-function: ease-in
        }

        100% {
            transform: perspective(400px) scale(1);
            animation-timing-function: ease-in
        }
    }

    .flip {
        -webkit-backface-visibility: visible !important;
        -webkit-animation-name: flip;
        -moz-backface-visibility: visible !important;
        -moz-animation-name: flip;
        -o-backface-visibility: visible !important;
        -o-animation-name: flip;
        backface-visibility: visible !important;
        animation-name: flip
    }

    @-webkit-keyframes flipInX {
        0% {
            -webkit-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotateX(-10deg)
        }

        70% {
            -webkit-transform: perspective(400px) rotateX(10deg)
        }

        100% {
            -webkit-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }
    }

    @-moz-keyframes flipInX {
        0% {
            -moz-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }

        40% {
            -moz-transform: perspective(400px) rotateX(-10deg)
        }

        70% {
            -moz-transform: perspective(400px) rotateX(10deg)
        }

        100% {
            -moz-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }
    }

    @-o-keyframes flipInX {
        0% {
            -o-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }

        40% {
            -o-transform: perspective(400px) rotateX(-10deg)
        }

        70% {
            -o-transform: perspective(400px) rotateX(10deg)
        }

        100% {
            -o-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes flipInX {
        0% {
            transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }

        40% {
            transform: perspective(400px) rotateX(-10deg)
        }

        70% {
            transform: perspective(400px) rotateX(10deg)
        }

        100% {
            transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }
    }

    .flipInX {
        -webkit-backface-visibility: visible !important;
        -webkit-animation-name: flipInX;
        -moz-backface-visibility: visible !important;
        -moz-animation-name: flipInX;
        -o-backface-visibility: visible !important;
        -o-animation-name: flipInX;
        backface-visibility: visible !important;
        animation-name: flipInX
    }

    @-webkit-keyframes flipOutX {
        0% {
            -webkit-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }

        100% {
            -webkit-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }
    }

    @-moz-keyframes flipOutX {
        0% {
            -moz-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }

        100% {
            -moz-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }
    }

    @-o-keyframes flipOutX {
        0% {
            -o-transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }

        100% {
            -o-transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }
    }

    @keyframes flipOutX {
        0% {
            transform: perspective(400px) rotateX(0deg);
            opacity: 1
        }

        100% {
            transform: perspective(400px) rotateX(90deg);
            opacity: 0
        }
    }

    .flipOutX {
        -webkit-animation-name: flipOutX;
        -webkit-backface-visibility: visible !important;
        -moz-animation-name: flipOutX;
        -moz-backface-visibility: visible !important;
        -o-animation-name: flipOutX;
        -o-backface-visibility: visible !important;
        animation-name: flipOutX;
        backface-visibility: visible !important
    }

    @-webkit-keyframes flipInY {
        0% {
            -webkit-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotateY(-10deg)
        }

        70% {
            -webkit-transform: perspective(400px) rotateY(10deg)
        }

        100% {
            -webkit-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }
    }

    @-moz-keyframes flipInY {
        0% {
            -moz-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }

        40% {
            -moz-transform: perspective(400px) rotateY(-10deg)
        }

        70% {
            -moz-transform: perspective(400px) rotateY(10deg)
        }

        100% {
            -moz-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }
    }

    @-o-keyframes flipInY {
        0% {
            -o-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }

        40% {
            -o-transform: perspective(400px) rotateY(-10deg)
        }

        70% {
            -o-transform: perspective(400px) rotateY(10deg)
        }

        100% {
            -o-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }
    }

    @keyframes flipInY {
        0% {
            transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }

        40% {
            transform: perspective(400px) rotateY(-10deg)
        }

        70% {
            transform: perspective(400px) rotateY(10deg)
        }

        100% {
            transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }
    }

    .flipInY {
        -webkit-backface-visibility: visible !important;
        -webkit-animation-name: flipInY;
        -moz-backface-visibility: visible !important;
        -moz-animation-name: flipInY;
        -o-backface-visibility: visible !important;
        -o-animation-name: flipInY;
        backface-visibility: visible !important;
        animation-name: flipInY
    }

    @-webkit-keyframes flipOutY {
        0% {
            -webkit-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }

        100% {
            -webkit-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }
    }

    @-moz-keyframes flipOutY {
        0% {
            -moz-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }

        100% {
            -moz-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }
    }

    @-o-keyframes flipOutY {
        0% {
            -o-transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }

        100% {
            -o-transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }
    }

    @keyframes flipOutY {
        0% {
            transform: perspective(400px) rotateY(0deg);
            opacity: 1
        }

        100% {
            transform: perspective(400px) rotateY(90deg);
            opacity: 0
        }
    }

    .flipOutY {
        -webkit-backface-visibility: visible !important;
        -webkit-animation-name: flipOutY;
        -moz-backface-visibility: visible !important;
        -moz-animation-name: flipOutY;
        -o-backface-visibility: visible !important;
        -o-animation-name: flipOutY;
        backface-visibility: visible !important;
        animation-name: flipOutY
    }

    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @-moz-keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @-o-keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        -moz-animation-name: fadeIn;
        -o-animation-name: fadeIn;
        animation-name: fadeIn
    }

    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(20px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes fadeInUp {
        0% {
            opacity: 0;
            -moz-transform: translateY(20px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes fadeInUp {
        0% {
            opacity: 0;
            -o-transform: translateY(20px)
        }

        100% {
            opacity: 1;
            -o-transform: translateY(0)
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        -moz-animation-name: fadeInUp;
        -o-animation-name: fadeInUp;
        animation-name: fadeInUp
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-20px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes fadeInDown {
        0% {
            opacity: 0;
            -moz-transform: translateY(-20px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes fadeInDown {
        0% {
            opacity: 0;
            -o-transform: translateY(-20px)
        }

        100% {
            opacity: 1;
            -o-transform: translateY(0)
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-20px)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        -moz-animation-name: fadeInDown;
        -o-animation-name: fadeInDown;
        animation-name: fadeInDown
    }

    @-webkit-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-20px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -moz-transform: translateX(-20px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -o-transform: translateX(-20px)
        }

        100% {
            opacity: 1;
            -o-transform: translateX(0)
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-20px)
        }

        100% {
            opacity: 1;
            transform: translateX(0)
        }
    }

    .fadeInLeft {
        -webkit-animation-name: fadeInLeft;
        -moz-animation-name: fadeInLeft;
        -o-animation-name: fadeInLeft;
        animation-name: fadeInLeft
    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translateX(20px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes fadeInRight {
        0% {
            opacity: 0;
            -moz-transform: translateX(20px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes fadeInRight {
        0% {
            opacity: 0;
            -o-transform: translateX(20px)
        }

        100% {
            opacity: 1;
            -o-transform: translateX(0)
        }
    }

    @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(20px)
        }

        100% {
            opacity: 1;
            transform: translateX(0)
        }
    }

    .fadeInRight {
        -webkit-animation-name: fadeInRight;
        -moz-animation-name: fadeInRight;
        -o-animation-name: fadeInRight;
        animation-name: fadeInRight
    }

    @-webkit-keyframes fadeInUpBig {
        0% {
            opacity: 0;
            -webkit-transform: translateY(2000px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes fadeInUpBig {
        0% {
            opacity: 0;
            -moz-transform: translateY(2000px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes fadeInUpBig {
        0% {
            opacity: 0;
            -o-transform: translateY(2000px)
        }

        100% {
            opacity: 1;
            -o-transform: translateY(0)
        }
    }

    @keyframes fadeInUpBig {
        0% {
            opacity: 0;
            transform: translateY(2000px)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .fadeInUpBig {
        -webkit-animation-name: fadeInUpBig;
        -moz-animation-name: fadeInUpBig;
        -o-animation-name: fadeInUpBig;
        animation-name: fadeInUpBig
    }

    @-webkit-keyframes fadeInDownBig {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-2000px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes fadeInDownBig {
        0% {
            opacity: 0;
            -moz-transform: translateY(-2000px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes fadeInDownBig {
        0% {
            opacity: 0;
            -o-transform: translateY(-2000px)
        }

        100% {
            opacity: 1;
            -o-transform: translateY(0)
        }
    }

    @keyframes fadeInDownBig {
        0% {
            opacity: 0;
            transform: translateY(-2000px)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .fadeInDownBig {
        -webkit-animation-name: fadeInDownBig;
        -moz-animation-name: fadeInDownBig;
        -o-animation-name: fadeInDownBig;
        animation-name: fadeInDownBig
    }

    @-webkit-keyframes fadeInLeftBig {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-2000px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes fadeInLeftBig {
        0% {
            opacity: 0;
            -moz-transform: translateX(-2000px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes fadeInLeftBig {
        0% {
            opacity: 0;
            -o-transform: translateX(-2000px)
        }

        100% {
            opacity: 1;
            -o-transform: translateX(0)
        }
    }

    @keyframes fadeInLeftBig {
        0% {
            opacity: 0;
            transform: translateX(-2000px)
        }

        100% {
            opacity: 1;
            transform: translateX(0)
        }
    }

    .fadeInLeftBig {
        -webkit-animation-name: fadeInLeftBig;
        -moz-animation-name: fadeInLeftBig;
        -o-animation-name: fadeInLeftBig;
        animation-name: fadeInLeftBig
    }

    @-webkit-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -webkit-transform: translateX(2000px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -moz-transform: translateX(2000px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -o-transform: translateX(2000px)
        }

        100% {
            opacity: 1;
            -o-transform: translateX(0)
        }
    }

    @keyframes fadeInRightBig {
        0% {
            opacity: 0;
            transform: translateX(2000px)
        }

        100% {
            opacity: 1;
            transform: translateX(0)
        }
    }

    .fadeInRightBig {
        -webkit-animation-name: fadeInRightBig;
        -moz-animation-name: fadeInRightBig;
        -o-animation-name: fadeInRightBig;
        animation-name: fadeInRightBig
    }

    @-webkit-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @-moz-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @-o-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        -moz-animation-name: fadeOut;
        -o-animation-name: fadeOut;
        animation-name: fadeOut
    }

    @-webkit-keyframes fadeOutUp {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-20px)
        }
    }

    @-moz-keyframes fadeOutUp {
        0% {
            opacity: 1;
            -moz-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(-20px)
        }
    }

    @-o-keyframes fadeOutUp {
        0% {
            opacity: 1;
            -o-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(-20px)
        }
    }

    @keyframes fadeOutUp {
        0% {
            opacity: 1;
            transform: translateY(0)
        }

        100% {
            opacity: 0;
            transform: translateY(-20px)
        }
    }

    .fadeOutUp {
        -webkit-animation-name: fadeOutUp;
        -moz-animation-name: fadeOutUp;
        -o-animation-name: fadeOutUp;
        animation-name: fadeOutUp
    }

    @-webkit-keyframes fadeOutDown {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(20px)
        }
    }

    @-moz-keyframes fadeOutDown {
        0% {
            opacity: 1;
            -moz-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(20px)
        }
    }

    @-o-keyframes fadeOutDown {
        0% {
            opacity: 1;
            -o-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(20px)
        }
    }

    @keyframes fadeOutDown {
        0% {
            opacity: 1;
            transform: translateY(0)
        }

        100% {
            opacity: 0;
            transform: translateY(20px)
        }
    }

    .fadeOutDown {
        -webkit-animation-name: fadeOutDown;
        -moz-animation-name: fadeOutDown;
        -o-animation-name: fadeOutDown;
        animation-name: fadeOutDown
    }

    @-webkit-keyframes fadeOutLeft {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(-20px)
        }
    }

    @-moz-keyframes fadeOutLeft {
        0% {
            opacity: 1;
            -moz-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(-20px)
        }
    }

    @-o-keyframes fadeOutLeft {
        0% {
            opacity: 1;
            -o-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(-20px)
        }
    }

    @keyframes fadeOutLeft {
        0% {
            opacity: 1;
            transform: translateX(0)
        }

        100% {
            opacity: 0;
            transform: translateX(-20px)
        }
    }

    .fadeOutLeft {
        -webkit-animation-name: fadeOutLeft;
        -moz-animation-name: fadeOutLeft;
        -o-animation-name: fadeOutLeft;
        animation-name: fadeOutLeft
    }

    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(20px)
        }
    }

    @-moz-keyframes fadeOutRight {
        0% {
            opacity: 1;
            -moz-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(20px)
        }
    }

    @-o-keyframes fadeOutRight {
        0% {
            opacity: 1;
            -o-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(20px)
        }
    }

    @keyframes fadeOutRight {
        0% {
            opacity: 1;
            transform: translateX(0)
        }

        100% {
            opacity: 0;
            transform: translateX(20px)
        }
    }

    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        -moz-animation-name: fadeOutRight;
        -o-animation-name: fadeOutRight;
        animation-name: fadeOutRight
    }

    @-webkit-keyframes fadeOutUpBig {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-2000px)
        }
    }

    @-moz-keyframes fadeOutUpBig {
        0% {
            opacity: 1;
            -moz-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(-2000px)
        }
    }

    @-o-keyframes fadeOutUpBig {
        0% {
            opacity: 1;
            -o-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(-2000px)
        }
    }

    @keyframes fadeOutUpBig {
        0% {
            opacity: 1;
            transform: translateY(0)
        }

        100% {
            opacity: 0;
            transform: translateY(-2000px)
        }
    }

    .fadeOutUpBig {
        -webkit-animation-name: fadeOutUpBig;
        -moz-animation-name: fadeOutUpBig;
        -o-animation-name: fadeOutUpBig;
        animation-name: fadeOutUpBig
    }

    @-webkit-keyframes fadeOutDownBig {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(2000px)
        }
    }

    @-moz-keyframes fadeOutDownBig {
        0% {
            opacity: 1;
            -moz-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(2000px)
        }
    }

    @-o-keyframes fadeOutDownBig {
        0% {
            opacity: 1;
            -o-transform: translateY(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(2000px)
        }
    }

    @keyframes fadeOutDownBig {
        0% {
            opacity: 1;
            transform: translateY(0)
        }

        100% {
            opacity: 0;
            transform: translateY(2000px)
        }
    }

    .fadeOutDownBig {
        -webkit-animation-name: fadeOutDownBig;
        -moz-animation-name: fadeOutDownBig;
        -o-animation-name: fadeOutDownBig;
        animation-name: fadeOutDownBig
    }

    @-webkit-keyframes fadeOutLeftBig {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(-2000px)
        }
    }

    @-moz-keyframes fadeOutLeftBig {
        0% {
            opacity: 1;
            -moz-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(-2000px)
        }
    }

    @-o-keyframes fadeOutLeftBig {
        0% {
            opacity: 1;
            -o-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(-2000px)
        }
    }

    @keyframes fadeOutLeftBig {
        0% {
            opacity: 1;
            transform: translateX(0)
        }

        100% {
            opacity: 0;
            transform: translateX(-2000px)
        }
    }

    .fadeOutLeftBig {
        -webkit-animation-name: fadeOutLeftBig;
        -moz-animation-name: fadeOutLeftBig;
        -o-animation-name: fadeOutLeftBig;
        animation-name: fadeOutLeftBig
    }

    @-webkit-keyframes fadeOutRightBig {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(2000px)
        }
    }

    @-moz-keyframes fadeOutRightBig {
        0% {
            opacity: 1;
            -moz-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(2000px)
        }
    }

    @-o-keyframes fadeOutRightBig {
        0% {
            opacity: 1;
            -o-transform: translateX(0)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(2000px)
        }
    }

    @keyframes fadeOutRightBig {
        0% {
            opacity: 1;
            transform: translateX(0)
        }

        100% {
            opacity: 0;
            transform: translateX(2000px)
        }
    }

    .fadeOutRightBig {
        -webkit-animation-name: fadeOutRightBig;
        -moz-animation-name: fadeOutRightBig;
        -o-animation-name: fadeOutRightBig;
        animation-name: fadeOutRightBig
    }

    @-webkit-keyframes bounceIn {
        0% {
            opacity: 0;
            -webkit-transform: scale(.3)
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(1.05)
        }

        70% {
            -webkit-transform: scale(.9)
        }

        100% {
            -webkit-transform: scale(1)
        }
    }

    @-moz-keyframes bounceIn {
        0% {
            opacity: 0;
            -moz-transform: scale(.3)
        }

        50% {
            opacity: 1;
            -moz-transform: scale(1.05)
        }

        70% {
            -moz-transform: scale(.9)
        }

        100% {
            -moz-transform: scale(1)
        }
    }

    @-o-keyframes bounceIn {
        0% {
            opacity: 0;
            -o-transform: scale(.3)
        }

        50% {
            opacity: 1;
            -o-transform: scale(1.05)
        }

        70% {
            -o-transform: scale(.9)
        }

        100% {
            -o-transform: scale(1)
        }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            transform: scale(.3)
        }

        50% {
            opacity: 1;
            transform: scale(1.05)
        }

        70% {
            transform: scale(.9)
        }

        100% {
            transform: scale(1)
        }
    }

    .bounceIn {
        -webkit-animation-name: bounceIn;
        -moz-animation-name: bounceIn;
        -o-animation-name: bounceIn;
        animation-name: bounceIn
    }

    @-webkit-keyframes bounceInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(2000px)
        }

        60% {
            opacity: 1;
            -webkit-transform: translateY(-30px)
        }

        80% {
            -webkit-transform: translateY(10px)
        }

        100% {
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes bounceInUp {
        0% {
            opacity: 0;
            -moz-transform: translateY(2000px)
        }

        60% {
            opacity: 1;
            -moz-transform: translateY(-30px)
        }

        80% {
            -moz-transform: translateY(10px)
        }

        100% {
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes bounceInUp {
        0% {
            opacity: 0;
            -o-transform: translateY(2000px)
        }

        60% {
            opacity: 1;
            -o-transform: translateY(-30px)
        }

        80% {
            -o-transform: translateY(10px)
        }

        100% {
            -o-transform: translateY(0)
        }
    }

    @keyframes bounceInUp {
        0% {
            opacity: 0;
            transform: translateY(2000px)
        }

        60% {
            opacity: 1;
            transform: translateY(-30px)
        }

        80% {
            transform: translateY(10px)
        }

        100% {
            transform: translateY(0)
        }
    }

    .bounceInUp {
        -webkit-animation-name: bounceInUp;
        -moz-animation-name: bounceInUp;
        -o-animation-name: bounceInUp;
        animation-name: bounceInUp
    }

    @-webkit-keyframes bounceInDown {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-2000px)
        }

        60% {
            opacity: 1;
            -webkit-transform: translateY(30px)
        }

        80% {
            -webkit-transform: translateY(-10px)
        }

        100% {
            -webkit-transform: translateY(0)
        }
    }

    @-moz-keyframes bounceInDown {
        0% {
            opacity: 0;
            -moz-transform: translateY(-2000px)
        }

        60% {
            opacity: 1;
            -moz-transform: translateY(30px)
        }

        80% {
            -moz-transform: translateY(-10px)
        }

        100% {
            -moz-transform: translateY(0)
        }
    }

    @-o-keyframes bounceInDown {
        0% {
            opacity: 0;
            -o-transform: translateY(-2000px)
        }

        60% {
            opacity: 1;
            -o-transform: translateY(30px)
        }

        80% {
            -o-transform: translateY(-10px)
        }

        100% {
            -o-transform: translateY(0)
        }
    }

    @keyframes bounceInDown {
        0% {
            opacity: 0;
            transform: translateY(-2000px)
        }

        60% {
            opacity: 1;
            transform: translateY(30px)
        }

        80% {
            transform: translateY(-10px)
        }

        100% {
            transform: translateY(0)
        }
    }

    .bounceInDown {
        -webkit-animation-name: bounceInDown;
        -moz-animation-name: bounceInDown;
        -o-animation-name: bounceInDown;
        animation-name: bounceInDown
    }

    @-webkit-keyframes bounceInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-2000px)
        }

        60% {
            opacity: 1;
            -webkit-transform: translateX(30px)
        }

        80% {
            -webkit-transform: translateX(-10px)
        }

        100% {
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes bounceInLeft {
        0% {
            opacity: 0;
            -moz-transform: translateX(-2000px)
        }

        60% {
            opacity: 1;
            -moz-transform: translateX(30px)
        }

        80% {
            -moz-transform: translateX(-10px)
        }

        100% {
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes bounceInLeft {
        0% {
            opacity: 0;
            -o-transform: translateX(-2000px)
        }

        60% {
            opacity: 1;
            -o-transform: translateX(30px)
        }

        80% {
            -o-transform: translateX(-10px)
        }

        100% {
            -o-transform: translateX(0)
        }
    }

    @keyframes bounceInLeft {
        0% {
            opacity: 0;
            transform: translateX(-2000px)
        }

        60% {
            opacity: 1;
            transform: translateX(30px)
        }

        80% {
            transform: translateX(-10px)
        }

        100% {
            transform: translateX(0)
        }
    }

    .bounceInLeft {
        -webkit-animation-name: bounceInLeft;
        -moz-animation-name: bounceInLeft;
        -o-animation-name: bounceInLeft;
        animation-name: bounceInLeft
    }

    @-webkit-keyframes bounceInRight {
        0% {
            opacity: 0;
            -webkit-transform: translateX(2000px)
        }

        60% {
            opacity: 1;
            -webkit-transform: translateX(-30px)
        }

        80% {
            -webkit-transform: translateX(10px)
        }

        100% {
            -webkit-transform: translateX(0)
        }
    }

    @-moz-keyframes bounceInRight {
        0% {
            opacity: 0;
            -moz-transform: translateX(2000px)
        }

        60% {
            opacity: 1;
            -moz-transform: translateX(-30px)
        }

        80% {
            -moz-transform: translateX(10px)
        }

        100% {
            -moz-transform: translateX(0)
        }
    }

    @-o-keyframes bounceInRight {
        0% {
            opacity: 0;
            -o-transform: translateX(2000px)
        }

        60% {
            opacity: 1;
            -o-transform: translateX(-30px)
        }

        80% {
            -o-transform: translateX(10px)
        }

        100% {
            -o-transform: translateX(0)
        }
    }

    @keyframes bounceInRight {
        0% {
            opacity: 0;
            transform: translateX(2000px)
        }

        60% {
            opacity: 1;
            transform: translateX(-30px)
        }

        80% {
            transform: translateX(10px)
        }

        100% {
            transform: translateX(0)
        }
    }

    .bounceInRight {
        -webkit-animation-name: bounceInRight;
        -moz-animation-name: bounceInRight;
        -o-animation-name: bounceInRight;
        animation-name: bounceInRight
    }

    @-webkit-keyframes bounceOut {
        0% {
            -webkit-transform: scale(1)
        }

        25% {
            -webkit-transform: scale(.95)
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(1.1)
        }

        100% {
            opacity: 0;
            -webkit-transform: scale(.3)
        }
    }

    @-moz-keyframes bounceOut {
        0% {
            -moz-transform: scale(1)
        }

        25% {
            -moz-transform: scale(.95)
        }

        50% {
            opacity: 1;
            -moz-transform: scale(1.1)
        }

        100% {
            opacity: 0;
            -moz-transform: scale(.3)
        }
    }

    @-o-keyframes bounceOut {
        0% {
            -o-transform: scale(1)
        }

        25% {
            -o-transform: scale(.95)
        }

        50% {
            opacity: 1;
            -o-transform: scale(1.1)
        }

        100% {
            opacity: 0;
            -o-transform: scale(.3)
        }
    }

    @keyframes bounceOut {
        0% {
            transform: scale(1)
        }

        25% {
            transform: scale(.95)
        }

        50% {
            opacity: 1;
            transform: scale(1.1)
        }

        100% {
            opacity: 0;
            transform: scale(.3)
        }
    }

    .bounceOut {
        -webkit-animation-name: bounceOut;
        -moz-animation-name: bounceOut;
        -o-animation-name: bounceOut;
        animation-name: bounceOut
    }

    @-webkit-keyframes bounceOutUp {
        0% {
            -webkit-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -webkit-transform: translateY(20px)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(-2000px)
        }
    }

    @-moz-keyframes bounceOutUp {
        0% {
            -moz-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -moz-transform: translateY(20px)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(-2000px)
        }
    }

    @-o-keyframes bounceOutUp {
        0% {
            -o-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -o-transform: translateY(20px)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(-2000px)
        }
    }

    @keyframes bounceOutUp {
        0% {
            transform: translateY(0)
        }

        20% {
            opacity: 1;
            transform: translateY(20px)
        }

        100% {
            opacity: 0;
            transform: translateY(-2000px)
        }
    }

    .bounceOutUp {
        -webkit-animation-name: bounceOutUp;
        -moz-animation-name: bounceOutUp;
        -o-animation-name: bounceOutUp;
        animation-name: bounceOutUp
    }

    @-webkit-keyframes bounceOutDown {
        0% {
            -webkit-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -webkit-transform: translateY(-20px)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(2000px)
        }
    }

    @-moz-keyframes bounceOutDown {
        0% {
            -moz-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -moz-transform: translateY(-20px)
        }

        100% {
            opacity: 0;
            -moz-transform: translateY(2000px)
        }
    }

    @-o-keyframes bounceOutDown {
        0% {
            -o-transform: translateY(0)
        }

        20% {
            opacity: 1;
            -o-transform: translateY(-20px)
        }

        100% {
            opacity: 0;
            -o-transform: translateY(2000px)
        }
    }

    @keyframes bounceOutDown {
        0% {
            transform: translateY(0)
        }

        20% {
            opacity: 1;
            transform: translateY(-20px)
        }

        100% {
            opacity: 0;
            transform: translateY(2000px)
        }
    }

    .bounceOutDown {
        -webkit-animation-name: bounceOutDown;
        -moz-animation-name: bounceOutDown;
        -o-animation-name: bounceOutDown;
        animation-name: bounceOutDown
    }

    @-webkit-keyframes bounceOutLeft {
        0% {
            -webkit-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -webkit-transform: translateX(20px)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(-2000px)
        }
    }

    @-moz-keyframes bounceOutLeft {
        0% {
            -moz-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -moz-transform: translateX(20px)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(-2000px)
        }
    }

    @-o-keyframes bounceOutLeft {
        0% {
            -o-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -o-transform: translateX(20px)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(-2000px)
        }
    }

    @keyframes bounceOutLeft {
        0% {
            transform: translateX(0)
        }

        20% {
            opacity: 1;
            transform: translateX(20px)
        }

        100% {
            opacity: 0;
            transform: translateX(-2000px)
        }
    }

    .bounceOutLeft {
        -webkit-animation-name: bounceOutLeft;
        -moz-animation-name: bounceOutLeft;
        -o-animation-name: bounceOutLeft;
        animation-name: bounceOutLeft
    }

    @-webkit-keyframes bounceOutRight {
        0% {
            -webkit-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -webkit-transform: translateX(-20px)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(2000px)
        }
    }

    @-moz-keyframes bounceOutRight {
        0% {
            -moz-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -moz-transform: translateX(-20px)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(2000px)
        }
    }

    @-o-keyframes bounceOutRight {
        0% {
            -o-transform: translateX(0)
        }

        20% {
            opacity: 1;
            -o-transform: translateX(-20px)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(2000px)
        }
    }

    @keyframes bounceOutRight {
        0% {
            transform: translateX(0)
        }

        20% {
            opacity: 1;
            transform: translateX(-20px)
        }

        100% {
            opacity: 0;
            transform: translateX(2000px)
        }
    }

    .bounceOutRight {
        -webkit-animation-name: bounceOutRight;
        -moz-animation-name: bounceOutRight;
        -o-animation-name: bounceOutRight;
        animation-name: bounceOutRight
    }

    @-webkit-keyframes rotateIn {
        0% {
            -webkit-transform-origin: center center;
            -webkit-transform: rotate(-200deg);
            opacity: 0
        }

        100% {
            -webkit-transform-origin: center center;
            -webkit-transform: rotate(0);
            opacity: 1
        }
    }

    @-moz-keyframes rotateIn {
        0% {
            -moz-transform-origin: center center;
            -moz-transform: rotate(-200deg);
            opacity: 0
        }

        100% {
            -moz-transform-origin: center center;
            -moz-transform: rotate(0);
            opacity: 1
        }
    }

    @-o-keyframes rotateIn {
        0% {
            -o-transform-origin: center center;
            -o-transform: rotate(-200deg);
            opacity: 0
        }

        100% {
            -o-transform-origin: center center;
            -o-transform: rotate(0);
            opacity: 1
        }
    }

    @keyframes rotateIn {
        0% {
            transform-origin: center center;
            transform: rotate(-200deg);
            opacity: 0
        }

        100% {
            transform-origin: center center;
            transform: rotate(0);
            opacity: 1
        }
    }

    .rotateIn {
        -webkit-animation-name: rotateIn;
        -moz-animation-name: rotateIn;
        -o-animation-name: rotateIn;
        animation-name: rotateIn
    }

    @-webkit-keyframes rotateInUpLeft {
        0% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }
    }

    @-moz-keyframes rotateInUpLeft {
        0% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }
    }

    @-o-keyframes rotateInUpLeft {
        0% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(0);
            opacity: 1
        }
    }

    @keyframes rotateInUpLeft {
        0% {
            transform-origin: left bottom;
            transform: rotate(90deg);
            opacity: 0
        }

        100% {
            transform-origin: left bottom;
            transform: rotate(0);
            opacity: 1
        }
    }

    .rotateInUpLeft {
        -webkit-animation-name: rotateInUpLeft;
        -moz-animation-name: rotateInUpLeft;
        -o-animation-name: rotateInUpLeft;
        animation-name: rotateInUpLeft
    }

    @-webkit-keyframes rotateInDownLeft {
        0% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }
    }

    @-moz-keyframes rotateInDownLeft {
        0% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }
    }

    @-o-keyframes rotateInDownLeft {
        0% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(0);
            opacity: 1
        }
    }

    @keyframes rotateInDownLeft {
        0% {
            transform-origin: left bottom;
            transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            transform-origin: left bottom;
            transform: rotate(0);
            opacity: 1
        }
    }

    .rotateInDownLeft {
        -webkit-animation-name: rotateInDownLeft;
        -moz-animation-name: rotateInDownLeft;
        -o-animation-name: rotateInDownLeft;
        animation-name: rotateInDownLeft
    }

    @-webkit-keyframes rotateInUpRight {
        0% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }
    }

    @-moz-keyframes rotateInUpRight {
        0% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }
    }

    @-o-keyframes rotateInUpRight {
        0% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(0);
            opacity: 1
        }
    }

    @keyframes rotateInUpRight {
        0% {
            transform-origin: right bottom;
            transform: rotate(-90deg);
            opacity: 0
        }

        100% {
            transform-origin: right bottom;
            transform: rotate(0);
            opacity: 1
        }
    }

    .rotateInUpRight {
        -webkit-animation-name: rotateInUpRight;
        -moz-animation-name: rotateInUpRight;
        -o-animation-name: rotateInUpRight;
        animation-name: rotateInUpRight
    }

    @-webkit-keyframes rotateInDownRight {
        0% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }
    }

    @-moz-keyframes rotateInDownRight {
        0% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }
    }

    @-o-keyframes rotateInDownRight {
        0% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(90deg);
            opacity: 0
        }

        100% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(0);
            opacity: 1
        }
    }

    @keyframes rotateInDownRight {
        0% {
            transform-origin: right bottom;
            transform: rotate(90deg);
            opacity: 0
        }

        100% {
            transform-origin: right bottom;
            transform: rotate(0);
            opacity: 1
        }
    }

    .rotateInDownRight {
        -webkit-animation-name: rotateInDownRight;
        -moz-animation-name: rotateInDownRight;
        -o-animation-name: rotateInDownRight;
        animation-name: rotateInDownRight
    }

    @-webkit-keyframes rotateOut {
        0% {
            -webkit-transform-origin: center center;
            -webkit-transform: rotate(0);
            opacity: 1
        }

        100% {
            -webkit-transform-origin: center center;
            -webkit-transform: rotate(200deg);
            opacity: 0
        }
    }

    @-moz-keyframes rotateOut {
        0% {
            -moz-transform-origin: center center;
            -moz-transform: rotate(0);
            opacity: 1
        }

        100% {
            -moz-transform-origin: center center;
            -moz-transform: rotate(200deg);
            opacity: 0
        }
    }

    @-o-keyframes rotateOut {
        0% {
            -o-transform-origin: center center;
            -o-transform: rotate(0);
            opacity: 1
        }

        100% {
            -o-transform-origin: center center;
            -o-transform: rotate(200deg);
            opacity: 0
        }
    }

    @keyframes rotateOut {
        0% {
            transform-origin: center center;
            transform: rotate(0);
            opacity: 1
        }

        100% {
            transform-origin: center center;
            transform: rotate(200deg);
            opacity: 0
        }
    }

    .rotateOut {
        -webkit-animation-name: rotateOut;
        -moz-animation-name: rotateOut;
        -o-animation-name: rotateOut;
        animation-name: rotateOut
    }

    @-webkit-keyframes rotateOutUpLeft {
        0% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }

        100% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @-moz-keyframes rotateOutUpLeft {
        0% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }

        100% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @-o-keyframes rotateOutUpLeft {
        0% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(0);
            opacity: 1
        }

        100% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @keyframes rotateOutUpLeft {
        0% {
            transform-origin: left bottom;
            transform: rotate(0);
            opacity: 1
        }

        100% {
            transform-origin: left bottom;
            transform: rotate(-90deg);
            opacity: 0
        }
    }

    .rotateOutUpLeft {
        -webkit-animation-name: rotateOutUpLeft;
        -moz-animation-name: rotateOutUpLeft;
        -o-animation-name: rotateOutUpLeft;
        animation-name: rotateOutUpLeft
    }

    @-webkit-keyframes rotateOutDownLeft {
        0% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }

        100% {
            -webkit-transform-origin: left bottom;
            -webkit-transform: rotate(90deg);
            opacity: 0
        }
    }

    @-moz-keyframes rotateOutDownLeft {
        0% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }

        100% {
            -moz-transform-origin: left bottom;
            -moz-transform: rotate(90deg);
            opacity: 0
        }
    }

    @-o-keyframes rotateOutDownLeft {
        0% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(0);
            opacity: 1
        }

        100% {
            -o-transform-origin: left bottom;
            -o-transform: rotate(90deg);
            opacity: 0
        }
    }

    @keyframes rotateOutDownLeft {
        0% {
            transform-origin: left bottom;
            transform: rotate(0);
            opacity: 1
        }

        100% {
            transform-origin: left bottom;
            transform: rotate(90deg);
            opacity: 0
        }
    }

    .rotateOutDownLeft {
        -webkit-animation-name: rotateOutDownLeft;
        -moz-animation-name: rotateOutDownLeft;
        -o-animation-name: rotateOutDownLeft;
        animation-name: rotateOutDownLeft
    }

    @-webkit-keyframes rotateOutUpRight {
        0% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }

        100% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(90deg);
            opacity: 0
        }
    }

    @-moz-keyframes rotateOutUpRight {
        0% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }

        100% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(90deg);
            opacity: 0
        }
    }

    @-o-keyframes rotateOutUpRight {
        0% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(0);
            opacity: 1
        }

        100% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(90deg);
            opacity: 0
        }
    }

    @keyframes rotateOutUpRight {
        0% {
            transform-origin: right bottom;
            transform: rotate(0);
            opacity: 1
        }

        100% {
            transform-origin: right bottom;
            transform: rotate(90deg);
            opacity: 0
        }
    }

    .rotateOutUpRight {
        -webkit-animation-name: rotateOutUpRight;
        -moz-animation-name: rotateOutUpRight;
        -o-animation-name: rotateOutUpRight;
        animation-name: rotateOutUpRight
    }

    @-webkit-keyframes rotateOutDownRight {
        0% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(0);
            opacity: 1
        }

        100% {
            -webkit-transform-origin: right bottom;
            -webkit-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @-moz-keyframes rotateOutDownRight {
        0% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(0);
            opacity: 1
        }

        100% {
            -moz-transform-origin: right bottom;
            -moz-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @-o-keyframes rotateOutDownRight {
        0% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(0);
            opacity: 1
        }

        100% {
            -o-transform-origin: right bottom;
            -o-transform: rotate(-90deg);
            opacity: 0
        }
    }

    @keyframes rotateOutDownRight {
        0% {
            transform-origin: right bottom;
            transform: rotate(0);
            opacity: 1
        }

        100% {
            transform-origin: right bottom;
            transform: rotate(-90deg);
            opacity: 0
        }
    }

    .rotateOutDownRight {
        -webkit-animation-name: rotateOutDownRight;
        -moz-animation-name: rotateOutDownRight;
        -o-animation-name: rotateOutDownRight;
        animation-name: rotateOutDownRight
    }

    @-webkit-keyframes hinge {
        0% {
            -webkit-transform: rotate(0);
            -webkit-transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out
        }

        20%,
        60% {
            -webkit-transform: rotate(80deg);
            -webkit-transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out
        }

        40% {
            -webkit-transform: rotate(60deg);
            -webkit-transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out
        }

        80% {
            -webkit-transform: rotate(60deg) translateY(0);
            opacity: 1;
            -webkit-transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out
        }

        100% {
            -webkit-transform: translateY(700px);
            opacity: 0
        }
    }

    @-moz-keyframes hinge {
        0% {
            -moz-transform: rotate(0);
            -moz-transform-origin: top left;
            -moz-animation-timing-function: ease-in-out
        }

        20%,
        60% {
            -moz-transform: rotate(80deg);
            -moz-transform-origin: top left;
            -moz-animation-timing-function: ease-in-out
        }

        40% {
            -moz-transform: rotate(60deg);
            -moz-transform-origin: top left;
            -moz-animation-timing-function: ease-in-out
        }

        80% {
            -moz-transform: rotate(60deg) translateY(0);
            opacity: 1;
            -moz-transform-origin: top left;
            -moz-animation-timing-function: ease-in-out
        }

        100% {
            -moz-transform: translateY(700px);
            opacity: 0
        }
    }

    @-o-keyframes hinge {
        0% {
            -o-transform: rotate(0);
            -o-transform-origin: top left;
            -o-animation-timing-function: ease-in-out
        }

        20%,
        60% {
            -o-transform: rotate(80deg);
            -o-transform-origin: top left;
            -o-animation-timing-function: ease-in-out
        }

        40% {
            -o-transform: rotate(60deg);
            -o-transform-origin: top left;
            -o-animation-timing-function: ease-in-out
        }

        80% {
            -o-transform: rotate(60deg) translateY(0);
            opacity: 1;
            -o-transform-origin: top left;
            -o-animation-timing-function: ease-in-out
        }

        100% {
            -o-transform: translateY(700px);
            opacity: 0
        }
    }

    @keyframes hinge {
        0% {
            transform: rotate(0);
            transform-origin: top left;
            animation-timing-function: ease-in-out
        }

        20%,
        60% {
            transform: rotate(80deg);
            transform-origin: top left;
            animation-timing-function: ease-in-out
        }

        40% {
            transform: rotate(60deg);
            transform-origin: top left;
            animation-timing-function: ease-in-out
        }

        80% {
            transform: rotate(60deg) translateY(0);
            opacity: 1;
            transform-origin: top left;
            animation-timing-function: ease-in-out
        }

        100% {
            transform: translateY(700px);
            opacity: 0
        }
    }

    .hinge {
        -webkit-animation-name: hinge;
        -moz-animation-name: hinge;
        -o-animation-name: hinge;
        animation-name: hinge
    }

    @-webkit-keyframes rollIn {
        0% {
            opacity: 0;
            -webkit-transform: translateX(-100%) rotate(-120deg)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0px) rotate(0deg)
        }
    }

    @-moz-keyframes rollIn {
        0% {
            opacity: 0;
            -moz-transform: translateX(-100%) rotate(-120deg)
        }

        100% {
            opacity: 1;
            -moz-transform: translateX(0px) rotate(0deg)
        }
    }

    @-o-keyframes rollIn {
        0% {
            opacity: 0;
            -o-transform: translateX(-100%) rotate(-120deg)
        }

        100% {
            opacity: 1;
            -o-transform: translateX(0px) rotate(0deg)
        }
    }

    @keyframes rollIn {
        0% {
            opacity: 0;
            transform: translateX(-100%) rotate(-120deg)
        }

        100% {
            opacity: 1;
            transform: translateX(0px) rotate(0deg)
        }
    }

    .rollIn {
        -webkit-animation-name: rollIn;
        -moz-animation-name: rollIn;
        -o-animation-name: rollIn;
        animation-name: rollIn
    }

    @-webkit-keyframes rollOut {
        0% {
            opacity: 1;
            -webkit-transform: translateX(0px) rotate(0deg)
        }

        100% {
            opacity: 0;
            -webkit-transform: translateX(100%) rotate(120deg)
        }
    }

    @-moz-keyframes rollOut {
        0% {
            opacity: 1;
            -moz-transform: translateX(0px) rotate(0deg)
        }

        100% {
            opacity: 0;
            -moz-transform: translateX(100%) rotate(120deg)
        }
    }

    @-o-keyframes rollOut {
        0% {
            opacity: 1;
            -o-transform: translateX(0px) rotate(0deg)
        }

        100% {
            opacity: 0;
            -o-transform: translateX(100%) rotate(120deg)
        }
    }

    @keyframes rollOut {
        0% {
            opacity: 1;
            transform: translateX(0px) rotate(0deg)
        }

        100% {
            opacity: 0;
            transform: translateX(100%) rotate(120deg)
        }
    }

    .rollOut {
        -webkit-animation-name: rollOut;
        -moz-animation-name: rollOut;
        -o-animation-name: rollOut;
        animation-name: rollOut
    }

    @-webkit-keyframes lightSpeedIn {
        0% {
            -webkit-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }

        60% {
            -webkit-transform: translateX(-20%) skewX(30deg);
            opacity: 1
        }

        80% {
            -webkit-transform: translateX(0%) skewX(-15deg);
            opacity: 1
        }

        100% {
            -webkit-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }
    }

    @-moz-keyframes lightSpeedIn {
        0% {
            -moz-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }

        60% {
            -moz-transform: translateX(-20%) skewX(30deg);
            opacity: 1
        }

        80% {
            -moz-transform: translateX(0%) skewX(-15deg);
            opacity: 1
        }

        100% {
            -moz-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }
    }

    @-o-keyframes lightSpeedIn {
        0% {
            -o-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }

        60% {
            -o-transform: translateX(-20%) skewX(30deg);
            opacity: 1
        }

        80% {
            -o-transform: translateX(0%) skewX(-15deg);
            opacity: 1
        }

        100% {
            -o-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }
    }

    @keyframes lightSpeedIn {
        0% {
            transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }

        60% {
            transform: translateX(-20%) skewX(30deg);
            opacity: 1
        }

        80% {
            transform: translateX(0%) skewX(-15deg);
            opacity: 1
        }

        100% {
            transform: translateX(0%) skewX(0deg);
            opacity: 1
        }
    }

    .lightSpeedIn {
        -webkit-animation-name: lightSpeedIn;
        -moz-animation-name: lightSpeedIn;
        -o-animation-name: lightSpeedIn;
        animation-name: lightSpeedIn;
        -webkit-animation-timing-function: ease-out;
        -moz-animation-timing-function: ease-out;
        -o-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    .animated.lightSpeedIn {
        -webkit-animation-duration: .5s;
        -moz-animation-duration: .5s;
        -o-animation-duration: .5s;
        animation-duration: .5s
    }

    @-webkit-keyframes lightSpeedOut {
        0% {
            -webkit-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }

        100% {
            -webkit-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }
    }

    @-moz-keyframes lightSpeedOut {
        0% {
            -moz-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }

        100% {
            -moz-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }
    }

    @-o-keyframes lightSpeedOut {
        0% {
            -o-transform: translateX(0%) skewX(0deg);
            opacity: 1
        }

        100% {
            -o-transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }
    }

    @keyframes lightSpeedOut {
        0% {
            transform: translateX(0%) skewX(0deg);
            opacity: 1
        }

        100% {
            transform: translateX(100%) skewX(-30deg);
            opacity: 0
        }
    }

    .lightSpeedOut {
        -webkit-animation-name: lightSpeedOut;
        -moz-animation-name: lightSpeedOut;
        -o-animation-name: lightSpeedOut;
        animation-name: lightSpeedOut;
        -webkit-animation-timing-function: ease-in;
        -moz-animation-timing-function: ease-in;
        -o-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    .animated.lightSpeedOut {
        -webkit-animation-duration: .25s;
        -moz-animation-duration: .25s;
        -o-animation-duration: .25s;
        animation-duration: .25s
    }

    @-webkit-keyframes wiggle {
        0% {
            -webkit-transform: skewX(9deg)
        }

        10% {
            -webkit-transform: skewX(-8deg)
        }

        20% {
            -webkit-transform: skewX(7deg)
        }

        30% {
            -webkit-transform: skewX(-6deg)
        }

        40% {
            -webkit-transform: skewX(5deg)
        }

        50% {
            -webkit-transform: skewX(-4deg)
        }

        60% {
            -webkit-transform: skewX(3deg)
        }

        70% {
            -webkit-transform: skewX(-2deg)
        }

        80% {
            -webkit-transform: skewX(1deg)
        }

        90% {
            -webkit-transform: skewX(0deg)
        }

        100% {
            -webkit-transform: skewX(0deg)
        }
    }

    @-moz-keyframes wiggle {
        0% {
            -moz-transform: skewX(9deg)
        }

        10% {
            -moz-transform: skewX(-8deg)
        }

        20% {
            -moz-transform: skewX(7deg)
        }

        30% {
            -moz-transform: skewX(-6deg)
        }

        40% {
            -moz-transform: skewX(5deg)
        }

        50% {
            -moz-transform: skewX(-4deg)
        }

        60% {
            -moz-transform: skewX(3deg)
        }

        70% {
            -moz-transform: skewX(-2deg)
        }

        80% {
            -moz-transform: skewX(1deg)
        }

        90% {
            -moz-transform: skewX(0deg)
        }

        100% {
            -moz-transform: skewX(0deg)
        }
    }

    @-o-keyframes wiggle {
        0% {
            -o-transform: skewX(9deg)
        }

        10% {
            -o-transform: skewX(-8deg)
        }

        20% {
            -o-transform: skewX(7deg)
        }

        30% {
            -o-transform: skewX(-6deg)
        }

        40% {
            -o-transform: skewX(5deg)
        }

        50% {
            -o-transform: skewX(-4deg)
        }

        60% {
            -o-transform: skewX(3deg)
        }

        70% {
            -o-transform: skewX(-2deg)
        }

        80% {
            -o-transform: skewX(1deg)
        }

        90% {
            -o-transform: skewX(0deg)
        }

        100% {
            -o-transform: skewX(0deg)
        }
    }

    @keyframes wiggle {
        0% {
            transform: skewX(9deg)
        }

        10% {
            transform: skewX(-8deg)
        }

        20% {
            transform: skewX(7deg)
        }

        30% {
            transform: skewX(-6deg)
        }

        40% {
            transform: skewX(5deg)
        }

        50% {
            transform: skewX(-4deg)
        }

        60% {
            transform: skewX(3deg)
        }

        70% {
            transform: skewX(-2deg)
        }

        80% {
            transform: skewX(1deg)
        }

        90% {
            transform: skewX(0deg)
        }

        100% {
            transform: skewX(0deg)
        }
    }

    .wiggle {
        -webkit-animation-name: wiggle;
        -moz-animation-name: wiggle;
        -o-animation-name: wiggle;
        animation-name: wiggle;
        -webkit-animation-timing-function: ease-in;
        -moz-animation-timing-function: ease-in;
        -o-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    .animated.wiggle {
        -webkit-animation-duration: .75s;
        -moz-animation-duration: .75s;
        -o-animation-duration: .75s;
        animation-duration: .75s
    }

    .label {
        background: none !important;
        color: #333;
        text-align: left;
        font-size: 14px;
        font-weight: normal;
    }

    .header-items a {
        color: #fff;
    }

    .header-items a:hover {
        color: #1ABC9C;
    }

    .product-block p {
        text-align: center;
        margin-bottom: 0px;
    }

    .product-block .pro-price-del del {
        color: #aaaaaa;
        font-size: 17px;
        font-weight: 500;
        text-decoration: line-through;
    }

    .pro-price {
        font-size: 20px;
        color: #ff0000;
        margin-bottom: 0px;
    }

    .product-block .product-detail {
        padding: 5px 20px;
    }

    .product-block .product-detail h3.pro-name a {
        text-align: center;
        color: #303030;
        font-size: 16px;
        width: 100%;
        float: left;
        font-weight: 600;
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .product-block .product-detail h3.pro-name a:hover {
        color: #1973a5;
    }


    .col-md-4 .col-sm-6 .col-xs-6 .pro-loop {}


    .mask {
        background: rgba(131, 185, 216, 0) !important;
        position: absolute;
        top: 0;
        width: 100%;
        height: 100% !important;
        opacity: 0;
        overflow: visible;
        float: left;
        z-index: 1;
    }

    .product-block .product-img {
        text-align: center;

    }

    .product-block .product-img img {
        max-width: 100%;

    }

    .product-img.image-resize.view.view-third {
        position: relative;
    }

    .mask img {
        width: 50px;
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 600ms;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    .mask:hover img:hover {
        /* transform: rotateZ(360deg); */
    }

    .product-img:hover .mask {
        height: auto;
        cursor: pointer;
        background: rgba(156, 168, 174, 0.47);
        opacity: 1;
    }

    a.btn.btn-readmore {
        background: #666666;
        border: none;
        padding: 0 5px 0px 10px;
        color: #fff;
        border-radius: 3px;
        height: 25px !important;
        position: relative;
        cursor: pointer;
        font-size: 12px;
        line-height: 25px;
        font-weight: bold;
        text-transform: uppercase;
    }

    button.btn-comment {
        background: #53A1CC;
        border: none;
        padding: 0 15px;
        color: #fff;
        text-transform: uppercase;
        border-radius: 3px;
        height: 37px;
        line-height: 39px;
        position: relative;
        cursor: pointer;
    }

    a.btn.btn-readmore:before {
        content: "";
        width: 1px;
        height: 100%;
        border-left: solid #ffffff 1px;
        border-right: solid #ffffff 1px;
        position: absolute;
        right: 18px;
    }

    button.btn-comment:before {
        content: "";
        width: 1px;
        height: 100%;
        border-left: solid #3F8CB8 1px;
        border-right: solid #61B1DD 1px;
        position: absolute;
        right: 37px;
    }

    a.btn.btn-readmore:after {
        content: " ";
        background: url('//hstatic.net/0/0/global/design/theme-default/icon-arr.png') no-repeat center right;
        background-size: 40%;
        width: 17px;
        height: 100%;
        float: right;
        margin-left: 5px;
    }

    button.btn-comment:after {
        content: " ";
        background: url('//hstatic.net/0/0/global/design/theme-default/icon-arr.png') no-repeat center right;
        width: 30px;
        height: 100%;
        float: right;
        margin-left: 10px;
    }

    form#article--comment-form input[type=text],
    #comment_body {
        border: 1px solid #ccc;
        padding: 10px;
        outline: none;
    }

    #layout-page {
        background: #fff;
        border-radius: 4px;
        padding: 0px;
        margin-bottom: 20px;
        box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.1);
        padding-bottom: 18px;
    }

    #layout-page .header-page h1,
    #layout-page .header-page h2 {
        background: #fff;
        border-radius: 5px 5px 0px 0px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .2);
        padding: 10px 15px 10px 15px;
        border-bottom: 1px solid #1973a5;
        content: "";
        text-transform: uppercase;
        color: #1973a5;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .col-md-9 #layout-page {
        padding: 0px;
        padding-bottom: 15px;
    }

    .content-page {
        padding-left: 15px;
        padding-right: 15px;
        border-radius: 4px;
        margin-bottom: 40px;
    }

    /******************* SCROLL TO TOP *********************/
    .scrollToTop {
        border-radius: 3px;
        width: 45px;
        height: 45px;
        padding: 9px;
        text-align: center;
        background: whiteSmoke;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
        position: fixed;
        bottom: 42px;
        right: 5px;
        display: none;
        background: #1973a5;
        -webkit-transition: all 0.5s linear;
        transition: all 0.5s linear;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
    }

    .scrollToTop:hover {
        text-decoration: none;
        color: #fff;
        background: #1973a5;
    }

    .cloudzoom-blank>div:last-child {
        opacity: 0 !important;
        height: 0px !important;
        width: 0px !important;
    }

    /*************** ICON INFO ******************/
    .body-content .icon-hrv {
        background: url('data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpBNTg4QjI3OThCMThFMzExQkNDRUQ5RTc4RjM4N0M5NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBMTYwMUY5RUIxMUMxMUU0QUI1REU3QUVBNTdDNzYxOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBMTYwMUY5REIxMUMxMUU0QUI1REU3QUVBNTdDNzYxOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNzlDN0MwQjRBREU0MTFBRjZBOUMzRjlGODgxRTMzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkE1ODhCMjc5OEIxOEUzMTFCQ0NFRDlFNzhGMzg3Qzk0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+nGFa6gAAAMhJREFUeNpiDF54hgENiADxLCB2g/J3AXEaEL9BVsTCgAlAmgKR+DB2ELIiJjRNHEDsi8UwX6gcTo1iOFzBApXDqfEjEP/DohEk9p6Qxj1YNILEPuPTCAKZQPwIif8YiLOwuR0ZsAGxNhCbALETVGwfEJtBDfiFbiMjEMcC8XUg3gTE54HYExoVIPYWqFwsVC3cxgIg7kOyWRqI49FcowTEi6AJpJ8JqrmAgXgAUsvCBE0RciRoBKkNYiLRNritII3CZGgUAggwAHAVIEoK/YZJAAAAAElFTkSuQmCC') no-repeat;
    }

    .body-content .icon-hot {
        background: url('data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAOCAYAAAAWo42rAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpBNTg4QjI3OThCMThFMzExQkNDRUQ5RTc4RjM4N0M5NCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowQkY1Nzc5NEIxMUQxMUU0QjZCMDlEQjQ0MkEwNzBEOCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowQkY1Nzc5M0IxMUQxMUU0QjZCMDlEQjQ0MkEwNzBEOCIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkEzNzlDN0MwQjRBREU0MTFBRjZBOUMzRjlGODgxRTMzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkE1ODhCMjc5OEIxOEUzMTFCQ0NFRDlFNzhGMzg3Qzk0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+WwIFrgAAAIpJREFUeNpiDF54hgEIcoGYHUr3YGH3sACJA0CsAsTMQCwBxOVY2J4ghfYMqEAaC1uCiYFIwAKl/wHxRxxqBEEEzMS5QKyMA29ANlETiNNwmKiMbCIXDkWMQMyJbOJZIO7EodAUFHwwhdrQMMMGVJFNZIf5DgvgQFZoDMU4AdEBDlL4gQh1bwECDACmMxGMc6pqBQAAAABJRU5ErkJggg==') no-repeat;
    }


    .button-default {
        background: #1973a5;
        border: none;
        padding: 0 20px;
        color: #fff;
        font-size: 16px;
        border-radius: 3px;
        float: right;
        height: 45px;
        line-height: 45px;
        position: relative;
        cursor: pointer;
        margin: 7px;
    }

    .button-default:before {
        content: "";
        width: 1px;
        height: 100%;
        border-left: solid #1973a5 1px;
        border-right: solid #ddd 1px;
        position: absolute;
        right: 45px;
    }

    .button-default:after {
        content: "";
        background: url(//hstatic.net/0/0/global/design/theme-default/icon-arr.png) no-repeat center right;
        width: 30px;
        height: 100%;
        float: right;
        margin-left: 10px;
    }

    .counter-content embed {
        width: 100%;
    }

    .checkout-buttons textarea {
        border-radius: 4px;
        height: 70px;
        border-color: #DDD7D7;
        margin-top: 3px;
    }

    .inner-right .checkout-buttons {
        margin-top: 15px;
    }

    #cartformpage .remove a {
        color: #333;
        margin-right: 20px;
    }

    #cartformpage .remove a.cart:hover {
        color: #53a1cc;
    }

    #cartformpage img {
        max-width: 50px;
    }

    #cartformpage th {
        padding-bottom: 20px;
    }

    #cartformpage td {
        padding: 5px;
    }

    .cart-buttons {
        margin-top: 30px;
    }

    .face-content * {
        max-width: 100%;
    }

    .input-group-addon {
        color: #DFDEDE;
        background-color: #F8F8F8 !important;
        border-color: #E7E7E7;
    }

    .form-control {
        border-color: #E7E7E7;
    }

    .input-group {
        margin: 10px 0px;
    }

    .input-group input,
    .input-group select,
    .input-group textarea {
        color: #000 !imoprtant;
    }

    label.sale-lb {
        font-size: 60%;
    }

    div#customer_sidebar p {
        margin-bottom: 5px;
    }

    a.btn.btn-readmore:hover,
    .action_bottom .btn:hover,
    .btn.btn-comment:hover {
        background: #1973a5;
        color: #fff;
    }

    .buttons .button-default:hover {
        background: #1973a5;
        color: #fff;
    }

    #user-icon a:hover {
        color: #f4f4f4;
    }

    .footer-link {
        margin-bottom: 8px;
    }

    checkout-buttons.clearfix * {
        vertical-align: top;
    }

    td.item-title span {
        color: #000;
    }

    td.item-image {
        width: 170px;
        text-align: center;
    }

    .comment_form .btn-primary {
        padding: 10px 40px;
        font-weight: bold;
        border-radius: 4px;
    }

    #binhluan .date {
        float: right;
        color: #aaa;
        font-size: 12px;
    }

    #binhluan {
        margin-bottom: 20px;
    }

    #binhluan border-bottom {
        border-bottom: 1px solid #dddddd;
        margin: 20px 0px;
    }

    .comment div {
        margin-bottom: 20px;
        color: #aaa;
    }

    #comments input,
    #comments textarea {
        border-radius: 4px
    }

    #binhluan .border-bottom:last-child {
        border-bottom: none;
    }

    #comments small {
        color: #B5B5B5;
    }

    #footer-info .footer-link span {
        color: #656565;
        padding: 13px;
    }

    button[disabled],
    html input[disabled] {
        cursor: default;
        opacity: 0.4;
    }

    @media (min-width:768px) {
        .article-content {
            border-left: 1px solid #1973a5;
        }
    }

    .come-back {
        color: #1973a5;
    }

    ol.breadcrumb .active {
        text-indent: 20px;
    }

    ol.breadcrumb .active>span {
        margin-left: -40px;
    }

    a.logout {
        color: #FF6517;
        text-transform: none;
        font-size: 16px;
        margin-left: 10px;
        line-height: 27px;
    }

    span.default_address.note {
        float: left;
    }

    .view_address,
    .address_actions {
        float: left;
        width: 100%;
    }

    .address_table {
        display: table;
        border-bottom: 1px solid #ccc;
    }

    .blog-breadcrumb {
        width: calc(100% + 15px);
        margin-left: -15px;
    }

    .banner-sidebar img {
        width: 100%;
    }

    .banner,
    .banner-sidebar {
        float: left;
    }

    /*------------------- LOGO -------------------*/
    .logo a img,
    .logo h1 a {
        display: block;
    }

    .logo a img,
    .logo h1 a:hover {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .logo h1 {
        text-align: left;
    }


    .logo {
        padding: 10px 0;
    }

    .logo h1 {
        margin: 0;
        border: 0;
    }

    .logo h1 a {
        word-break: break-all;
        text-decoration: none;
        font-size: 32px;
        line-height: 32px;
        color: #333333;
        margin: 0;
        padding: 0;
        border: 0;
    }

    .logo h1 a:hover {
        text-decoration: none;
        color: #333333;
    }

    .logo a,
    .logo img {
        display: block;
        margin: 0;
    }

    .glyphicon {
        margin-right: 10px !important;
    }

    /*-------------------COntent------------------------*/
    .main-content .list-group-item {
        margin-bottom: 30px;
    }

    .product {
        border: 1px solid #ddd;
        margin-bottom: 30px;
    }

    .end {
        margin-right: 0;
    }

    .product img {
        margin: 5%;
        min-width: 90%;
        max-width: 90%;
    }

    .product .product-detail {
        margin: 15px auto 10px auto;
        width: 90%;
    }

    .product .product-detail h3 a {
        color: #0383C5;
        min-height: 41px;
        max-height: 41px;
        overflow: hidden;
        font-size: 16px;
        display: block;
        cursor: pointer;
        white-space: inherit;
    }

    .product .product-detail span.price-del {
        color: #f71b3a;
        font-size: 16px;
        font-weight: 500;
        text-decoration: line-through;
    }

    .product .product-detail span.price {
        color: #f71b3a;
        font-size: 16px;
        font-weight: 500;
    }

    img {
        max-width: 100%;
    }


    .custom-dropdown {
        margin-top: 5px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        border: 1px solid rgba(0, 0, 0, .1);
        max-width: 100%;
        overflow: hidden;
        margin-left: 2px;
        border-radius: 5px;
    }

    .browse-tags .custom-dropdown {
        width: 180px;
        margin-top: 0px;
        margin-bottom: 10px;
    }

    .custom-dropdown::before {
        width: 2em;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: 0 3px 3px 0;
    }

    .custom-dropdown::before,
    .custom-dropdown::after {
        content: "";
        position: absolute;
        pointer-events: none;
    }

    .custom-dropdown--white::before {
        background-color: #fff;
        border-left: 1px solid rgba(0, 0, 0, .1);
    }

    .custom-dropdown__select {
        font-size: inherit;
        padding: .5em;
        margin: 0;
        width: 100%;
    }

    .custom-dropdown__select--white {
        background-color: #fff;
        color: #444;
    }

    .custom-dropdown__select {
        padding-right: 2.5em;
        border: 0;
        border-radius: 3px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
    }

    .custom-dropdown::after {
        content: "\25BC";
        height: 1em;
        font-size: .625em;
        line-height: 1;
        right: 1.2em;
        top: 50%;
        margin-top: -.5em;
    }

    .custom-dropdown--white::after {
        color: rgba(0, 0, 0, .9);
    }

    .product-pages .breadcrumb {
        margin-bottom: 30px;
    }

    /** breadcrumb **/
    nav.breadcrumbs {
        height: 36px;
        padding: 0;
        line-height: 36px;
        list-style: none;
        margin-bottom: 10px;


    }

    nav.breadcrumbs a,
    .breadcrumbs .divider {

        color: #444444;
    }

    nav.breadcrumbs span {
        color: #53a1cc;
    }

    .product-list .product-sale {
        position: absolute;
        top: 11px;
        right: -3px;
    }

    .product-list .product-sale span {
        position: absolute;
        top: 5px;
        right: 3px;
        color: #fff;
        font-size: 16px;
    }

    .content-list img {
        max-width: 100%;
    }

    .product-sale img {
        height: 30px;
    }

    .title-line h3 {
        color: #1973a5;
        text-transform: uppercase;
        font-size: 18px;
    }

    .product-list {
        clear: both;
    }

    .title-line {
        display: block;
        text-align: center;
        margin-bottom: 0;
        position: relative;
    }

    .title-line:before {
        display: table;
        content: "";
        border-top: 1px solid #1973a5;
        width: 100%;
        position: absolute;
        top: 13px;
    }

    .title-line h3 {
        display: inline-block;
        background: #fff;
        padding: 0px 15px;
        white-space: nowrap;
        position: relative;
        z-index: 1;
    }

    .product-list .pull-center {
        text-align: center;
        margin-bottom: 25px;
    }

    .content-product-list .product-block {
        float: left;
        width: 100%;
        border: none;
        margin-bottom: 30px;
        background: #fff;
        border-radius: 4px;
        -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 1px 0px 9px 5px rgba(0, 0, 0, 0.1);
        box-shadow: 3px -1px -1px 1px rgba(0, 0, 0, 0.1);
    }

    .product-block .product img {
        margin: 5%;
        min-width: 90%;
        max-width: 90%;
    }

    .product-list .product-block .product-detail {
        margin: 15px auto 10px auto;
        width: 100%;
        padding: 10px;
    }

    .product-list.product .product-detail h3 a {
        color: #303030 !important;
        min-height: 41px;
        max-height: 41px;
        overflow: hidden;
        font-size: 16px;
        display: block;
        cursor: pointer;
    }

    .content-product-list.product .product-detail span.pro-price {
        color: #ff6517 !important;
        font-size: 15px;
        font-weight: 500;
    }

    .product-block .product-img>img {
        border-radius: 4px;
    }

    .product-thumb {
        width: 50px;
    }

    #footer-info {
        background: #444444;
        clear: both;
        float: left;
        margin-top: 30px;
        padding: 18px 0 0 0;
        width: 100%;
        text-align: center;
    }

    #footer-info p {
        color: #fff;
    }

    #footer-info h5 {
        color: #CCC;
    }

    #footer-info a {
        color: ;
    }

    #footer-info hr {
        width: 80%;
        border: 1px solid #3B3939;
        border-bottom: 1px solid #5D5A5A;
        border-top: 1px solid #3B3939;
        margin-left: auto;
        margin-right: auto;
    }

    #footer-info h5 p {
        color: #CACACA;
    }

    #footer-info h5 p a {
        color: #2974A3;
    }

    .footer-link span,
    .footer-link a {
        color: #fff;
    }

    .userbox {
        max-width: 100%;
        width: 335px;
        padding: 15px;
        background-color: #fff;
        -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin: auto;
        margin-bottom: 20px;
    }

    .userbox h2 {
        color: #75828C;
        font-size: 16px;
        margin-top: 0;
        display: inline;
    }

    .icon-field {
        display: inline-block !important;
        background-color: #F8F8F8 !important;
        color: white;
        border: solid 1px #E7E7E7;
        text-align: center;
        height: 37px;
        vertical-align: middle;
        line-height: 33px;
        width: 35px;
        margin-top: 10px;
        margin-bottom: 2px;
        float: left;
    }

    .icon-login {
        display: inline;
        width: auto;
        height: auto;
        line-height: normal;
        vertical-align: baseline;
        background-image: none;
        background-position: 0% 0%;
        background-repeat: repeat;
        margin-top: 0;
    }

    .icon-envelope:after {
        content: url(//hstatic.net/0/0/global/design/theme-default/email.png);
    }

    .icon-user:after {
        content: url(//hstatic.net/0/0/global/design/theme-default/userico.png);
    }

    .userbox input[type=email],
    .userbox input[type=password],
    .userbox input[type=text] {
        max-width: calc(100% - 30px) !important;
        width: 270px !important;
        height: 37px;
        display: inline-block !important;
        background-color: #fff;
        border: solid 1px #E7E7E7;
        margin-left: -5px;
        margin-top: 10px;
        float: left;
        padding-left: 10px;
        outline: none;
        margin-bottom: 0px !important;
    }

    .icon-shield:after {
        content: url(//hstatic.net/0/0/global/design/theme-default/pass.png);
        margin-top: 8px;
        display: block;
    }

    .action_bottom .btn {
        font-size: 14px;
        font-weight: 600;
        color: white;
        display: inline-block;
        text-decoration: none;
        width: 100%;
        height: 35px;
        background: #1973a5;
        text-align: center;
        border: none;
        margin-top: 15px;
    }

    #customer-login .action_bottom {
        margin-top: 0px;
    }

    .req_pass {
        margin-top: 10px;
    }

    .req_pass a {
        color: #000000 !important;
    }

    .req_pass a:hover {
        color: #000000 !important;
    }

    div#recover-password h2 {
        color: #4091BD;
        font-weight: bold;
        text-align: center;
        width: 100%;
        float: left;
        border-bottom: 1px solid;
    }

    li.user {
        color: #fff;
        font-size: 18px !important;
    }

    li.user a:not(.fa) {
        font-size: 18px !important;
        font-weight: bold;
        line-height: 50px;
    }

    hr.line-blog {
        border: 0;
        border-top: 1px solid #eee;
        width: calc(100% - 30px);
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #FFFFFF;
        margin-bottom: 25px;
        margin: auto;
    }

    hr.line-blog:last-child {
        display: none;
    }

    .news-content {
        margin: 15px 0px;
        float: left;
        width: 100%;
    }

    .p0 {
        padding: 0px;
    }

    .blog-content .articles:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .blog-content .breadcrumb {
        background-color: #f3f3f3;
        font-size: 12px;
        padding-left: 0px;
        padding-bottom: 0px;

    }

    #blog-container .header-page h2 {
        margin-bottom: 0px;
    }

    .img-article img {
        border: 1px solid #ccc;
        margin-left: -15px;
        margin-right: -15px;
        max-width: calc(100% + 30px);
    }

    .news-content h2.title-article a {
        font-size: 22px;
        white-space: inherit;
    }

    .news-content .more-act a {
        color: #53a1cc;
        text-decoration: underline;
        padding-left: 15px;
    }

    .news-content .body-content p {
        margin-bottom: 16px;
        text-align: justify;
    }

    .news-content .col-md-2 {
        /*padding:0px;*/
    }

    .news-content .readmore {
        color: #000000;
        text-decoration: underline;
        float: right;
    }

    .news-content .readmore:hover {
        color: #000000;
    }

    .body-content ul {
        float: left;
        width: 100%;
    }

    .body-content .info-more li {
        position: relative;
        padding-left: 20px;
        display: inline-block;
    }

    .body-content .info-more li:last-child {}

    .body-content .info-more i {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 20px;
        text-align: center;

    }

    .body-content .info-more a {
        color: #808080;
        text-decoration: none;
        font-style: italic;
        font-size: 14px;
    }

    .icon-hot {
        display: inline-block;
        margin: 2px 7px 0 0;
        min-height: 15px;
        width: 16px;
    }

    .icon-hrv {
        display: inline-block;
        margin: 2px 7px 0 0;
        min-height: 15px;
        width: 16px;

    }

    /*****************************/

    .news-content .img-responsive {
        margin: auto;
        border-radius: 2px;
    }

    h2.comment-title {
        border-bottom: 1px solid #53A1CC;
    }

    #article .comment,
    #article .comment_form label {
        clear: both;
    }

    #page .page-intro {
        background: #fff;
        border-radius: 4px;
    }

    #page .page-intro .header-intro h1 {
        background: #fff;
        border-radius: 5px 5px 0px 0px;
        box-shadow: 0 0 2px rgba(0, 0, 0, .2);
        padding: 25px 15px 7px 15px;
        border-bottom: 1px solid #53a1cc;
        content: "";
        text-transform: uppercase;
        color: #53a1cc;
        font-size: 18px;
    }

    #page .col-md-9 {
        padding: 0px;
    }

    #page .content-page {
        padding-left: 15px;
        padding-right: 15px;
    }

    div#pagination {
        background: #fff;
        box-shadow: 1px 1px 2px #ccc;
        border-radius: 5px;
        width: 100%;
        float: left;
        margin-bottom: 20px;
    }

    .blog-content div#pagination {
        margin-left: -15px;
        margin-right: -15px;
        width: calc(100% + 30px);
    }

    div#pagination .prev,
    div#pagination .next {
        color: #828282;
        padding: 14px 0px;
        font-size: 22px;
        position: relative;
    }

    div#pagination .fa:before {
        font-size: 27px;
        position: absolute;
    }

    div#pagination .prev span,
    div#pagination .next span {
        font-size: 12px;
        text-transform: uppercase;
        padding: 0px 5px 0px 20px;
        white-space: nowrap;
        line-height: 29px;
    }

    div#pagination .next:before {
        right: 0px;
    }

    div#pagination .next span {
        padding: 0px 20px 0px 0px;
        text-align: right;
    }

    div#pagination a.page-node,
    div#pagination span.page-node {
        font-size: 15px;
        color: #828282;
        padding: 0px 10px;
        height: 57px;
        display: inline-block;
        line-height: 56px;
    }

    div#pagination a.page-node:hover,
    div#pagination span.page-node.current {
        border-bottom: 2px solid #1973a5;
        color: #1973a5;
        font-weight: bold;
    }

    div#pagination .prev:hover,
    div#pagination .next:hover {
        color: #53A1CC;
    }

    .news-menu.list-group {
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        padding-bottom: 1px;
        background: #fff;
    }

    .news-menu .list-group-item.active,
    .news-menu .list-group-item.active:hover,
    .news-menu .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #1973a5;
        border-color: #1973a5;
    }

    .news-menu .list-group-item {
        position: relative;
        display: block;
        padding: 15px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 12px 15px;
    }

    .news-menu .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .news-menu .article {
        margin: 20px;
    }

    .news-menu .tags {
        margin: 20px 15px;
    }

    .news-menu .article a {
        display: block;
        white-space: pre-line;
    }

    .element.style {}

    .news-menu .nav>li:last-of-type a {
        border-bottom: none;
    }

    .news-menu .nav>li {
        padding: 0px;
    }

    .news-menu .nav>li>a {
        color: #000000;
        border-left: 4px solid transparent;
    }

    .news-menu .sidebar li:hover>a,
    .news-menu .sidebar li.active>a {
        background: #fff;
        border-left: 4px solid #1973a5;
        color: #000000;
    }

    .news-menu .nav>li a {
        border-bottom: 1px solid #ddd;
    }

    .news-menu .sidebar li.active a,
    .news-menu .sidebar li.active {
        background: #f9f9f9;
        color: #000000;
    }

    .list-group {
        clear: both;
        background: #fff;
    }

    .list-group-item {
        background-color: #1973a5 !important;
        border-color: #1973a5 !important;
    }

    .list-group .list-group-item.active {
        background-color: #1973a5 !important;
        text-align: center;
    }

    .nav.sidebar#cssmenu>li.item.last>a {
        border-bottom: none;
    }

    .nav.sidebar#cssmenu ul li a {
        margin-left: 20px;
        border-bottom: 1px solid #ddd;
        padding-left: 0;
    }

    .sidebar#cssmenu li a {
        color: #777;
        display: block;
    }

    .sidebar#cssmenu .children>li {
        padding: 0px !important;
    }

    .nav.sidebar#cssmenu>li.item.has-sub:hover a {
        border-left: 4px solid transparent !important;
    }

    .nav.sidebar#cssmenu>li.item>a {
        border-bottom: 1px solid #ddd;
    }

    span.sign {
        right: 0;
        position: absolute;
        padding-right: 10px;
    }

    ------------------------------- .nav.sidebar #cssmenu ul li a:hover {
        text-decoration: none;
    }

    .nav.sidebar#cssmenu>li>a {
        padding: 12px 16px !important;
    }

    .nav.sidebar#cssmenu>li>a:hover,
    .nav.sidebar#cssmenu>li.item ul li a:hover {
        background: #fff;
    }

    .nav .sidebar #cssmenu>ul>li.active {
        border-bottom: 1px dotted #cacaca;
        background: #f9f9f9;
    }

    .nav.sidebar#cssmenu>li.item>a,
    .nav.sidebar#cssmenu>li.item a,
    .nav.sidebar#cssmenu>li.item ul li {
        color: #303030;
        border-left: 4px solid transparent;
        font-size: 16px;
        padding: 14px 16px;
    }

    .nav.sidebar#cssmenu>li.item:hover>a,
    .nav.sidebar#cssmenu>li.item:focus a,
    .nav.sidebar#cssmenu>li.item ul li:hover {
        border-left: 4px solid #1973a5;
        color: #1973a5;
        background: #f9f9f9;
    }

    .nav.sidebar#cssmenu li.current.active a {
        color: #1973a5;
        background: #54bcd5;
    }

    .nav.sidebar#cssmenu li.current.active {
        background: #f9f9f9;

    }

    .nav .sidebar #cssmenu>ul>li.has-sub>a span {
        font-weight: normal;
    }

    .list-group #cssmenu>.has-sub>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .nav .sidebar #cssmenu>ul>li.has-sub>a span:after {
        float: right;
        content: "\f107";
        font-size: 18px;
        display: inline-block;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        margin-left: 30px;
        -webkit-transition: all 200ms linear;
        -moz-transition: all 200ms linear;
        -o-transition: all 200ms linear;
        -ms-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .nav .sidebar #cssmenu>ul>li.has-sub>ul>li>a:before {
        content: "\f105";
        font-size: 18px;
        display: inline-block;
        font-family: FontAwesome;
        font-weight: normal;
        left: 0px;
        top: 0px;
    }

    .nav .sidebar #cssmenu>ul>li.has-sub>ul>li>a span {
        padding: 0px 0px 0px 5px;
    }


    /* Sub menu */
    .nav .sidebar #cssmenu ul ul {
        display: none;
    }

    /*************************/

    .mini-submenu {
        display: none;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid rgba(0, 0, 0, 0.9);
        border-radius: 4px;
        padding: 9px;
        /*position: relative;*/
        width: 42px;

    }

    .mini-submenu:hover {
        cursor: pointer;
    }

    .mini-submenu .icon-bar {
        border-radius: 1px;
        display: block;
        height: 2px;
        width: 22px;
        margin-top: 3px;
    }

    .mini-submenu .icon-bar {
        background-color: #000;
    }

    #slide-submenu {
        background: rgba(0, 0, 0, 0.45);
        display: inline-block;
        padding: 0 8px;
        border-radius: 4px;
        cursor: pointer;
    }

    /* =================== */
    /*     Slider     */
    /* =================== */
    /* 6.1 - FancyBox */
    #fancybox-loading {
        position: fixed;
        top: 50%;
        left: 50%;
        height: 40px;
        width: 40px;
        margin-top: -20px;
        margin-left: -20px;
        cursor: pointer;
        overflow: hidden;
        z-index: 1104;
        display: none
    }

    * html #fancybox-loading {
        position: absolute;
        margin-top: 0
    }

    #fancybox-loading div {
        position: absolute;
        top: 0;
        left: 0;
        width: 40px;
        height: 480px;
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png')
    }

    #fancybox-overlay {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: #000;
        z-index: 999999;
        display: none
    }

    * html #fancybox-overlay {
        position: absolute;
        width: 100%
    }

    #fancybox-tmp {
        padding: 0;
        margin: 0;
        border: 0;
        overflow: auto;
        display: none
    }

    #fancybox-wrap {
        position: absolute;
        top: 0;
        left: 0;
        margin: 0;
        padding: 20px;
        z-index: 999999;
        display: none
    }

    #fancybox-outer {
        position: relative;
        width: 100%;
        height: 100%;
        background: #FFF;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        -moz-box-shadow: 0 0 20px rgba(0, 0, 0, 0.4)
    }

    #fancybox-inner {
        position: absolute;
        top: 0;
        left: 0;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: 0;
        outline: 0;
        overflow: hidden
    }

    #fancybox-hide-sel-frame {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: transparent
    }

    #fancybox-close {
        position: absolute;
        top: -15px;
        right: -15px;
        width: 30px;
        height: 30px;
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png');
        background-position: -40px 0;
        cursor: pointer;
        z-index: 1103;
        display: none
    }

    #fancybox_error {
        color: #444;
        font: normal 12px/20px Arial;
        padding: 7px;
        margin: 0
    }

    #fancybox-content {
        height: auto;
        width: auto;
        padding: 0;
        margin: 0
    }

    #fancybox-img {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        border: 0;
        outline: 0;
        line-height: 0;
        vertical-align: top;
        -ms-interpolation-mode: bicubic
    }

    #fancybox-frame {
        position: relative;
        width: 100%;
        height: 100%;
        border: 0;
        display: block
    }

    #fancybox-title {
        position: absolute;
        bottom: 0;
        left: 0;
        font-family: Arial;
        font-size: 12px;
        z-index: 1102
    }

    .fancybox-title-inside {
        padding: 10px 0;
        text-align: center;
        color: #333
    }

    .fancybox-title-outside {
        padding-top: 5px;
        color: #FFF;
        text-align: center;
        font-weight: bold
    }

    .fancybox-title-over {
        color: #FFF;
        text-align: left
    }

    #fancybox-title-wrap {
        display: inline-block
    }

    #fancybox-title-wrap span {
        height: 32px;
        float: left
    }

    #fancybox-title-left {
        padding-left: 15px;
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png');
        background-position: -40px -90px;
        background-repeat: no-repeat
    }

    #fancybox-title-main {
        font-weight: bold;
        line-height: 29px;
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox-x.png');
        background-position: 0 -40px;
        color: #FFF
    }

    #fancybox-title-right {
        padding-left: 15px;
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png');
        background-position: -55px -90px;
        background-repeat: no-repeat
    }

    #fancybox-left,
    #fancybox-right {
        position: absolute;
        bottom: 0;
        height: 100%;
        width: 35%;
        cursor: pointer;
        outline: 0;
        z-index: 1102;
        display: none
    }

    #fancybox-left {
        left: 0
    }

    #fancybox-right {
        right: 0
    }

    #fancybox-left-ico,
    #fancybox-right-ico {
        position: absolute;
        top: 50%;
        left: -9999px;
        width: 30px;
        height: 30px;
        margin-top: -15px;
        cursor: pointer;
        z-index: 1102;
        display: block
    }

    #fancybox-left-ico {
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png');
        background-position: -40px -30px
    }

    #fancybox-right-ico {
        background-image: url('//hstatic.net/0/0/global/design/theme-default/fancybox.png');
        background-position: -40px -60px
    }

    #fancybox-left:hover,
    #fancybox-right:hover {
        visibility: visible
    }

    #fancybox-left:hover span {
        left: 20px
    }

    #fancybox-right:hover span {
        left: auto;
        right: 20px
    }

    /* 6.2 - FlexSlider */
    .flex-container a:active,
    .flexslider a:active,
    .flex-container a:focus,
    .flexslider a:focus {
        outline: none;
    }

    .slides,
    .flex-control-nav,
    .flex-direction-nav {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .flexslider {
        width: 100%;
        border: none;
    }

    .flexslider .slides>li {
        display: none;
        -webkit-backface-visibility: hidden;
        margin-bottom: 0px !important;
    }

    /* Hide the slides before the JS is loaded. Avoids image jumping */
    .flexslider .slides img {
        max-width: 100%;
        display: inline-block;
    }



    .flex-pauseplay span {
        text-transform: capitalize;
    }

    .slides:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0;
    }

    html[xmlns] .slides {
        display: block;
    }

    * html .slides {
        height: 1%;
    }

    .no-js .slides>li:first-child {
        display: block;
    }

    .flexslider {
        background: #fff;
        position: relative;
        zoom: 1;
    }

    .flexslider .slides {
        zoom: 1;
    }

    .flexslider .slides>li {
        position: relative;
    }

    .flex-container {
        zoom: 1;
        position: relative;
    }

    .flex-caption {
        background: none;
        -ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000, endColorstr=#4C000000);
        zoom: 1;
    }

    .flex-caption {
        width: 96%;
        padding: 2%;
        margin: 0;
        position: absolute;
        left: 0;
        bottom: 0;
        background: rgba(0, 0, 0, .8);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, .8);
        font-size: 14px;
        line-height: 18px;
    }

    .flex-direction-nav li {
        margin-bottom: 0;
    }

    .flex-direction-nav li a {
        width: 32px;
        height: 32px;
        display: block;
        background: url('//hstatic.net/0/0/global/design/theme-default/slide-arrow.png') no-repeat;
        position: absolute;
        top: calc(50% - 16px);
        cursor: pointer;
        text-indent: -999em;
        border-radius: 50%;
        opacity: 0;

    }

    .flex-direction-nav li .flex-disabled {
        display: none;
        filter: alpha(opacity=30);
        cursor: default;
    }

    #sliderproduct:hover .flex-direction-nav li a,
    #p-sliderproduct:hover .flex-direction-nav li a {
        opacity: 0.7;
    }

    #sliderproduct:hover .flex-direction-nav li a:hover,
    #p-sliderproduct:hover .flex-direction-nav li a:hover {
        opacity: 1;
    }

    /* Dark Direction Nav */
    .flex-direction-nav li .prev {
        left: 20px;
        background-position: 0 0;
    }

    .flex-direction-nav li .next {
        right: 20px;
        background-position: -252px 0;
    }

    .flex-direction-nav li .prev:hover {
        background-position: 0 -50px;
    }

    .flex-direction-nav li .next:hover {
        background-position: -252px -50px;
    }

    .flex-controls {
        filter: alpha(opacity=90);
    }

    .slides a:hover {
        opacity: 1;
    }

    .slider-default.col-md-12 {
        padding: 0px;
    }

    .zoomWrapper {
        position: relative;
        text-align: center;
        width: 100% !important;
    }

    .zoomWrapper img {
        max-width: 100%;
        max-height: 100%;
        position: relative !important;
    }

    .flexslider .slides>li {
        display: block !important;
    }

    body {
        background: #fff;
        overflow: auto !important;
    }

    li {
        list-style: none;
    }

    #p-sliderproduct .owl-next,
    #p-sliderproduct .owl-prev {
        width: 32px;
        height: 32px;
        display: block;
        position: absolute;
        top: calc(50% - 16px);
        cursor: pointer;
        text-indent: -999em;
        border-radius: 50%;
        opacity: 0;
    }

    #p-sliderproduct .owl-item .item {
        margin: 0px 3px;
        border: 1px solid #ddd;
        padding: 2px;
    }

    #p-sliderproduct .owl-prev {
        left: -38px !important;
        background: url(//theme.hstatic.net/1000162838/1000469515/14/quick_icon_prev.png?v=657) no-repeat;
    }

    #p-sliderproduct .owl-next {
        right: -35px !important;
        background: url(//theme.hstatic.net/1000162838/1000469515/14/quick_icon_next.png?v=657) no-repeat;
    }

    #p-sliderproduct:hover .owl-next,
    #p-sliderproduct:hover .owl-prev {
        opacity: 1;
    }

    /* header */
    #menu-top {}

    /* end header */


    /* product detail */
    #wrapper-detail {
        background: white;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        padding: 10px;
    }

    .product-title h1 {
        margin-top: 20px;
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 0px;
        text-transform: capitalize;
    }

    #pro_sku {
        font-size: 14px;
        color: #303030;
        padding-left: 2px;
    }

    .product-price {
        border-bottom: 1px solid #ccc;
        padding-bottom: 12px;
        margin-top: 10px;
    }

    .product-price span {
        font-size: 24px;
        color: red;
        margin-right: 25px;
    }

    .product-description-wrapper {
        overflow-x: auto;
    }

    .product-description-wrapper * {
        max-width: 100%;
    }

    .product-price del {
        font-size: 20px;
        color: #aaaaaa;
    }

    .product-sale {
        position: absolute;
        top: 15px;
        right: 30px;
        z-index: 1;
    }

    .product-sale span {
        position: absolute;
        top: 6px;
        right: 2px;
        color: white;
        font-size: 16px;
        font-weight: bold;
        white-space: nowrap;
    }

    #quantity {
        text-indent: 10px;
        height: 35px;
        border: 1px solid #ccc;
        max-width: 100%;
        border-radius: 5px;
    }

    .btn-detail {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        border-radius: 3px;
        height: 50px;
        line-height: 47px;
        position: relative;
        cursor: pointer;
        font-weight: bold;
    }


    .btn-color-buy:after {
        background: url(//hstatic.net/0/0/global/design/theme-default/check.png) no-repeat center center;

    }

    .btn-color-add:after {
        background: url(//hstatic.net/0/0/global/design/theme-default/cart.png) no-repeat center center;
    }

    .btn-color-add {
        background: #3daf2c;
        width: 100%;
        margin: 10px 0px;
    }

    .btn-color-buy {
        background: #ff7b00;
        cursor: pointer;
        width: 100%;
        margin: 10px 0px;
    }

    .product-comment .nav-tabs {
        border: none;
    }

    .product-comment .nav {
        border-bottom: 1px solid #1973a5;
    }

    .product-comment li {
        float: left;

    }

    .product-comment li :first-child {
        padding-left: 0px;
    }

    .product-comment li a {
        font-size: 16px;
        font-weight: 500;
        color: #1973a5;
        text-align: center;
    }

    .product-comment #mota {
        padding: 10px;
    }

    .product-comment #mota:after {
        left: 9%;
    }

    .product-comment #binhluan:after {
        left: 26%;
    }

    .product-comment #like:after {
        left: 44%;
    }

    .notice {
        margin-bottom: 20px;
        color: #737373;
    }

    .nav>li>a:hover,
    .nav>li>a:focus {
        background: none;
    }

    .tab-pane {
        padding: 10px;
    }

    .title-bl>h2,
    .title-like>h2 {
        color: #1973a5;
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .title-bl,
    .title-like {
        border-bottom: 1px solid #1973a5;
        margin-bottom: 23px;
    }

    #like>h2 {
        font-size: 18px;
    }

    #binhluan,
    #like {
        margin-top: 20px;
        overflow: hidden;
    }

    /* end product detail */




    /* addthis */
    .addthis_button_tweet {
        width: 80px !important;
    }

    .addthis_button_google_plusone {
        width: 63px !important;
    }

    /* end addthis */

    /* related product */

    .products {
        padding: 15px;
    }

    @media (max-width:650px) {
        .product-comment #mota:after {
            border: none;
        }
    }

    .product-wrapper {
        border-radius: 5px;
        background: white;
        box-shadow: 0px 0px 1px 1px #ccc;
    }

    .related-image-wrapper {
        background: white;
    }

    .related-image-wrapper img {
        max-width: 100%;
    }

    .related-product-detail {
        padding: 25px 15px;
    }

    .related-product-price {
        display: block;
        font-size: 20px;
        color: #ff6517;
    }

    .related-product-pricesale {
        display: block;
        font-size: 17px;
        color: #aaaaaa;
    }

    .related-product-name h2 {
        display: block;
        font-size: 16px;
        margin: 0px;
    }

    .related-image-wrapper:hover .related-view {
        height: 262px;
        cursor: pointer;
    }

    .related-view {
        background: #83b9d8;
        position: absolute;
        top: 0;
        width: 262px;
        opacity: 0.7;
    }

    .related-view img {
        top: 40%;
        left: 38%;
        position: absolute;
    }


    /* end related product */

    /* img zoom */
    .flexslider li.product-thumb a {
        display: block;
        position: relative;
    }

    .product-thumb.active a:after,
    .product-thumb:hover a:after {
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid #E05544;
        content: "";
        position: absolute;
        top: -5px;
        left: calc(50% - 4px);
    }



    .selector-wrapper,
    .select-wrapper {
        margin-top: 17px;
    }

    .selector-wrapper label,
    .select-wrapper label {
        font-size: 15px;
        color: #000;
        display: block;
    }

    .product-thumb {
        box-sizing: border-box;
    }

    li.product-thumb {
        border: 1px solid #eee;
        margin: 5px;
        padding: 1px;
        text-align: center;
        display: inline-block;
    }

    .product-thumb.active,
    .product-thumb:hover {
        border: 1px solid #f00;
        position: relative;
    }

    #sliderproduct {
        position: relative;
    }

    #sliderproduct .flex-viewport {
        width: 320px;
        margin: auto;
    }

    #sliderproduct .flex-direction-nav li a.flex-prev {
        left: 0;
    }

    #sliderproduct .flex-direction-nav li a.flex-next {
        right: 0;
    }

    /********************** MENU MAIN ************************/
    .navbar-main.navbar {
        position: relative;
        min-height: 50px;
        border: 0px solid transparent;
    }

    .navbar-main.navbar {
        border-radius: 0px;
    }

    .right-menu {
        margin: 0px 15px;
        margin-right: 30px;
    }

    ul.mobile-menu-icon .user a {
        color: #fff;
        font-size: 24px;
        padding: 13px;
    }

    ul.mobile-menu-icon {
        margin: 0px;
    }

    .navbar-main .navbar-nav>li>a {
        line-height: 20px;
        position: relative;
        display: block;
        padding-top: 15px;
        padding-bottom: 15px;
        text-transform: uppercase;
        white-space: nowrap;
        font-size: 16px;
        font-weight: 600;
    }

    ul.mobile-menu-icon li#cart-target {
        color: #fff;
        height: 100%;
        font-size: 26px;
        line-height: 50px;
        position: relative;
    }

    .navbar-main .navbar-nav>li>a:last-child {
        border-right: none;
    }

    .mobile-menu-icon-wrapper {
        width: calc(100% - 70px);
    }

    ul.mobile-menu-icon>li {
        float: right;
        margin-left: 12px;
        margin-right: 12px;
    }

    ul.mobile-menu-icon .dropdown-menu {
        left: auto;
        right: 0px;
        margin: 0px;
        border-radius: 0px;
        background-color: #EDEDED;
    }

    .navbar-main.navbar-default .navbar-toggle {
        background: transparent;
        border-color: #96a0ad;
        float: left;
        margin: 8px;
    }

    div#navbar>ul>li>ul {
        padding: 0px;
    }

    div#navbar>ul>li>a>span {
        color: white;
    }

    div#navbar>ul>li:hover>a>span {
        color: #f48730;
    }

    div#navbar>.open {
        background: #68B0D8;
    }

    .navbar-main.navbar-default .navbar-toggle .icon-bar {
        background-color: #fff;
    }

    .navbar-main.navbar-default .navbar-collapse,
    .navbar-main.navbar-default .navbar-form {
        border-color: #fff;
    }

    .navbar-main .navbar-nav {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        font-size: 16px;
        line-height: 35px;
    }

    #navbar ul.dropdown-menu li a {
        margin: 0px !important;
        padding: 6px 15px 6px 10px;
        white-space: normal !important;
        text-transform: uppercase;
        color: white;
    }

    #navbar ul.dropdown-menu li a:hover {
        color: #f48730 !important;
    }

    #navbar ul.dropdown-menu {
        background: #1973a5;
        min-width: 255px !important;
    }

    div#navbar>ul>li {
        border-right: 0px solid #1973a5;
        position: relative
    }

    div#navbar>ul>li:first-child {
        border-left: none;
    }

    div#navbar>ul>li:last-child {
        border-right: none;
    }

    #navbar li>ul>li>a,
    #navbar li>ul,
    #navbar li {
        border-radius: 0px;
    }

    /*================HEADER ISON CART=============*/
    li#cart-target1 a.cart span:nth-child(2) {
        background: #ff0000;
        color: #fff;
        padding: 0px 6px;
        border-radius: 100%;
        position: absolute;
        left: 22px;
        font-size: 12px;
        line-height: 20px;
        top: 6px;
    }

    a.cart {
        color: #fff;
    }

    #cart-icon ul {
        display: block !important;
    }

    .navbar-main .navbar-nav li .toolbar-cart {
        line-height: 20px;
        position: relative;
        display: block;
        padding: 15px 10px;
        text-transform: uppercase;
        white-space: nowrap;
        font-size: 14px;
        border-right: 0px solid #5192b6;
        border-left: 1px solid #656565;
        height: 50px;
    }

    /*============HEADER ISON _SEARCH===============*/
    li#search-icon {
        height: 50px;
        border-left: 1px solid #656565;
        position: relative;
        display: none;
    }

    #search-icon ul {
        display: block !important;
    }

    button.icon-search {
        width: 50px;
        height: 50px;
        float: left;
        background: url('//hstatic.net/0/0/global/design/theme-default/icon-search.png') center no-repeat;
        border-radius: 0px;
        border: 0px;
    }

    .btn-group.open button.icon-search,
    li#search-icon:hover button.icon-search {
        background: url('//hstatic.net/0/0/global/design/theme-default/icon-search-hover.png') #ededed center no-repeat;
    }

    .search-bar {
        background: #EDEDED;
    }

    li#search-icon:hover .search-bar {
        display: block;
    }

    .search-bar form input {
        border: 0px;
        background: transparent;
        padding: 10px;
        width: 350px;
        max-width: 100%;
        outline: none;
        background: #F9F9F9;
    }

    .search-bar form {
        padding-left: 5px;
        padding-right: 5px;
    }

    li#search-icon .dropdown-menu {
        position: absolute;
        right: 0px;
        left: auto;
        background: #ededed;
        margin: 0px;
        border-radius: 0px;
        box-shadow: 1px 2px 2px #D0D0D0;
    }

    @-webkit-keyframes dropInDown {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            -moz-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            -o-transform: translateY(-20px);
            transform: translateY(-20px)
        }

        100% {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0)
        }
    }

    @keyframes dropInDown {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            -moz-transform: translateY(-20px);
            -o-transform: translateY(-20px);
            transform: translateY(-20px)
        }

        100% {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            -moz-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0)
        }
    }

    .open>.dropdown-menu {
        -webkit-animation-name: dropInDown;
        -moz-animation-name: dropInDown;
        -o-animation-name: dropInDown;
        animation-name: dropInDown;
        -webkit-animation-duration: .3s;
        -moz-animation-duration: .3s;
        -o-animation-duration: .3s;
        animation-duration: .3s;
        -webkit-animation-fill-mode: both;
        -o-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    /*=============HEADER USER================*/
    #user-icon {
        padding: 0px 10px;
        border-left: 1px solid #656565;
        height: 50px;
        color: #CCD8DF;
        text-align: center;
        font-size: 13px;
    }

    #user-icon ul,
    .nodrop {
        display: block !important;
    }

    #user-icon ul li a.reg,
    .log-only {
        color: #fff;
        width: 100%;
        font-size: 16px;
        float: left;
        line-height: 24px;
    }

    .log-only {
        line-height: 40px;
    }

    #user-icon a.acc {
        margin-top: 9px;
        text-transform: uppercase;
        display: block;
    }

    #user-icon li {
        width: 100%;
        float: left;
    }

    #user-icon li:last-child {
        white-space: nowrap;
    }

    #user-icon a.log {
        color: #fff;
    }

    #user-icon ul li a {
        color: #fff;
        padding-top: 5px
    }

    #user-icon span {
        margin-right: 4px;
    }

    @media (min-width:768px) {
        .mobile-menu-icon-wrapper {
            display: none;
        }

        div#navbar {
            float: left;
        }

        #navbar .dropdown open,
        #navbar li:hover>a:first-child {
            background-color: #1973a5;
        }
    }

    .navbar-nav ul .sub-arrow {
        margin: 12px 10px;
    }

    @media (max-width:767px) {

        .navbar-nav ul .sub-arrow {
            margin: -3px 10px;
        }

        div#navbar>ul>li>a,
        div#navbar>ul>li>ul>li>a,
        div#navbar>ul>li>ul>li>ul>li>a {
            border-bottom: 1px solid #96a0ad;
            width: 100%;
            float: left;
        }
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:hover,
    .navbar-default .navbar-nav>.active>a:focus {
        color: white;
        background-color: #1973a5;
    }

    .responsive-menu {
        width: 100%;
    }

    .responsive-menu .navbar-toggle,
    .responsive-menu .mobile-menu-icon-wrapper {
        display: block;
    }

    .responsive-menu .collapse {
        height: 0px !important;
        overflow: hidden !important;
    }

    .responsive-menu .collapse.in {
        height: auto !important;
        overflow: visible !important;
    }

    .responsive-menu .navbar-header,
    .responsive-menu ul.nav.navbar-nav li,
    .responsive-menu ul.nav.navbar-nav,
    .responsive-menu .dropdown-menu {
        width: 100% !important;
        max-width: none !important;
    }

    .responsive-menu #navbar ul.dropdown-menu {
        position: relative;
    }

    .responsive-menu .search .dropdown-menu {
        min-width: 300px;
    }

    .responsive-menu .right-menu {
        display: none;
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
        background: #1973a5
    }

    .responsive-menu .sm-nowrap {
        margin-left: 0px !important;
        margin-top: 0px !important;
    }

    /* modal */
    @media (min-width: 992px) {
        .modal-lg {
            width: 940px !important;
        }

        .fixheight .product-img img:last-child {
            vertical-align: middle;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }
    }

    .modal-header {
        padding: 20px 0px;
        text-align: center;
        position: relative;
        background: #1973a5;
    }

    .modal-title {
        color: #fff;
        text-transform: uppercase;
    }

    .modal-title span {
        font-size: 14px;
        font-style: italic;
    }

    .modal-body th {
        font-size: 15px;
        color: #1C1C1C;
        font-weight: 600;
        text-align: left;
    }

    .item-price {
        font-size: 16px;
    }

    .item-image,
    .item-quantity1,
    .item-delete {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .item-title {
        width: 40%;
        color: #3399cc;
        font-size: 14px;
    }

    .original {
        display: none;
    }

    #cart-table th {
        padding-bottom: 10px;
        padding-top: 10px;
    }

    #cart-table img {
        max-width: 50px;
    }

    #cart .item-quantity,
    .line-item input {
        width: 64px;
        text-align: center;
        height: 30px;
        border-radius: 3px;
        font-size: 14px;
        color: #808080;
        border: 1px solid #ccc;
        outline: none;
        padding-left: 15px;
    }

    .modal-footer .buttons input {
        background: #108e45;
        color: white;
        width: 150px;
    }

    .total-price-modal {
        text-align: right;
        font-size: 20px;
        margin-top: 20px;
        color: #808080;
        font-size: 16px;
    }

    .total-price-modal span {
        font-size: 20px;
        color: #303030;
        vertical-align: middle;
    }

    table tr td,
    table tr th {
        padding: 0px;
    }

    .modal-title-note {
        text-align: left;
        font-size: 16px;
        padding-left: 50px;
    }

    .modal-note {
        text-align: left;
    }

    .modal-note textarea {
        outline: none;
        border: 1px #D8D8D8 solid;
        padding-left: 10px;
        height: 70px;
        padding-top: 5px;
        width: 100%;
    }

    textarea {
        resize: none;
    }

    .comeback {
        text-align: left;
        margin-top: 30px;
    }

    .comeback a {
        color: #000000;
        font-size: 16px;
        font-weight: bold;
        line-height: 22px
    }

    .comeback a:hover {
        color: #000000;
    }

    .comeback img {
        margin-right: 5px;
        float: left;
    }

    .item-delete {
        position: relative;
        width: 40px;
    }

    .item-delete a {
        color: #000;
        position: absolute;
        top: 0;
        margin: auto;
        height: 19px;
        right: 0px;
        left: 0;
        bottom: 0;
        display: block;
        -webkit-border-bottom-right-radius: 3px;
        -webkit-border-bottom-left-radius: 3px;
        -moz-border-radius-bottomright: 3px;
        -moz-border-radius-bottomleft: 3px;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    button.close a:before {
        content: url('//hstatic.net/0/0/global/design/theme-default/icon-delete.png');
    }

    .modal-header a:hover {
        background: #000000;
    }

    .modal-header a {
        position: absolute;
        top: 17px;
        padding: 7px 6px;
        right: 7px;
        line-height: 0px;
        text-align: center;
        border-radius: 50%;
    }

    .modal-header span:hover {
        background: #e05543;
    }

    .close:hover,
    .close:focus,
    .close {
        opacity: 1;
    }


    @media (max-width: 768px) {

        div#myCart {
            z-index: 999999;
            top: 40px;
        }

        .navbar-main.navbar {
            position: fixed !important;
            width: 100%;
            z-index: 1900 !important;
            ;
            top: 0 !important;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }

        .modal-body th {
            font-size: 10px;
        }

        input#quantity1 {
            padding: 0px;
            width: 30px;
            font-size: 12px;
            font-weight: bold;
            height: 24px;
        }

        .item-title {
            font-size: 12px;
        }

        .item-price {
            font-size: 12px;
        }

        .modal-note textarea {
            width: 100%;
            border-radius: 0px;
        }

        .modal-title-note {
            padding-left: 0px;
            font-size: 12px;
        }

        .total-price-modal {
            font-size: 14px;
        }

        span.item-total {
            font-size: 16px;
            font-weight: bold;
        }

        button.button-default {
            font-size: 12px;
            line-height: 30px;
            height: 30px;
            padding: 0 14px;
        }

        .button-default:before {
            right: 30px;
        }

        .button-default:after {
            width: 15px;
            margin-left: 10px;
        }

        .comeback a {
            font-size: 12px;
        }

        /* header 27-10 */
        .logo {
            padding: 20px 0 10px 0;
        }

        .flexslider {
            margin: 0 0 15px 0;
        }

        .banner2 {
            margin-bottom: 20px;
        }

        .product-list .product-block .product-detail {
            text-align: center;
        }

        .product-list .product-block .product-detail .pro-price-del {
            text-align: center;
            !important;
        }
    }

    /* end modal */
    .cl-pri {
        color: #1973a5 !important;
    }

    .cl-hov {
        color: #1973a5 !important;
    }

    .cl-feat {
        color: #ff0000 !important;
    }

    .cl-add {
        color: #3daf2c !important;
    }

    .cl-quadd {
        color: #ff7b00 !important;
    }

    .cl-bl {
        color: #ff6517 !important;
    }

    .cl-br {
        color: #ff6517 !important;
    }

    .article-count .count-comment .icon-comment {
        background: url('//hstatic.net/0/0/global/design/theme-default/comment.png') no-repeat center;
    }


    .article-count ul {
        float: left;
        width: 100%;
    }

    .count-comment {
        background: #f0f0f0;
        width: 90px;
        height: 70px
    }

    .count-comment a {
        color: #53a1cc;
        font-size: 12px
    }

    .count-comment span {
        color: #444444;
    }

    .article-count .count-comment li {
        position: relative;
        display: inline-block;
        color: #fff;
        width: 100%;
        text-align: center;
    }

    .icon-comment {
        display: inline-block;
        margin: 8px 0px 1px 0;
        min-height: 32px;
        width: 100%;
    }

    .author-date .date-post .icon-time {
        background: url('//hstatic.net/0/0/global/design/theme-default/time-big.png') no-repeat center;

    }

    .author-date ul {
        float: left;
        width: 100%;
        margin-bottom: 0px;
    }

    .date-post {
        background: #1973a5;
        width: 90px;
        height: 70px
    }

    .date-post p {
        text-align: center;
        font-size: 12px;
    }

    .author-date .date-post li {
        position: relative;
        display: inline-block;
        color: #fff;
        width: 100%;
    }

    .icon-time {
        display: inline-block;
        margin: 8px 0px 1px 0;
        min-height: 32px;
        width: 100%;
    }

    .news-latest.list-group {
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        padding-bottom: 1px;
        background: #fff;
    }

    .news-latest .list-group-item.active,
    .news-latest .list-group-item.active:hover,
    .news-latest .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #1973a5;
        border-color: #1973a5;
    }

    .news-latest .article p {
        margin: 0px;
    }

    .news-latest .article img {
        max-width: calc(100% + 30px);
        margin-left: -15px;
        margin-right: -15px;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .list-group-item {
        position: relative;
        display: block;
        padding: 15px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .news-latest .article:last-of-type {
        border-bottom: none;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .article a:hover {
        color: #000000;
    }

    .news-latest .article a {
        display: block;
        white-space: pre-line;
        color: #000000;
    }

    .news-latest .article .time-date {
        background: url('//hstatic.net/0/0/global/design/theme-default/icon-article.png')no-repeat center;
        width: 19px;
        height: 19px;
        display: inline-block;
        margin-right: 5px;
        float: left;
    }

    .news-latest .article .post-content {
        color: #1973a5;
        padding-right: 0px;
    }

    .article-count .count-comment .icon-comment {
        background: url('//hstatic.net/0/0/global/design/theme-default/comment.png') no-repeat center;
    }


    .article-count ul {
        float: left;
        width: 100%;
    }

    .count-comment {
        background: #f0f0f0;
        width: 90px;
        height: 70px
    }

    .count-comment a {
        color: #53a1cc;
        font-size: 12px
    }

    .count-comment span {
        color: #444444;
    }

    .article-count .count-comment li {
        position: relative;
        display: inline-block;
        color: #fff;
        width: 100%;
        text-align: center;
    }

    .icon-comment {
        display: inline-block;
        margin: 8px 0px 1px 0;
        min-height: 32px;
        width: 100%;
    }

    /*Quickview*/
    #quick-view-modal {
        background: rgba(0, 0, 0, 0.31);
        z-index: 9999;
    }

    #quick-view-modal .modal-footer {
        border-top: 1px solid #ccc;
    }

    #quick-view-modal .selector-wrapper label {
        width: 25%;
    }

    #quick-view-modal .selector-wrapper {
        width: 100%;
        float: left;
    }

    #quick-view-modal .btn-detail {
        float: left;
    }

    #quick-view-modal .form-input label {
        width: 100%;
        color: #828282;
    }

    #quick-view-modal .form-input {
        float: left;
        width: 300px;
        max-width: 100%;
        padding: 10px 0px;
    }

    #quick-view-modal .modal-body {
        padding: 10px 15px;
    }

    #quick-view-modal .form-input input[type=number] {
        max-width: 60px;
        text-align: center;
        padding: 6px;
        border-radius: 5px;
        border: 1px solid #E5E5E5;
    }

    #quick-view-modal .modal-header h2 {
        padding: 10px 0px;
        background: #53A1CC;
        color: #fff;
        line-height: 29px;
        text-align: center;
    }

    #quick-view-modal .qv-readmore a {
        color: #E05543;
        font-weight: bold;
    }

    #quick-view-modal .qv-readmore {
        float: left;
        padding: 22px 10px;
    }

    #quick-view-modal .p-price {
        font-size: 24px;
        color: #ff6517;
        margin-right: 25px;
    }

    #quick-view-modal i.fa.fa-plus,
    #quick-view-modal i.fa.fa-times {
        margin-right: 8px;
    }

    #quick-view-modal .modal-content,
    #quick-view-modal .btn {
        border-radius: 2px;
    }

    #quick-view-modal del {
        font-size: 20px;
        color: #aaa;
    }


    #quick-view-modal .zoom>img {
        max-width: 100%;
        max-height: 300px;
    }

    #quick-view-modal div#p-sliderproduct {
        width: 300px;
        margin: auto;
    }

    #quick-view-modal .zoom {
        text-align: center;
        width: 100%;
        height: 230px;
        padding: 10px;
    }

    #quick-view-modal .item:hover,
    #quick-view-modal .item.active {
        border: 1px solid #E05544 !important;
    }

    #quick-view-modal .item:hover:after,
    #quick-view-modal .item.active:after {
        border-top: 5px solid rgba(224, 85, 68, 0) !important;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 6px solid #E05544;
        content: "";
        position: absolute;
        top: -11px;
        left: 0px;
        right: 0px;
        margin: auto;
        width: 6px;
    }

    #quick-view-modal li.product-thumb {
        float: left;
        display: block !important;
    }

    #quick-view-modal .image-zoom.row {
        text-align: center;
    }

    #quick-view-modal .image-zoom>img {
        max-width: 100%;
        max-height: 300px;
        margin-bottom: 5px;

    }

    #quick-view-modal .btn-soldout {
        width: 100%;
    }

    #quick-view-modal .modal-title.p-title {
        font-weight: bold;
        text-align: left;
        padding-left: 20px;

    }

    #quick-view-modal .btn-color-add {
        width: 200px;
    }

    /*End Quickview*/

    /*Product tag*/
    .tag-wrapper {
        float: left;
        margin: 10px 0px;
        width: 100%;
    }

    .tag-wrapper a {
        background: #56A2CD;
        color: #fff;
        padding: 1px 5px;
        font-size: 10px;
        border-left: 3px solid #3F5AA6;
        float: left;
        margin: 0px 5px;
    }

    .tag-wrapper label {
        font-size: 16px;
        float: left;
        line-height: 37px;
    }

    .tag-wrapper .tags li.active a,
    .tag-wrapper .tags li.active a:before {
        border-left-color: #53a1cc;
    }

    /*End if protag*/


    /*News date*/

    .author-date .date-post .icon-time {
        background: url('//hstatic.net/0/0/global/design/theme-default/time-big.png') no-repeat center;

    }

    .author-date ul {
        float: left;
        width: 100%;
        margin-bottom: 0px;
    }

    .date-post {
        background: #1973a5;
        width: 90px;
        height: 70px
    }

    .date-post p {
        text-align: center;
        font-size: 12px;
    }

    .author-date .date-post li {
        position: relative;
        display: inline-block;
        color: #fff;
        width: 100%;
    }

    .icon-time {
        display: inline-block;
        margin: 8px 0px 1px 0;
        min-height: 32px;
        width: 100%;
    }

    /*News date*/


    /*news lastes*/

    .news-latest.list-group {
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        padding-bottom: 1px;
        background: #fff;
    }

    .news-latest .list-group-item.active,
    .news-latest .list-group-item.active:hover,
    .news-latest .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #1973a5;
        border-color: #1973a5;
    }

    .news-latest .article p {
        margin: 0px;
    }

    .news-latest .article img {
        max-width: calc(100% + 30px);
        margin-left: -15px;
        margin-right: -15px;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .list-group-item {
        position: relative;
        display: block;
        padding: 15px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .news-latest .article:last-of-type {
        border-bottom: none;
    }

    .news-latest .article {
        border-bottom: 1px solid #ddd;
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 0;
    }

    .news-latest .article a:hover {
        color: #000000;
    }

    .news-latest .article a {
        display: block;
        white-space: pre-line;
        color: #000000;
    }

    .news-latest .article .time-date {
        background: url(//hstatic.net/0/0/global/design/theme-default/icon-article.png)no-repeat center;
        width: 19px;
        height: 19px;
        display: inline-block;
        margin-right: 5px;
        float: left;
    }

    .news-latest .article .post-content {
        color: #1973a5;
        padding-right: 0px;
    }

    /*end news latted*/

    /*News count*/

    .article-count .count-comment .icon-comment {
        background: url('//hstatic.net/0/0/global/design/theme-default/comment.png') no-repeat center;
    }


    .article-count ul {
        float: left;
        width: 100%;
    }

    .count-comment {
        background: #f0f0f0;
        width: 90px;
        height: 70px
    }

    .count-comment a {
        color: #53a1cc;
        font-size: 12px
    }

    .count-comment span {
        color: #444444;
    }

    .article-count .count-comment li {
        position: relative;
        display: inline-block;
        color: #fff;
        width: 100%;
        text-align: center;
    }

    .icon-comment {
        display: inline-block;
        margin: 8px 0px 1px 0;
        min-height: 32px;
        width: 100%;
    }

    /*end news count*/

    /*contact address*/

    .col-xs-2 i {
        color: #53A1CC;
        font-size: 20px;
    }

    #col-right h3 {
        padding-left: 0px;
        font-size: 20px;
        font-weight: 400;
    }

    #col-right h3.name-company {
        font-weight: 700;
    }

    #col-right ul {
        float: left;
        width: 100%;
        margin-bottom: 0px;
    }

    #col-right .glyphicon {
        color: #1973a5;
    }

    /*End contact address*/



    #myCart .modal-footer {
        border-top: 1px solid #DDD;
    }

    .slide-nav {
        position: absolute;
        top: 40%;
        left: 20px;
        z-index: 99;
    }

    .slide-nav.slide-next {
        right: 20px;
        left: auto;
    }

    .slide-nav i {
        font-size: 1.6em;
    }

    .contact-add p i {
        margin-right: 5px;

    }

    .footer-static-title h4 {
        text-transform: uppercase;
        font-weight: 500;
        color: white;
    }

    .bullet li a {
        color: white;
    }

    .bullet li a:hover {
        color: white;

    }

    /* bo sung 27-10 */
    .footer-top {
        background: #1973a5;
        padding-top: 20px;
    }

    .footer-bottom {
        background: #1973a5;
    }

    .footer-bottom p {
        margin: 0;
        padding: 15px 0px;
    }

    .footer-static-content p {
        color: white;
    }

    .top-banner .banner1 {
        margin-bottom: 15px;
    }

    .top-banner .image {
        border: 4px solid #fff;
        position: relative;
    }

    .contents {
        margin: 0;
    }

    .top-banner .image a:before {
        background-color: rgba(255, 255, 255, 0.15);
        content: "";
        height: 0;
        left: 0;
        margin: auto;
        position: absolute;
        top: 0;
        transition: all 0.3s ease-out 0s;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
        width: 0;
    }

    /*
.top-banner .image img {
width: 100%;
overflow: hidden;
max-height: 146px;
}
*/
    .top-banner .image a:after {
        background-color: rgba(255, 255, 255, 0.15);
        bottom: 0;
        content: "";
        height: 0;
        position: absolute;
        right: 0;
        transition: all 0.3s ease-out 0s;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
        width: 0;
    }

    .top-banner .image a:hover:after {
        height: 100%;
        width: 100%;
        transition: all 0.4s ease-out 0s;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -ms-transition: all 0.4s ease-in-out 0s;
    }

    .top-banner .image a:hover:before {
        height: 100%;
        width: 100%;
        transition: all 0.4s ease-out 0s;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -ms-transition: all 0.4s ease-in-out 0s;
    }

    .footer-static-content i {
        width: 38px;
        height: 38px;
        line-height: 38px;
        text-align: center;
        font-size: 18px;
        color: white;
        padding-left: 3px;
        float: left;
        margin-right: 20px;
        border: 1px solid rgba(242, 242, 242, 0.16);
    }


    .footer-static-content p {
        clear: both;
        margin-bottom: 10px;
        overflow: hidden;

    }

    .footer-static-content p span {
        vertical-align: middle;
        color: white !important;
        z-index: 9999;
        display: block;
    }

    .footer-static-content p span a {
        color: white !important;
    }

    .mega-left-title {
        background-color: #1973a5;
        color: #fff;
        font-size: 15px;
        font-weight: bold;
        padding: 16px 10px;
        text-transform: uppercase;

    }

    .mega-left-title:before {
        content: '\f03a';
        font-family: FontAwesome;
        font-size: 16px;
        color: #fff;
        margin: 0 10px;
    }

    footer {
        margin-top: 20px;
    }

    @media (min-width: 992px) {
        .top-banner {
            padding-left: 0;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {

        .top-banner .banner1,
        .top-banner .banner2 {
            width: 50%;
            margin: 0px 0 20px 0;
            float: left;
        }

        .top-banner .banner1 {
            padding-right: 15px
        }

        .top-banner .banner2 {
            padding-left: 15px;
        }

        .top-banner a img {
            width: 100%
        }
    }

    @media (max-width: 360px) {

        .top-banner .banner1,
        .top-banner .banner2 {
            width: 100%;
            float: none;
            padding: 0
        }

        ul.mobile-menu-icon>li {
            margin-left: 5px;
            margin-right: 5px;
        }
    }

    @media (min-width: 480px) and (max-width: 768px) {

        .top-banner .banner1,
        .top-banner .banner2 {
            width: 50%;
            float: left;
        }

        .top-banner .banner2 {
            padding-left: 0px;
        }
    }

    .footer-static-content {
        margin-bottom: 15px;
    }

    /** bo sung danh má»¥c trÃ¡i bog */
    #menu-blog>li.item.has-sub:hover>a,
    #menu-blog>.has-sub .has-sub:hover>a,
    #menu-blog>li.has-sub .has-sub>ul>li:hover {
        border-left: 4px solid #1973a5 !important;
    }

    #menu-blog>li.has-sub>ul>li a {
        border-left: 4px solid transparent;
    }

    #menu-blog>li.item>ul>li:hover {
        border-left: none !important
    }

    #menu-blog>li.has-sub>ul>li {
        border-left: none !important
    }

    #menu-blog>li.item>ul>li>a {
        margin-left: 0;
        padding-left: 30px;
    }

    #menu-blog ul li a {
        margin-left: 20px;
    }

    .news-menu .nav>li>a {
        padding: 20px 15px;
    }

    #menu-blog>li.has-sub .has-sub>ul>li {
        border-left: 4px solid transparent;
    }

    .content-contact iframe {
        max-width: 100%;
    }




    @media (max-width: 992px) {
        .container-mp {
            height: 100%;
        }

        #navbar {
            display: none;
        }

        .info-more .icon-time {
            background: url('//hstatic.net/0/0/global/design/theme-default/icon-article.png')no-repeat center;
            margin: 0;
            top: -5px !important;
        }

        .text-mobi-blog {
            margin-top: 15px;
        }

        .info-more .comment-icon {
            color: #53A1CC;
            top: 3px !important;
        }

        #cartform table tr th,
        #cartform table tr td {
            padding: 10px;
            text-align: center;
        }

        #cartform table .item-title {
            padding: 0 10px;
        }

        .item-delete {
            line-height: 15px;
        }

        .modal-body {
            padding-bottom: 15px !important;
        }

        .item-delete a {
            margin-left: 10px;
            padding-right: 10px;
            right: inherit;
        }
    }


    .copyright a {
        color: #666666;
    }

    .copyright p {
        text-align: center;
        color: rgb(190, 190, 190);
    }

    .container-mp.responsive-menu nav.navbar-main.navbar.navbar-default.cl-pri {
        width: 100%;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
    }

    .nav-wrapper.responsive-menu header.container {
        margin-top: 40px;
    }

    /* Add style mobile menu ***/
    .mp-pusher {
        position: relative;
        left: 0;
        height: 100%;
    }

    .mp-menu {
        position: absolute;
        /* we can't use fixed here :( */
        top: 0;
        left: 0;
        z-index: 1;
        width: 300px;
        height: 100%;
        -webkit-transform: translate3d(-100%, 0, 0);
        -moz-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        overflow-y: scroll;
        background: #666;
    }

    .mp-level {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #666;
        -webkit-transform: translate3d(-100%, 0, 0);
        -moz-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }

    /* overlays for pusher and for level that gets covered */
    .mp-pusher::after,
    .mp-level::after,
    .mp-level::before {
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        content: '';
        opacity: 0;
    }

    .mp-pusher::after,
    .mp-level::after {
        background: rgba(0, 0, 0, 0.3);
        -webkit-transition: opacity 0.3s, width 0.1s 0.3s, height 0.1s 0.3s;
        -moz-transition: opacity 0.3s, width 0.1s 0.3s, height 0.1s 0.3s;
        transition: opacity 0.3s, width 0.1s 0.3s, height 0.1s 0.3s;
    }

    .mp-level::after {
        z-index: -1;
    }

    .mp-pusher.mp-pushed::after,
    .mp-level.mp-level-overlay::after {
        width: 100%;
        height: 100%;
        opacity: 1;
        -webkit-transition: opacity 0.3s;
        -moz-transition: opacity 0.3s;
        transition: opacity 0.3s;
    }

    .mp-level.mp-level-overlay {
        cursor: pointer;
    }

    .mp-level.mp-level-overlay.mp-level::before {
        width: 100%;
        height: 100%;
        background-color: transparent;
        opacity: 1;
    }

    .mp-pusher,
    .mp-level {
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }

    /* overlap */
    .mp-overlap .mp-level.mp-level-open {
        box-shadow: 1px 0 2px rgba(101, 101, 101, 0.5);
        -webkit-transform: translate3d(-40px, 0, 0);
        -moz-transform: translate3d(-40px, 0, 0);
        transform: translate3d(-40px, 0, 0);
    }

    /* First level */
    .mp-menu>.mp-level,
    .mp-menu>.mp-level.mp-level-open,
    .mp-menu.mp-overlap>.mp-level,
    .mp-menu.mp-overlap>.mp-level.mp-level-open {
        box-shadow: none;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    /* cover */
    .mp-cover .mp-level.mp-level-open {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        overflow: auto;
    }

    .mp-cover .mp-level.mp-level-open>ul>li>.mp-level:not(.mp-level-open) {
        -webkit-transform: translate3d(-100%, 0, 0);
        -moz-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
    }

    /* content style */
    .mp-menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .mp-menu h2 {
        margin: 0;
        padding: 1em;
        color: rgba(101, 101, 101, 0.8);
        text-shadow: 0 0 1px rgba(101, 101, 101, 0.1);
        font-weight: 300;
        font-size: 2em;
    }

    .mp-menu.mp-overlap h2::before {
        position: absolute;
        top: 0;
        right: 0;
        margin-right: 8px;
        font-size: 75%;
        line-height: 1.8;
        opacity: 0;
        -webkit-transition: opacity 0.3s, -webkit-transform 0.1s 0.3s;
        -moz-transition: opacity 0.3s, -moz-transform 0.1s 0.3s;
        transition: opacity 0.3s, transform 0.1s 0.3s;
        -webkit-transform: translateX(-100%);
        -moz-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    .mp-menu.mp-cover h2 {
        text-transform: uppercase;
        font-weight: 500;
        font-size: 15px;
        line-height: 21px;
    }

    .mp-overlap .mp-level.mp-level-overlay>h2::before {
        opacity: 1;
        -webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
        -moz-transition: -moz-transform 0.3s, opacity 0.3s;
        transition: transform 0.3s, opacity 0.3s;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        transform: translateX(0);
    }

    .mp-menu ul li>a {
        display: block;
        padding: 0.7em 1em 0.7em 1.8em;
        outline: none;
        box-shadow: inset 0 -1px rgba(101, 101, 101, 0.5);
        -webkit-transition: background 0.3s, box-shadow 0.3s;
        -moz-transition: background 0.3s, box-shadow 0.3s;
        transition: background 0.3s, box-shadow 0.3s;
        border-bottom: 1px solid #f1f1f1;
    }


    .mp-level>ul>li:first-child>a {
        box-shadow: inset 0 -1px rgba(101, 101, 101, 0.5), inset 0 1px rgba(101, 101, 101, 0.5);
    }

    .mp-menu ul li a:hover,
    .mp-level>ul>li:first-child>a:hover {
        background: rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 -1px rgba(101, 101, 101, 0);
    }

    .mp-menu .mp-level.mp-level-overlay>ul>li>a,
    .mp-level.mp-level-overlay>ul>li:first-child>a {
        box-shadow: inset 0 -1px rgba(101, 101, 101, 0);
    }

    .mp-level>ul>li:first-child>a:hover,
    .mp-level.mp-level-overlay>ul>li:first-child>a {
        box-shadow: inset 0 -1px rgba(0, 0, 0, 0), inset 0 1px rgba(0, 0, 0, 0);
    }

    /* seems like Chrome 34.0.1847.131 needs the second shadow otherwise the transition breaks */

    .mp-back {
        background: rgba(0, 0, 0, 0.1);
        outline: none;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        display: block;
        font-size: 0.8em;
        padding: 1em;
        position: relative;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.1);
        -webkit-transition: background 0.3s;
        -moz-transition: background 0.3s;
        transition: background 0.3s;
    }

    .mp-back::after {
        font-family: FontAwesome;
        position: absolute;
        content: "\f0d9";
        left: 15px;
        font-size: 1.3em;
        color: rgba(255, 255, 255, 0.5)
    }

    .mp-menu .mp-level.mp-level-overlay>.mp-back,
    .mp-menu .mp-level.mp-level-overlay>.mp-back::after {
        background: transparent;
        box-shadow: none;
        color: transparent;
    }

    /* Fallback example for browsers that don't support 3D transforms (and no JS fallback) */
    /* We'll show the first level only */
    .no-csstransforms3d .mp-pusher,
    .no-js .mp-pusher {
        padding-left: 300px;
    }

    li.has-children.icon::before {
        font-family: FontAwesome;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        display: inline-block;
        margin-right: 0.6em;
        -webkit-font-smoothing: antialiased;
        font-size: 22px;
    }

    li.has-children.icon.icon-arrow-left:before {
        content: "\f105";
    }

    .mp-menu ul li.has-children.icon::before {
        display: none;

    }

    .mp-level-overlay>ul>li>i {
        display: none;
    }

    .mp-menu ul li i {
        float: left;
        position: absolute;
        right: 0px;
        border: 0;
        background: no-repeat;
        color: #fff;
        font-size: 24px;
        line-height: 40px;
        width: 30px;
        transform: translateY(-40px);
        z-index: 0;
    }

    .no-csstransforms3d .mp-menu .mp-level,
    .no-js .mp-menu .mp-level {
        display: none;
    }

    .no-csstransforms3d .mp-menu>.mp-level,
    .no-js .mp-menu>.mp-level {
        display: block;
    }

    .mp-menu a {
        color: #fff;
        text-transform: uppercase;
        padding-left: 2.4em;
    }

    .mp-level>ul.lv1>li:first-child>a {
        padding-top: 19px;
        padding-right: 20px;

    }

    html.open-menu,
    body.open-menu,
    .scroller,
    body.open-menu>.container-menu {
        height: 100%;
    }

    .scroller {
        overflow-y: auto;
    }

    .scroller,
    .scroller-inner {
        position: relative;
    }

    .container-mp {
        position: relative;
        overflow: hidden;
    }

    .container-mp .navbar-toggle {
        position: fixed;
        top: 0;
        z-index: 10000;
    }

    .navbar-toggle .icon-bar {
        background-color: #fff;
    }

    @media screen and (max-width: 768px) {
        .product-description-wrapper img {
            width: 100% !important;
            height: auto;
        }

        header.container {
            margin-top: 40px;
        }
    }

    .responsive-menu.container-mp {
        height: 100%;
    }

    @media (max-width: 480px) {
        .product-block .product-img img {
            float: none;
        }

        .logo h1 {
            text-align: center;
        }

        .logo h1 a {
            text-align: center;
            width: 100%;
            display: inline-block;
        }

        .logo a img,
        .logo h1 a {
            display: inline-block;
        }
    }

    .modal-backdrop {
        background-color: transparent;
    }

    /*Table popup cart **/
    #myCart tr.line-item:nth-child(odd) {
        background-color: #f8f8f8;
    }

    #myCart tr.line-item:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.1);
    }

    #myCart .modal-footer {
        margin: 5px 15px
    }

    #myCart table tr td {
        border-top: 0;
    }

    #myCart {
        background-color: rgba(0, 0, 0, 0.31)
    }

    #SearchForm {
        padding-top: 0;
    }

    #SearchForm .search-input {
        border: 2px solid #1973a5;
        float: left;
        height: 33px;
        margin: 0 0 0 56px;
        padding: 0 15px;
        width: 316px;
    }

    #ctlSearch_ctl00_btnSearch {
        border: 0 none;
        cursor: pointer;
        float: left;
        height: 33px;
        margin: 0;
        padding: 0;
        vertical-align: middle;
        width: 34px;
        background-color: #1973a5;
    }

    .phone-header {
        padding-top: 27px;
        font-size: large;
        font-weight: 600;
        text-align: center;
        line-height: 24px;
    }

    .phone-header a {
        color: red;
    }

    .link {
        color: white;
    }

    @media screen and (max-width: 480px) {
        #SearchForm .search-input {
            width: 87% !important;
            margin: 0 !important;
        }

        #cart-table img {
            max-width: 30px;
        }

        #cart .item,
        #cartform table .item-title {
            max-width: 100px !important;
        }

        .product-block.product-resize.fixheight,
        .product-img.image-resize {
            height: 405px;
        }

    }



    .mobile-add-to-cart {
        text-transform: uppercase;
        font-weight: bold;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        background: red;
        padding: 12px;
        font-size: 17px;
        color: #fff;
    }


    .add-cart-img {
        margin-right: auto;
        margin-left: auto;
        display: block;
    }












    /*juno style*/
    .heading-left,
    h1 {
        font-size: 16px;
        margin-bottom: 0px;
    }

    #ProductPrice {
        font-size: 30px;
        color: #e32124;
    }

    #ComparePrice,
    .quantity-selector,
    .variant-compare-price {
        font-weight: bold
    }

    .deliver-top .tit,
    .deliver-top .tit-color,
    .deliver-top-no .tit {
        text-transform: uppercase;
    }

    hr.no-margin {
        margin: 0;
    }

    .deliver-top,
    .deliver-top-no {
        padding: 10px;
        width: 100%;
        display: block;
    }

    .deliver-top {
        background: #f6f6f6;
        border-top: 1px solid #e0e0e0
    }

    .deliver-top-no {
        border-bottom: 1px solid #e0e0e0
    }

    .deliver-top .tit,
    .deliver-top-no .tit {
        font-size: 12px;
        font-weight: 700;
        color: #333
    }

    .deliver-top .tit-color {
        font-size: 15px;
        font-weight: 700;
        color: #f77705
    }

    .deliver-top-no .tit-color {
        font-size: 18px;
        font-weight: 700;
        color: #e32124;
        text-transform: uppercase
    }

    .deliver-top .descrip,
    .deliver-top-no .descrip {
        font-family: Roboto-Light;
        color: #666
    }

    .deliver-top .descrip {
        font-size: 13px
    }

    .deliver-top-no .descrip {
        font-size: 12px
    }

    .backsys .infoaf,
    .backsys .infobe {
        font-size: 14px
    }

    .deliver-dt {
        background: url(//theme.hstatic.net/1000162838/1000469515/14/icon-deliver.png?v=657) center left no-repeat
    }

    .deliver-ch {
        background: url(//theme.hstatic.net/1000162838/1000469515/14/icon-day90.png?v=657) center left no-repeat
    }

    .deliver-pay {
        background: url(//theme.hstatic.net/1000162838/1000469515/14/icon-pay.png?v=657) center left no-repeat
    }

    .deliver-phone {
        background: url(//theme.hstatic.net/1000162838/1000469515/14/icon-phonehot.png?v=657) center left no-repeat
    }

    label {
        font-weight: 400
    }

    .variant-price {
        font-size: 30px;
        color: rgb(227, 33, 36);
        margin: 0px;
    }

    a.addnow {
        color: #fff;
        background-color: #d61c1f;
        border: none;
        font-size: 18px;
        display: block;
        padding: 8px 0;
        text-align: center;
        width: 100%;
    }

    .product h4 {
        font-size: 12px;
        color: #666;
        margin: 0 0 10px;
        font-weight: 400;
    }

    .product-tabs {
        margin-top: 0px;
        padding: 0;
        border-top: solid 3px #cf1919;
    }

    .tab-content {
        border: 1px solid #ebebeb;
        padding: 15px !important;
    }

    @media screen and (max-width: 480px) {
        .product-single #AddToCart {
            margin-top: 0;
        }

        .detail-two-container {
            padding: 0px;
        }
    }


    .hangmoi {

        background: url('//theme.hstatic.net/1000162838/1000469515/14/hangmoi.png?v=657') no-repeat;
        position: absolute;
        z-index: 99;
        top: 5px;
        left: 5px;
        background-size: 100%;
        width: 100px;
        height: 32px;
        display: block;
    }

    .thanhly {

        background: url('//theme.hstatic.net/1000162838/1000469515/14/thanhly.png?v=657') no-repeat;
        position: absolute;
        z-index: 99;
        top: 5px;
        left: 5px;
        background-size: 100%;
        width: 100px;
        height: 32px;
        display: block;
    }


    .banchay {

        background: url('//theme.hstatic.net/1000162838/1000469515/14/banchay.png?v=657') no-repeat;
        position: absolute;
        z-index: 99;
        top: 5px;
        left: 5px;
        background-size: 100%;
        width: 100px;
        height: 32px;
        display: block;
    }

    .hangsapve {

        background: url('//theme.hstatic.net/1000162838/1000469515/14/hangsapve.png?v=657') no-repeat;
        position: absolute;
        z-index: 99;
        top: 5px;
        left: 5px;
        background-size: 100%;
        width: 120px;
        height: 32px;
        display: block;
    }

    .hangorder {

        background: url('//theme.hstatic.net/1000162838/1000469515/14/hangorder.png?v=657') no-repeat;
        position: absolute;
        z-index: 99;
        top: 5px;
        left: 5px;
        background-size: 100%;
        width: 120px;
        height: 32px;
        display: block;
    }

    .title_new_post h3 {
        font-size: 18px;
        font-weight: bold;
        padding-top: 5px;

    }


    .url-img {
        margin-right: auto;
        margin-left: auto;
        display: block;
        height: 200px;
    }


    .cssmenu .item {
        background: #666;

    }

    #cssmenu li {
        background: #fff;
    }

    #cssmenu li a {}

    #cssmenu hover li {}

    .nav.sidebar#cssmenu>li:hover>a {
        background: #54bcd5 !important;
    }

    #cssmenu .children li a:hover {
        background: #54bcd5 !important;
    }

    .col-md-12.list-like {
        display: inline-block;
    }

    #myMenu.sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

    #mymenu {
        margin: 0 !important;
    }

    h3.product-recommend-fake {
        font-size: 22px;
        font-weight: 500;
        color: #1973a5;
        margin: 0 15px;
        padding: 10px 0;
    }
</style>


<style>
    .fixed {
        position: fixed;
        z-index: 9999;
    }

    .toolbar--left {
        left: 0px;
        top: 200px;
    }

    .sidebar-social .list-social li a {
        background: #1aa553;
    }

    .sidebar-social .list-social li a:hover {
        background: #ff7264;
    }

    .call-button {
        left: 15px;
        bottom: 15px;
        height: 60px;
        width: 60px;
        transition: all .5s;
    }

    .call-button .fa {
        font-size: 35px;
        line-height: 60px;
    }

    /* sale */
    .gid-sale {
        position: relative;
        display: inline-block;
        background: orange;
        color: white;
        height: 2.8rem;
        width: 2.8rem;
        text-align: center;
        vertical-align: middle;
        line-height: 2.5rem;
        margin: 0 8px;
        transform: rotate(-20deg);
        animation: beat 1s ease infinite alternate;
    }

    .gid-sale:before,
    .gid-sale:after {
        content: "";
        position: absolute;
        background: inherit;
        height: inherit;
        width: inherit;
        top: 0;
        left: 0;
        z-index: -1;
        transform: rotate(30deg);
    }

    .gid-sale:after {
        transform: rotate(60deg);
    }

    @keyframes beat {
        from {
            transform: rotate(-20deg) scale(1);
        }

        to {
            transform: rotate(-20deg) scale(1.1);
        }
    }

    /* pulse button */
    .pulse-button {
        position: relative;
        display: block;
        width: 60px;
        height: 60px;
        font-size: 1.3em;
        font-weight: light;
        font-family: 'Trebuchet MS', sans-serif;
        text-transform: uppercase;
        text-align: center;
        line-height: 60px;
        letter-spacing: -1px;
        color: white;
        border: none;
        border-radius: 50%;
        background: rgba(111, 194, 97, 0.74);
        cursor: pointer;
        box-shadow: 0 0 0 0 rgba(60, 188, 141, 0.5);
        -webkit-animation: pulse 1.5s infinite;
        transition: all .5s;
    }

    @-webkit-keyframes shake {
        0% {
            -webkit-transform: rotateZ(5deg);
            -moz-transform: rotateZ(5deg);
            -ms-transform: rotateZ(5deg);
            transform: rotateZ(5deg);
        }

        25% {
            -webkit-transform: rotateZ(-5deg);
            -moz-transform: rotateZ(-5deg);
            -ms-transform: rotateZ(-5deg);
            transform: rotateZ(-5deg);
        }

        50% {
            -webkit-transform: rotateZ(5deg);
            -moz-transform: rotateZ(5deg);
            -ms-transform: rotateZ(5deg);
            transform: rotateZ(5deg);
        }

        75% {
            -webkit-transform: rotateZ(-5deg);
            -moz-transform: rotateZ(-5deg);
            -ms-transform: rotateZ(-5deg);
            transform: rotateZ(-5deg);
        }
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(0.9);
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -webkit-transform: scale(0.9);
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }


    .gid-sale-box {
        transition: all .5s;
    }

    .gid-sale-box p {
        padding: 0 15px;
    }

    .gid-sale-box:hover {
        box-shadow: 0px 0px 21px 0px rgba(0, 0, 0, 0.75);
        transform: translateZ(26px);
        z-index: 9;
    }

    @media screen and (max-width: 480px) {
        .call-button {
            left: 10px;
            bottom: 10px;
        }
    }
</style>

<style>
    .product-detail {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* căn giữa theo chiều dọc */
        text-align: center;
        /* căn giữa theo chiều ngang */
    }

    .add-cart {
        margin-top: 10px;
        /* điều chỉnh khoảng cách giữa giá và button */
    }

    .hidden-button {
        border: none;
        background: none;
        padding: 0;
        margin: 0;
    }
</style>

<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;

    }

    .pagination li {
        display: inline;
        margin: 0 2px;
    }

    .pagination a,
    .pagination span {
        color: #007bff;
        padding: 6px 12px;
        margin-right: 4px;
        border: 1px solid #007bff;
        border-radius: 4px;
        cursor: pointer;
    }

    .pagination .active a,
    .pagination .active span {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
        cursor: default;
    }

    @keyframes shake {
        0% {
            transform: translate(0, 0);
        }

        25% {
            transform: translate(-5px, 0) rotate(5deg);
        }

        50% {
            transform: translate(5px, 0) rotate(-5deg);
        }

        75% {
            transform: translate(-5px, 0) rotate(5deg);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    .fa-mobile {
        animation: shake 0.5s ease infinite;
        /* Thời gian, hình thức và lặp lại animation */
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 50px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: auto;
        /* Tự động điều chỉnh kích thước ảnh */
        max-width: 80%;
        /* Tối đa 80% chiều rộng của màn hình */
        max-height: 80vh;
        /* Tối đa 80% chiều cao của màn hình */
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: auto;
        /* Tự động điều chỉnh kích thước chú thích */
        max-width: 80%;
        /* Tối đa 80% chiều rộng của màn hình */
        text-align: center;
        color: #ccc;
        padding: 10px 0;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            margin-top: 80px;
            width: 90%;
            /* Điều chỉnh chiều rộng ảnh */
            max-width: 100%;
        }

        #caption {
            width: 90%;
            /* Điều chỉnh chiều rộng chú thích */
            max-width: 100%;
        }

        .close {
            top: 65px;
            right: 15px;
        }

    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: white; 
        border-bottom: 1px solid #e0e0e0; 
    }

    .logo img {
        max-width: 100%; 
    }

    .seach-header {
        flex-grow: 1;
        margin: 0 20px; 
    }

    .phone-header {
        text-align: right; 
    }

    .social-header {
        display: flex;
        align-items: center; 
        justify-content: end;
    }

    .social-icons img {
        margin-right: 10px; 
        transition: transform 0.3s; 
    }

    .social-icons img:hover {
        transform: scale(1.1); 
    }

    @media (max-width: 768px) {
        .social-header {
            display: none;
        }
    }

    .seach-header {
    display: flex;
    align-items: center; /* Center items vertically */
    justify-content: space-between; /* Space between items */
}

    #search-form {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-input {
        padding: 10px; /* Padding for input */
        border: 1px solid #ccc; /* Border styling */
        border-top-left-radius: 4px; /* Rounded corners */
        border-bottom-left-radius: 4px; /* Rounded corners */
        margin-right: 10px; /* Space between input and button */
    }

    button {
        background-color: #007bff; /* Button color */
        color: white; /* Text color */
        border: none; /* Remove border */
        padding: 10px 15px; /* Button padding */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Pointer cursor on hover */
    }

    button:hover {
        background-color: #0056b3; /* Darker button color on hover */
    }

    .custom-slider {
        position: relative;
        max-width: 100%;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .slides {
        display: flex;
    }

    .slide {
        min-width: 100%;
        box-sizing: border-box;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .slide.active {
        opacity: 1;
    }

    button.prev, button.next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(25, 115, 165, 0.8);
        border: none;
        cursor: pointer;
        padding: 10px;
    }

    button.prev {
        left: 10px;
    }

    button.next {
        right: 10px;
    }

    .login-container {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #1973a5;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: white;
}

    .logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo img {
        width: 150px; /* Adjust size as needed */
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        border: 1px solid #1973a5;
        border-radius: 4px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #1973a5;
        border: none;
        color: white;
        padding: 10px;
        width: 100%;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: #155a8a; /* Darker shade on hover */
    }

</style>