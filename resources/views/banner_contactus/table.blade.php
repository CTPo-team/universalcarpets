<div class="table-responsive">
    <table class="table" id="bannerContactus-table">
    <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($bannerContactus->id))
                <tr>
                    <td>{{ $bannerContactus->title }}</td>
                    <td>
                        <div class="gallery gallery-md">
                            <div class="gallery-item" data-image="{{$bannerContactus->path_image}}" data-title="Image 1" href="{{$bannerContactus->path_image}}" title="Image 1" style="background-image: url({{$bannerContactus->path_image}});"></div>
                        </div>
                    </td>
                    <td class=" text-center">
                        <div class='btn-group'>
                            <a href="{!! route('bannerContactus.edit', [$bannerContactus->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
