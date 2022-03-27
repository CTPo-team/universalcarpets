<div class="table-responsive">
    <table class="table" id="bannerBlogs-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($bannerBlogs->id))
                <tr>
                    <td>{{ $bannerBlogs->title }}</td>
                    <td>
                        <div class="gallery gallery-md">
                            <div class="gallery-item" data-image="{{$bannerBlogs->path_image}}" data-title="Image 1" href="{{$bannerBlogs->path_image}}" title="Image 1" style="background-image: url({{$bannerBlogs->path_image}});"></div>
                        </div>
                    </td>
                    <td class=" text-center">
                        <div class='btn-group'>
                            <a href="{!! route('bannerBlogs.edit', [$bannerBlogs->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
