<div class="table-responsive">
    <table class="table" id="bannerAboutus-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($bannerAboutus->id))
                <tr>
                    <td>{{ $bannerAboutus->title }}</td>
                    <td>
                        <div class="gallery gallery-md">
                            <div class="gallery-item" data-image="{{$bannerAboutus->path_image}}" data-title="Image 1" href="{{$bannerAboutus->path_image}}" title="Image 1" style="background-image: url({{$bannerAboutus->path_image}});"></div>
                        </div>
                    </td>
                    <td class=" text-center">
                        <div class='btn-group'>
                            <a href="{!! route('bannerAboutus.edit', [$bannerAboutus->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
