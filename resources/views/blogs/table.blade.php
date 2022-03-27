<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Blog Category</th>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                       <td>{{ $blog->blogCategory->title ?? "" }}</td>
            <td>{{ $blog->title }}</td>
            <td>{!! $blog->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('blogs.show', [$blog->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('blogs.edit', [$blog->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
