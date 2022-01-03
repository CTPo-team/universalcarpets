<div class="table-responsive">
    <table class="table" id="contactUsPages-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Embed Maps Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contactUsPages as $contactUsPage)
            <tr>
            <td>{{ $contactUsPage->title }}</td>
            <td>{{ $contactUsPage->embed_maps_link }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['contactUsPages.destroy', $contactUsPage->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('contactUsPages.show', [$contactUsPage->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('contactUsPages.edit', [$contactUsPage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
