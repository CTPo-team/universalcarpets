<div class="table-responsive">
    <table class="table" id="aboutUsPages-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aboutUsPages as $aboutUsPage)
            <tr>
                       <td>{{ $aboutUsPage->title }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['aboutUsPages.destroy', $aboutUsPage->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('aboutUsPages.show', [$aboutUsPage->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('aboutUsPages.edit', [$aboutUsPage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
