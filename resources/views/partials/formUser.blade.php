@include('layouts.flash')

<div class="w-50 mx-auto mt-5">
    <form action="/user" method="POST">
        @csrf
        <h2>User : </h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{old('email')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nickname</label>
            <input type="text" name="nickname" class="form-control" value="{{old('nickname')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <h2>Profil : </h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" name="name" class="form-control" value="{{old('nickname')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone</label>
            <input type="text" name="phone" class="form-control" value="{{old('nickname')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">age</label>
            <input type="number" name="age" class="form-control" value="{{old('nickname')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>

<div class="w-75 mx-auto my-5">
@foreach ($users as $user)
    <h1><u>User</u> : </h1>
    <h3><span class="bg-info">Email</span> : {{$user->email}}</h3>
    <h3><span class="bg-info">Surnom</span> : {{$user->nickname}}</h3>
    <h2>Son profil : </h2>
    <h3><span class="bg-success">Nom</span> : {{$user->profil->name}}</h3>
    <h3><span class="bg-success">Tel</span> : {{$user->profil->phone}}</h3>
    <h3><span class="bg-success">Age</span> : {{$user->profil->age}}</h3>
@endforeach
</div>




{{-- <div class="w-50 mx-auto mt-5">
    @foreach ($profils as $profil)
        <h2>L'élément : {{ $profil->name }}</h2>
        @foreach ($profil->user as $user)
            <h5 class="ms-5"> possède -> {{ $user->nickname }} </h5>
        @endforeach
    @endforeach
</div> --}}


