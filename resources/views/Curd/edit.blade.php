@extends('Curd.main')
@section('Pagis')
<div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Update User</h1>
        <form action="{{route('curd.update',$data['id'])}}" method="POST">
          @method('PUT')
          @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded" value="{{
                  $data['name']
                }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded" value="{{$data['email']}}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            <a href="{{route('curd.index')}}" class=" bg-red-500 text-white px-4 py-2 rounded ">Cancel</a>
        </form>
    </div>
@endsection