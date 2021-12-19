<div class="table-responsive">
    <table class="table" id="bannerHomepages-table">
        <thead>
            <tr>
                <th>Path Image</th>
        <th>Title</th>
        <th>Desc</th>
        <th>Button Url</th>
        <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bannerHomepages as $bannerHomepage)
            <tr>
                       <td>{{ $bannerHomepage->path_image }}</td>
            <td>{{ $bannerHomepage->title }}</td>
            <td>{{ $bannerHomepage->desc }}</td>
            <td>{{ $bannerHomepage->button_url }}</td>
            <td>{{ $bannerHomepage->status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bannerHomepages.destroy', $bannerHomepage->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bannerHomepages.show', [$bannerHomepage->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bannerHomepages.edit', [$bannerHomepage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
