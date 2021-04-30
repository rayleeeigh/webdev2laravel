@extends('layouts.app')

@section('content')

<header>
    @include('layouts.header')
</header>

<div class="w-full relative shadow-2xl rounded overflow-hidden">
    <div class="top h-72 w-full bg-blue-600 overflow-hidden relative" >
      <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
      <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
        <img src="{{ Auth::user()->image }}" class="mt-4 h-24 w-24 object-cover rounded-full">
        <h1 class="text-2xl font-semibold">{{ Auth::user()->name }}</h1>
        <h4 class="text-sm font-semibold">Joined Since {{ Carbon\Carbon::parse(Auth::user()->created_at)->year }}</h4>
      </div>
    </div>
    <div class="grid grid-cols-12 bg-white ">
  
      <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">
  
        <a href="#" class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">Account Information</a>
  
        <a href="#" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Bucket List</a>
  
      </div>
  
      <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
        <div class="px-4 pt-4">
          <form action="#" class="flex flex-col space-y-8">
  
            <div>
              <h3 class="text-2xl font-semibold">Account Information</h3>
              <hr>
            </div>
  
            <div class="form-item">
              <label class="text-xl ">Full Name</label>
              <input type="text" value="{{ Auth::user()->fullname }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2  mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200" disabled>
            </div>
  
            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
  
              <div class="form-item w-full">
                <label class="text-xl ">Username</label>
                <input type="text" value="{{ Auth::user()->name }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
              </div>
  
              <div class="form-item w-full">
                <label class="text-xl ">Email</label>
                <input type="text" value="{{ Auth::user()->email }}" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>
              </div>
            </div>
  
            <div>
              <h3 class="text-2xl font-semibold ">More About Me</h3>
              <hr>
            </div>
  
            <div class="form-item w-full">
              <label class="text-xl ">Biography</label>
              <textarea cols="30" rows="10" class="w-full appearance-none text-black text-opacity-50 rounded shadow py-1 px-2 mr-2 focus:outline-none focus:shadow-outline focus:border-blue-200 text-opacity-25 " disabled>{{ Auth::user()->biography }}</textarea>
            </div>
  
          </form>
        </div>
      </div>
  
  
    </div>
  </div>

<footer>
    @include('layouts.footer')
</footer>

@endsection