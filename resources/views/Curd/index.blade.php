@extends('Curd.main')
@section('Pagis')
@if(session('success'))
            <div class=" absolute top-1 right-4 text-2xl bg-green-300 text-white rounded transition-all transition" id="success">{{ session('success') }}</div>
        @endif
<div class="container mx-auto mt-10">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Users</h1>
            <a href="{{route('curd.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Add User</a>
        </div>
        <table class="min-w-full bg-white">
            <thead>
              <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
              
                <tr class="">
                    <td class="py-2 px-4 border-b">{{$row['id']}}</td>
                    
                    <td class="py-2 px-4 border-b">{{$row['name']}}</td>
                    <td class="py-2 px-4 border-b">{{$row['email']}}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{route('curd.edit',$row['id'])}}" class="text-blue-500">Edit</a>
                        <form action="{{route('curd.destroy',$row['id'])}}" method="post" accept-charset="utf-8" class="inline">
                          @method('DELETE')
                          @csrf
                          
                          <input type="submit" class="text-red-500 ml-4 bg-transparent" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Repeat for each user -->
            </tbody>
        </table>
        <script type="text/javascript" charset="utf-8">
          var i = setTimeout(function() {
            document.querySelector("#success").classList.add('hidden');
          }, 1000);

        </script>
    </div>
@endsection
