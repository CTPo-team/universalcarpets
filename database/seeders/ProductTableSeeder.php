<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'Products 1',
                'slug' => 'products-1',
            'desc' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae.</p>',
                'status' => 1,
                'featured' => 0,
                'path_image_thumbnail' => '623d95ece9efa.png',
                'path_image' => '623d95f21cfb6.png,623d95f21cfdf.png',
                'seo_desc' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae.',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol1',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:05',
                'updated_at' => '2022-03-25 10:41:48',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'Products 2',
                'slug' => 'products-2',
            'desc' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif;">Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae.</p>',
                'status' => 1,
                'featured' => 0,
                'path_image_thumbnail' => '623d95d7187e3.png',
                'path_image' => '623d95de9d26d.png,623d95de8df56.png,623d95de9e35a.png,623d95dea1e73.png',
                'seo_desc' => 'orem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae.',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:24',
                'updated_at' => '2022-03-25 10:41:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'Products 3',
                'slug' => 'products-3',
            'desc' => '<p>What is Lorem Ipsum?</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Why do we use it?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p>Where does it come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>',
                'status' => 1,
                'featured' => 0,
                'path_image_thumbnail' => '623d92d617a24.png',
                'path_image' => '623d92dec3529.png,623d92dec4f13.png,623d92ded7d06.png',
            'seo_desc' => 'What is Lorem Ipsum?Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Where does it come from?Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol2',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:39',
                'updated_at' => '2022-03-25 10:41:37',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_category_id' => 1,
                'product_brand_id' => 1,
                'title' => 'Products 4',
                'slug' => 'products-4',
            'desc' => '<p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;">Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae</p>',
                'status' => 1,
                'featured' => 1,
                'path_image_thumbnail' => '623d92ed44a22.png',
                'path_image' => '623d92f2e446f.png,623d92f2e509b.png,623d92f2f23bd.png',
                'seo_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget commodo ante. Phasellus sed pulvinar quam, a sagittis ipsum. Nullam dapibus sem id augue fringilla, sit amet hendrerit ipsum varius. Vivamus tellus enim, aliquam et quam id, euismod iaculis est. Aenean lacus felis, placerat nec ipsum at, consequat mollis arcu. Integer id quam neque. Suspendisse posuere mi luctus, volutpat turpis eget, vulputate lectus. In id odio quis nunc aliquam eleifend. Aliquam nulla sapien, semper eget malesuada in, feugiat et nulla. Praesent dignissim orci vitae eleifend facilisis. Nam eu pulvinar mauris. Integer interdum sem erat, in vestibulum eros pharetra non. Nunc congue eleifend neque, eu pellentesque orci bibendum varius. Sed tempus libero tincidunt vulputate malesuada.Morbi felis nunc, ornare vitae ligula nec, efficitur aliquam sem. Nulla placerat fringilla nunc interdum volutpat. Ut gravida nisl ipsum, quis porttitor lorem volutpat ut. Nunc a arcu nec turpis mollis luctus. Mauris non sodales lacus. Curabitur id imperdiet risus. Vestibulum sagittis dolor id metus luctus pellentesque. Pellentesque pretium sodales luctus. Suspendisse a lobortis sem, id tincidunt mi. Praesent in dolor sit amet ligula imperdiet scelerisque. Mauris ultricies suscipit ex, sodales pharetra dui finibus vitae',
                'seo_category' => 'product',
                'seo_keyword' => 'newcol4',
                'seo_url' => 'http://localhost/universalcarpets/public',
                'created_at' => '2021-12-25 18:12:54',
                'updated_at' => '2022-03-25 10:41:29',
                'deleted_at' => '2022-02-05 10:45:04',
            ),
        ));
        
        
    }
}