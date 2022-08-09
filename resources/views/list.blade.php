<center>
 <h2>List of members</h2>
 <table border="1">
  <tr>
   <th>ID</th>
   <th>NAME</th>
   <th>EMAIL</th>
  </tr>
  @foreach ($memberdata as $item)
  <tr>
   <td>{{ $item->id }}</td>
   <td>{{ $item->name }}</td>
   <td>{{ $item->email }}</td>
  </tr>
  @endforeach
 </table>
</center>