<div class="table-responsive">
    <table class="table" id="bannerHomepages-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Button Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bannerHomepages as $bannerHomepage)
            <tr>
                    <td><img src="{{asset('img/banner/'.$bannerHomepage->path_image)}}" style="max-width:100px"></td>
                    <td>{{ $bannerHomepage->title }}</td>
                    <td><a href="{{ $bannerHomepage->button_url }}">{{ $bannerHomepage->button_url }}</a></td>
                    <td>{!! $bannerHomepage->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['bannerHomepages.destroy', $bannerHomepage->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('bannerHomepages.show', [$bannerHomepage->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('bannerHomepages.edit', [$bannerHomepage->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
