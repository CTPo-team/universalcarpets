<div class="table-responsive">
    <table class="table" id="blogCategories-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Desc</th>
        <th>Seo Desc</th>
        <th>Seo Category</th>
        <th>Seo Keyword</th>
        <th>Seo Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogCategories as $blogCategory)
            <tr>
                       <td>{{ $blogCategory->title }}</td>
            <td>{{ $blogCategory->desc }}</td>
            <td>{{ $blogCategory->seo_desc }}</td>
            <td>{{ $blogCategory->seo_category }}</td>
            <td>{{ $blogCategory->seo_keyword }}</td>
            <td>{{ $blogCategory->seo_url }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['blogCategories.destroy', $blogCategory->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('blogCategories.show', [$blogCategory->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('blogCategories.edit', [$blogCategory->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
