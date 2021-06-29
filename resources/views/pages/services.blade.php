@extends('../template/index')
@section('content')
    <h1>services subheading</h1>
    <nav class="_bg-grey rounded-2" aria-label="breadcrumb">
        <ol class="breadcrumb ps-3 py-2">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/home/services">Services</a>
            </li>
        </ol>
    </nav>
    <img class="img-fluid" src="https://via.placeholder.com/1200x300" alt="">
    <div class="mt-2 d-flex">
        <div class="card" style="width: 33.333% ">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary text-white ">Button</a>
            </div>
        </div>
        <div class="card mx-2" style="width: 33.333% ">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting
                    text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary text-white ">Button</a>
            </div>
        </div>
        <div class="card" style="width: 33.333% ">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary text-white ">Button</a>
            </div>
        </div>
    </div>
@endsection
