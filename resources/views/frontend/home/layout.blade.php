<!DOCTYPE html>
<html>

<head>
    @include('frontend.component.head')
</head>

<body>
    <div id="wrapper">
        @include('frontend.component.navbar_manager')
        @include('frontend.component.customer.bookroomcancel')
        @include('frontend.component.footer')
    </div>
    @include('frontend.component.script')
</body>

</html>