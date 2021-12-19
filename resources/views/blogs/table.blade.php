<div class="table-responsive">
    <table class="table" id="blogs-table">
        <thead>
            <tr>
                <th>Blog Category Id</th>
        <th>Title</th>
        <th>Path Image</th>
        <th>Desc</th>
        <th>Short Desc</th>
        <th>Status</th>
        <th>Seo Desc</th>
        <th>Seo Category</th>
        <th>Seo Keyword</th>
        <th>Seo Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                       <td>{{ $blog->blog_category_id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->path_image }}</td>
            <td>{{ $blog->desc }}</td>
            <td>{{ $blog->short_desc }}</td>
            <td>{{ $blog->status }}</td>
            <td>{{ $blog->seo_desc }}</td>
            <td>{{ $blog->seo_category }}</td>
            <td>{{ $blog->seo_keyword }}</td>
            <td>{{ $blog->seo_url }}</td>
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
