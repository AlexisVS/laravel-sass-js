@extends('../template/index')
@section('content')
    <h1>Welcome Subheading</h1>
    <nav class="_bg-grey rounded-2" aria-label="breadcrumb">
        <ol class="breadcrumb ms-3 py-2">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/home/contact">Welcome</a>
            </li>
        </ol>
    </nav>
    <p><span>{{ url()->previous() }}{{ url()->previous() }}{{ url()->current() }}</span></p>
    <div class="_bg-grey py-5 px-3 text-center rounded-3">
        <p class="display-4 text-center">Hello CodingSchool</p>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corrupti.</p>
        <hr>
        <p class="fs-6 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, cum.</p>
        <a href="/home/about" class="btn btn-primary text-center mx-auto">About</a>
    </div>
    <div class="text-center mt-4">
        <h3>Bonus :</h3>
        <p><strong>Url actuel : </strong>{{{url()->current()}}}</p>
        <p><strong>Url précédente : </strong>{{{url()->previous()}}}</p>
    </div>    
@endsection
