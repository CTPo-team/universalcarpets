<div class="table-responsive">
    <table class="table" id="bannerProducts-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Button Url</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bannerProducts as $bannerProduct)
                <tr>
                        <td>
                            <div class="gallery gallery-md">
                                <div class="gallery-item" data-image="{{asset('img/gallery/'.$bannerProduct->path_image)}}" data-title="Image 1" href="{{asset('img/gallery/'.$bannerProduct->path_image)}}" title="Image 1" style="background-image: url({{asset('img/gallery/'.$bannerProduct->path_image)}});"></div>
                            </div>
                        </td>
                        <td>{{ $bannerProduct->title }}</td>
                        <td><a href="{{ $bannerProduct->button_url }}">{{ $bannerProduct->button_url }}</a></td>
                        <td>{!! $bannerProduct->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</td>
                        <td class=" text-center">
                            {!! Form::open(['route' => ['bannerProducts.destroy', $bannerProduct->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                <a href="{!! route('bannerProducts.show', [$bannerProduct->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                                <a href="{!! route('bannerProducts.edit', [$bannerProduct->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}     
                                </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
