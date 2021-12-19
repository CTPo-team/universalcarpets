<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Product Category Id</th>
        <th>Title</th>
        <th>Path Image</th>
        <th>Desc</th>
        <th>Status</th>
        <th>Seo Desc</th>
        <th>Seo Category</th>
        <th>Seo Keyword</th>
        <th>Seo Url</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->product_category_id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->path_image }}</td>
            <td>{{ $product->desc }}</td>
            <td>{{ $product->status }}</td>
            <td>{{ $product->seo_desc }}</td>
            <td>{{ $product->seo_category }}</td>
            <td>{{ $product->seo_keyword }}</td>
            <td>{{ $product->seo_url }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
