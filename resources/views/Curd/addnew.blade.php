@extends('Curd.main')
@section('Pagis')
<div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Create User</h1>
        <form action="{{route('curd.store')}}" method="POST">
          @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded" required value="{{old('name')}}">
                @if($errors->has('name'))
                    <span class=" m-1 text-red-600">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded" required value="{{old('email')}}">
                @if($errors->has('email'))
                    <span class=" m-1 text-red-600">{{$errors->first('email')}}</span>
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            <a href="{{route('curd.index')}}" class=" bg-red-500 text-white px-4 py-2 rounded ">Cancel</a>
            @if(session('success'))
            <div class="p-2 bg-green-600 text-blue-300 text-2xl rounded">{{ session('success') }}</div>
        @endif
        </form>
    </div>
@endsection