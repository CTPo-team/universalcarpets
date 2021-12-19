<div class="table-responsive">
    <table class="table" id="aboutUsPages-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Desc</th>
        <th>Short Desc</th>
        <th>Seo Desc</th>
        <th>Seo Category</th>
        <th>Seo Keyword</th>
        <th>Seo Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aboutUsPages as $aboutUsPage)
            <tr>
                       <td>{{ $aboutUsPage->title }}</td>
            <td>{{ $aboutUsPage->desc }}</td>
            <td>{{ $aboutUsPage->short_desc }}</td>
            <td>{{ $aboutUsPage->seo_desc }}</td>
            <td>{{ $aboutUsPage->seo_category }}</td>
            <td>{{ $aboutUsPage->seo_keyword }}</td>
            <td>{{ $aboutUsPage->seo_url }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['aboutUsPages.destroy', $aboutUsPage->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('aboutUsPages.show', [$aboutUsPage->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('aboutUsPages.edit', [$aboutUsPage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
