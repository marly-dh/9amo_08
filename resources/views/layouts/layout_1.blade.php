<html>
@include('partials.header')
<body>

<main class="container-fluid">
    <div class="row no-gutters flex-column-reverse flex-xl-row">
        <div class="col-12 col-xl-8 p-3">
            <h1>{{$page->title}}</h1>
            <small>{{$page->subtitle}}</small>

            <div class="d-flex justify-content-between">
                <p>
                    {{$page->text1}}
                </p>
                <img class="img-fluid w-50" src="{{$page->img_url1}}" onerror="this.remove()">
            </div>


            <div class="d-flex">
                <img class="img-fluid w-50" src="{{$page->img_url2}}" onerror="this.remove()">
                <p>
                    {{$page->text2}}
                </p>
            </div>


            <img class="w-100" src="{{$page->banner_img_url}}" onerror="this.remove()">
            <h4>{{$page->banner_text}}</h4>
        </div>
        <div class="col-12 col-xl-4 p-3">
            Sidebar
        </div>

    </div>
</main>

</body>
</html>
